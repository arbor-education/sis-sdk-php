<?php

declare(strict_types=1);

namespace Arbor\Api\Gateway\HttpClient;

use Arbor\Api\Exception\ResourceNotFoundException;
use Arbor\Api\Exception\ServerErrorException;
use Arbor\Api\Gateway\UploadFile;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\MultipartStream\MultipartStreamBuilder;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use RuntimeException;

class HttpClient implements HttpClientInterface
{
    public function __construct(
        private readonly TypedRequestFactory $typedRequestFactory,
        private ?ClientInterface         $httpClient = null,
        private ?StreamFactoryInterface  $streamFactory = null,
        protected string                 $baseUrl = '',
        protected string                 $authUser = '',
        protected string                 $authPassword = '',
        protected string                 $userAgent = 'Arbor PHP SDK',
        protected ?string                $applicationId = null
    ) {
        $this->httpClient = $httpClient ?: Psr18ClientDiscovery::find();
        $this->streamFactory = $streamFactory ?: Psr17FactoryDiscovery::findStreamFactory();
        $this->applicationId = $applicationId ?: null;

        $this->setBaseUrl($baseUrl);
        $this->setAuthUser($authUser);
        $this->setAuthPassword($authPassword);
        $this->setUserAgent($userAgent);
    }

    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    public function setApplicationId(string $applicationId): void
    {
        $this->applicationId = $applicationId;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent): static
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    public function getAuthPassword(): string
    {
        return $this->authPassword;
    }

    public function setAuthPassword(string $authPassword): static
    {
        $this->authPassword = $authPassword;
        return $this;
    }

    public function getAuthUser(): string
    {
        return $this->authUser;
    }

    public function setAuthUser(string $authUser): static
    {
        $this->authUser = $authUser;
        return $this;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): static
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $options
     * @return array
     * @throws ServerErrorException
     */
    public function sendRequest(string $method, string $url, array $options = []): array
    {
        /** @var RequestInterface $request */
        list($request, $requestPayload) = $this->prepareRequest($method, $url, $options);

        return $this->executeRequest($request, $requestPayload);
    }

    protected function isResponseValid(int $code): bool
    {
        return in_array($code, [200, 201, 204, 422]);
    }

    /**
     * @throws ServerErrorException
     */
    public function uploadRequest(string $url, UploadFile $file, array $options = []): array
    {
        $request = $this->prepareBaseRequest(self::HTTP_METHOD_POST, $url, $options);

        $builder = new MultipartStreamBuilder($this->streamFactory);

        $partOptions = [];
        if ($file->filename !== null) {
            $partOptions['filename'] = $file->filename;
        }
        if ($file->headers !== null) {
            $partOptions['headers'] = $file->headers;
        }

        $builder->addResource($file->name, $file->contents, $partOptions);

        $request = $request
            ->withHeader('Content-Type', 'multipart/form-data; boundary="' . $builder->getBoundary() . '"')
            ->withBody($builder->build());

        return $this->executeRequest($request, '[multipart data]');
    }

    protected function prepareBaseRequest(string $method, string $url, array $options): RequestInterface
    {
        // Handle query parameters by appending them to the URL
        if (!empty($options['query']) && is_array($options['query'])) {
            $queryString = http_build_query($options['query']);
            if ($queryString !== '') {
                $url .= (mb_strpos($url, '?') !== false ? '&' : '?') . $queryString;
            }
        }

        $request = $this->typedRequestFactory->createRequest($method, $this->baseUrl . $url);

        // Adding user agent string if it's not passed
        $options['headers']['User-Agent'] = $options['headers']['User-Agent'] ?? $this->userAgent;

        // Adding applicationId headers if it's passed.
        if ($this->applicationId) {
            $options['headers']['x-mis-application-id'] = $this->applicationId;
        }

        // Handling all additional input headers
        foreach ($options['headers'] as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        // Basic Authorization
        if (isset($this->authUser, $this->authPassword)) {
            $header = sprintf('Basic %s', base64_encode(sprintf('%s:%s', $this->getAuthUser(), $this->getAuthPassword())));
            $request = $request->withHeader('Authorization', $header);
        }

        return $request;
    }

    protected function prepareRequest(string $method, string $url, array $options): array
    {
        $request = $this->prepareBaseRequest($method, $url, $options);
        $requestPayload = null;

        if (is_array($options['body'] ?? null)) {
            $requestPayload = $options['body'];
            $bodyStream = $this->streamFactory->createStream(json_encode($requestPayload));
            $request = $request->withBody($bodyStream);
        }

        return [$request, $requestPayload];
    }

    /**
     * @throws ServerErrorException
     */
    protected function executeRequest(RequestInterface $request, mixed $requestPayload): array
    {
        try {
            $response = $this->httpClient->sendRequest($request);

            $response->getBody()->rewind();
            $responsePayload = json_decode($response->getBody()->getContents(), true);
        } catch (ClientExceptionInterface|RuntimeException $e) {
            throw new ServerErrorException('An unexpected error has occurred: ' . $e->getMessage(), 0, $e);
        }

        $code = $response->getStatusCode();

        if (!is_array($responsePayload) && !$this->isResponseValid($code)) {
            throw new ServerErrorException('Server responded with an invalid response', 0, null, $requestPayload);
        }

        if (isset($responsePayload['response']['code'])) {
            $code = $responsePayload['response']['code'];
        }

        $message = $responsePayload['response']['reason'] ?? 'API Error';

        $serverMessage = $serverTrace = $serverException = null;

        if (isset($responsePayload['response']['errors']) &&
            is_array($responsePayload['response']['errors']) &&
            count($responsePayload['response']['errors'])
        ) {
            $serverException = $responsePayload['response']['errors'][0]['exception'];
            $serverMessage = $responsePayload['response']['errors'][0]['message'];
            $serverTrace = $responsePayload['response']['errors'][0]['trace'];
            $message = sprintf("Server threw: %s with message: %s URL=%s", $serverException, $serverMessage, (string) $request->getUri());
        }

        return match ($code) {
            200, 201, 204, 422 => $responsePayload ?? [],
            404 => throw new ResourceNotFoundException($message ?? 'Not Found'),
            default => throw $this->getErrorException($message, $requestPayload, $responsePayload, $serverException, $serverMessage, $serverTrace),
        };
    }

    protected function getErrorException($message, $requestPayload, $responsePayload, $serverException, $serverMessage, $serverTrace): ServerErrorException
    {
        $exception = new ServerErrorException($message, 0, null, $requestPayload, $responsePayload);
        if (null !== $serverException) {
            $exception->setServerExceptionClass($serverException);
            $exception->setServerExceptionMessage($serverMessage);
            $exception->setServerExceptionTrace($serverTrace);
        }
        return $exception;
    }
}
