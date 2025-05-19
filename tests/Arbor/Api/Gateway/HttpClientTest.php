<?php

namespace Arbor\Test\Arbor\Api\Gateway;

use Arbor\Api\Gateway\HttpClient;
use Arbor\Api\ResourceNotFoundException;
use Arbor\Api\ServerErrorException;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

/**
 * @covers \Arbor\Api\Gateway\HttpClient
 */
class HttpClientTest extends TestCase
{
    private ClientInterface $httpClientMock;
    private RequestFactoryInterface $requestFactoryMock;
    private ResponseInterface $responseMock;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        $this->httpClientMock = $this->createMock(ClientInterface::class);
        $this->requestFactoryMock = $this->createMock(RequestFactoryInterface::class);
        $this->responseMock = $this->createMock(ResponseInterface::class);
        $this->streamFactoryMock = $this->createMock(StreamFactoryInterface::class);

        $this->httpClient = new HttpClient($this->httpClientMock, $this->requestFactoryMock, $this->streamFactoryMock);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testReturnsGetRequestSuccess()
    {
        $requestMock = $this->createMock(RequestInterface::class);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        $this->requestFactoryMock
            ->method('createRequest')
            ->with('GET', '/resource')
            ->willReturn($requestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->with($requestMock)
            ->willReturn($this->responseMock);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $result = $this->httpClient->sendRequest('GET', '/resource');

        $this->assertEquals(['response' => ['code' => 200, 'data' => 'created']], $result);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
//    public function testReturnsPayloadForSuccessfulPostRequest()
//    {
//        $requestMock = $this->createMock(RequestInterface::class);
//
//        $this->requestFactoryMock
//            ->method('createRequest')
//            ->with('POST', '/resource')
//            ->willReturn($requestMock);
//
//        $this->httpClientMock
//            ->method('sendRequest')
//            ->with($requestMock)
//            ->willReturn($this->responseMock);
//
//        $this->responseMock
//            ->method('getStatusCode')
//            ->willReturn(201);
//
////        $this->streamFactoryMock
////            ->method('createStream')
////            ->willReturn($requestMock);
//
//        $this->responseMock
//            ->method('getBody')
//            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
//                'getContents' => json_encode(['response' => ['code' => 201, 'data' => 'created']])
//            ]));
//
//        $result = $this->httpClient->sendRequest('POST', '/resource', ['body' => ['key' => 'value']]);
//
//        $this->assertEquals(['response' => ['code' => 201, 'data' => 'created']], $result);
//    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
//    public function testThrowsExceptionForMissingResource()
//    {
//        $requestMock = $this->createMock(RequestInterface::class);
//
//        $this->requestFactoryMock
//            ->method('createRequest')
//            ->with('GET', '/missing-resource')
//            ->willReturn($requestMock);
//
//        $this->httpClientMock
//            ->method('sendRequest')
//            ->with($requestMock)
//            ->willReturn($this->responseMock);
//
//        $this->responseMock
//            ->method('getStatusCode')
//            ->willReturn(404);
//
//        $this->responseMock
//            ->method('getBody')
//            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
//                'getContents' => json_encode(['response' => ['reason' => 'Not Found']])
//            ]));
//
//        $this->expectException(ResourceNotFoundException::class);
//
//        $response = $this->httpClient->sendRequest('GET', '/missing-resource');
//        var_dump($response);
//    }

    /**
     * @throws Exception
     */
//    public function testThrowsExceptionForInvalidResponseCode()
//    {
//        $requestMock = $this->createMock(RequestInterface::class);
//
//        $this->requestFactoryMock
//            ->method('createRequest')
//            ->with('GET', '/invalid-response')
//            ->willReturn($requestMock);
//
//        $this->httpClientMock
//            ->method('sendRequest')
//            ->with($requestMock)
//            ->willReturn($this->responseMock);
//
//        $this->responseMock
//            ->method('getStatusCode')
//            ->willReturn(418);
//
//        $this->responseMock
//            ->method('getBody')
//            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
//                'getContents' => json_encode(['response' => ['reason' => 'I\'m a teapot']])
//            ]));
//
//        $this->expectException(ServerErrorException::class);
//
//        $this->httpClient->sendRequest('GET', '/invalid-response');
//    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
//    public function testHandlesEmptyBodyForNoContentResponse()
//    {
//        $requestMock = $this->createMock(RequestInterface::class);
//
//        $this->requestFactoryMock
//            ->method('createRequest')
//            ->with('DELETE', '/resource')
//            ->willReturn($requestMock);
//
//        $this->httpClientMock
//            ->method('sendRequest')
//            ->with($requestMock)
//            ->willReturn($this->responseMock);
//
//        $this->responseMock
//            ->method('getStatusCode')
//            ->willReturn(204);
//
//        $this->responseMock
//            ->method('getBody')
//            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
//                'getContents' => ''
//            ]));
//
//        $result = $this->httpClient->sendRequest('DELETE', '/resource');
//
//        $this->assertEquals([], $result);
//    }
}
