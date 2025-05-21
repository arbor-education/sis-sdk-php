<?php

declare(strict_types=1);

namespace Arbor\Test\Arbor\Api\Gateway;

use Arbor\Api\Gateway\HttpClient\HttpClient;
use Arbor\Api\Gateway\HttpClient\TypedRequest;
use Arbor\Api\Gateway\HttpClient\TypedRequestFactory;
use Arbor\Api\ResourceNotFoundException;
use Arbor\Api\ServerErrorException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

#[CoversClass(HttpClient::class)]
class HttpClientTest extends TestCase
{
    private ClientInterface $httpClientMock;
    private ResponseInterface $responseMock;
    private TypedRequestFactory $typedRequestFactoryMock;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        $this->httpClientMock = $this->createMock(ClientInterface::class);
        $this->responseMock = $this->createMock(ResponseInterface::class);
        $streamFactoryMock = $this->createMock(StreamFactoryInterface::class);
        $this->typedRequestFactoryMock = $this->createMock(TypedRequestFactory::class);

        $this->httpClient = new HttpClient($this->typedRequestFactoryMock, $this->httpClientMock, $streamFactoryMock);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testReturnsGetRequestSuccess()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('GET', '/resource')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $result = $this->httpClient->sendRequest('GET', '/resource');

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testReturnsPayloadForSuccessfulPostRequest()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(201);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 201, 'data' => 'created']])
            ]));

        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('POST', '/resource')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $result = $this->httpClient->sendRequest('POST', '/resource', ['body' => ['key' => 'value']]);

        $this->assertEquals(['response' => ['code' => 201, 'data' => 'created']], $result);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testThrowsExceptionForMissingResource()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(404);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['reason' => 'Not Found']])
            ]));

        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('GET', '/missing-resource')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $this->expectException(ResourceNotFoundException::class);

        $response = $this->httpClient->sendRequest('GET', '/missing-resource');
    }

    /**
     * @throws ServerErrorException
     */
    public function testThrowsExceptionForInvalidResponseCode()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(418);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['reason' => 'I\'m a teapot']])
            ]));

        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('GET', '/invalid-response')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $this->expectException(ServerErrorException::class);

        $this->httpClient->sendRequest('GET', '/invalid-response');
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testHandlesEmptyBodyForNoContentResponse()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(204);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => ''
            ]));

        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('DELETE', '/resource')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $result = $this->httpClient->sendRequest('DELETE', '/resource');

        $this->assertEquals([], $result);
    }
}
