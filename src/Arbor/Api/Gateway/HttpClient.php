<?php

namespace Arbor\Api\Gateway;

use Arbor\Api\ResourceNotFoundException;
use Arbor\Api\ServerErrorException;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use RuntimeException;

class HttpClient
{
    public function __construct(
        private ?ClientInterface         $httpClient = null,
        private ?RequestFactoryInterface $requestFactory = null,
        private ?StreamFactoryInterface  $streamFactory = null,
        protected string                 $baseUrl = '',
        protected string                 $authUser = '',
        protected string                 $authPassword = '',
        protected string                 $userAgent = 'Arbor PHP SDK',
        protected ?string                $applicationId = null
    )
    {
        $this->httpClient = $httpClient ?: Psr18ClientDiscovery::find();
        $this->requestFactory = $requestFactory ?: Psr17FactoryDiscovery::findRequestFactory();
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
        list($request, $message, $requestPayload) = $this->prepareRequest($method, $url, $options);

        try {
            $response = $this->httpClient->sendRequest($request);

            // Allow the user to direct requests at a common API endpoint if they specify the applicationId as a request header
            $code = $response->getStatusCode();
            $response->getBody()->rewind();
            $responsePayload = json_decode($response->getBody()->getContents(), true);
        } catch (ClientExceptionInterface|RuntimeException $e) {
            // Default to using the code and message from the Guzzle exception.
            // This is useful in case the response does not contain valid json
            throw new ServerErrorException('An unexpected error has occurred: ' . $e->getMessage(), 0, $e);
        }

        if (!is_array($responsePayload) && !$this->isResponseValid($code)) {
            throw new ServerErrorException('Server responded with an invalid response', 0, null, $requestPayload);
        }

        // If the response has a code property
        if (isset($responsePayload['response']['code'])) {
            $code = $responsePayload['response']['code'];
        }

        // If available use the reason phrase
        if (isset($responsePayload['response']['reason'])) {
            $message = $responsePayload['response']['reason'];
        }

        // If available use a specific error message
        $serverMessage = $serverTrace = $serverException = null;

        if (isset($responsePayload['response']['errors']) &&
            is_array($responsePayload['response']['errors']) &&
            count($responsePayload['response']['errors'])
        ) {
            $serverException = $responsePayload['response']['errors'][0]['exception'];
            $serverMessage = $responsePayload['response']['errors'][0]['message'];
            $serverTrace = $responsePayload['response']['errors'][0]['trace'];
            $message = sprintf("Server threw: %s with message: %s URL=%s", $serverException, $serverMessage, $url);
        }

        return match ($code) {
            200, 201, 204, 422 => $responsePayload ?? [],
            404 => throw new ResourceNotFoundException($message ?? 'Not Found'),
            default => throw $this->getErrorException($message, $requestPayload, $responsePayload, $serverException, $serverMessage, $serverTrace),
        };
    }

    protected function isResponseValid(int $code): bool
    {
        return in_array($code, [200, 201, 204, 422]);
    }

    protected function prepareRequest(string $method, string $url, array $options): array
    {
        // NOTE: Uncomment this line to allow you to trigger a debug session in the Mis project
        // $url .= '?XDEBUG_SESSION_START=0';
        $request = $this->requestFactory->createRequest(mb_strtoupper($method), $this->baseUrl . $url);

        // Set a generic error message
        $message = 'API Error';

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

        $requestPayload = $options['body'] ?? null;

        if (is_array($requestPayload)) {
            $bodyStream = $this->streamFactory->createStream(json_encode($requestPayload));
            $request = $request->withBody($bodyStream);
        }

        return array($request, $message, $requestPayload);
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
