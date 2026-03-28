<?php

declare(strict_types=1);

namespace Arbor\Test\Unit\Arbor\Api\Gateway\HttpClient;

use InvalidArgumentException;
use Nyholm\Psr7\Factory\Psr17Factory;
use Arbor\Api\Exception\ResourceNotFoundException;
use Arbor\Api\Exception\ServerErrorException;
use Arbor\Api\Gateway\HttpClient\HttpClient;
use Arbor\Api\Gateway\HttpClient\HttpClientInterface;
use Arbor\Api\Gateway\HttpClient\TypedRequest;
use Arbor\Api\Gateway\HttpClient\TypedRequestFactory;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

#[CoversClass(HttpClient::class)]
#[CoversClass(TypedRequest::class)]
#[CoversClass(TypedRequestFactory::class)]
class HttpClientTest extends TestCase
{
    private ClientInterface $httpClientMock;
    private ResponseInterface $responseMock;
    private TypedRequestFactory $typedRequestFactoryMock;
    private HttpClient $httpClient;

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
    public function testReturnsGetRequestSuccessWithApplicationId()
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

        $this->httpClient->setApplicationId('test');

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

        $this->httpClient->sendRequest('GET', '/missing-resource');
    }

    /**
     * @throws ServerErrorException
     * @throws Exception
     */
    #[DataProvider('exceptionDataProvider')]
    public function testThrowsException($statusCode, $bodyContent, $requestMethod, $requestPath, $expectedExceptionMessage)
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn($statusCode);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => $bodyContent
            ]));

        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with($requestMethod, $requestPath)
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $this->expectException(ServerErrorException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage($expectedExceptionMessage);

        $this->httpClient->sendRequest('GET', $requestPath);
    }

    public static function exceptionDataProvider(): array
    {
        return [
            [418, json_encode(['response' => ['reason' => 'I\'m a teapot']]), 'GET', '/invalid-response', 'I\'m a teapot'],
            [418, '{}', 'GET', '/invalid-response', 'API Error'],
            [500, '{}', 'GET', '/invalid-response', 'API Error'],
            [418, '', 'GET', '/invalid-response', 'Server responded with an invalid response'],
        ];
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

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testSendsRequestWithQueryParameters()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        // Expect the URL to include query parameters
        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('GET', '/resource?filters.name.equals=John&page-size=10&filters.age.greaterThan=18')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $queryOptions = [
            'filters.name.equals' => 'John',
            'page-size' => '10',
            'filters.age.greaterThan' => '18'
        ];

        $result = $this->httpClient->sendRequest('GET', '/resource', ['query' => $queryOptions]);

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testSendsRequestWithQueryParametersAndExistingUrlParams()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        // Expect the URL to properly append query parameters to existing ones
        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('GET', '/resource?existing=param&filters.name.equals=John&page-size=10')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $queryOptions = [
            'filters.name.equals' => 'John',
            'page-size' => '10'
        ];

        $result = $this->httpClient->sendRequest('GET', '/resource?existing=param', ['query' => $queryOptions]);

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testSendsRequestWithEmptyQueryParameters()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        // Expect the URL to remain unchanged with empty query parameters
        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('GET', '/resource')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $result = $this->httpClient->sendRequest('GET', '/resource', ['query' => []]);

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testSendsRequestWithNullQueryParameters()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        // Expect the URL to remain unchanged with null query parameters
        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('GET', '/resource')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $result = $this->httpClient->sendRequest('GET', '/resource', ['query' => null]);

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testSendsRequestWithSpecialCharactersInQueryParameters()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        // Expect the URL to properly encode special characters
        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('GET', '/resource?search=test+with+spaces&special=%26%40%23')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $queryOptions = [
            'search' => 'test with spaces',
            'special' => '&@#'
        ];

        $result = $this->httpClient->sendRequest('GET', '/resource', ['query' => $queryOptions]);

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testSendsRequestWithArrayValueInQueryParameters()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        // Expect the URL to properly handle array values
        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('GET', '/resource?ids%5B0%5D=1&ids%5B1%5D=2&ids%5B2%5D=3&single=value')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $queryOptions = [
            'ids' => ['1', '2', '3'],
            'single' => 'value'
        ];

        $result = $this->httpClient->sendRequest('GET', '/resource', ['query' => $queryOptions]);

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }

    /**
     * @throws Exception
     * @throws ServerErrorException
     */
    public function testSendsRequestWithQueryParametersAndBodyData()
    {
        $typedRequestMock = $this->createMock(TypedRequest::class);

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(201);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 201]])
            ]));

        // Expect the URL to include query parameters while also handling body data
        $this->typedRequestFactoryMock
            ->method('createRequest')
            ->with('POST', '/resource?filters.name.equals=John')
            ->willReturn($typedRequestMock);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        $queryOptions = ['filters.name.equals' => 'John'];
        $bodyData = ['key' => 'value'];

        $result = $this->httpClient->sendRequest('POST', '/resource', [
            'query' => $queryOptions,
            'body' => $bodyData
        ]);

        $this->assertEquals(['response' => ['code' => 201]], $result);
    }

    /**
     * @throws ServerErrorException
     */
    public function testSendsRequestWithMultipartData()
    {
        $psr17Factory = new Psr17Factory();
        $httpClient = new HttpClient(
            new TypedRequestFactory($psr17Factory),
            $this->httpClientMock,
            $psr17Factory
        );

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        $this->httpClientMock
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->callback(function ($request): bool {
                $request->getBody()->rewind();
                $payload = $request->getBody()->getContents();

                $this->assertSame('POST', $request->getMethod());
                $this->assertStringStartsWith(
                    'multipart/form-data; boundary=',
                    $request->getHeaderLine('Content-Type')
                );
                $this->assertStringContainsString('Content-Disposition: form-data; name="file"; filename="upload.txt"', $payload);
                $this->assertStringContainsString("Content-Type: text/plain\r\n", $payload);
                $this->assertStringContainsString('hello-world', $payload);

                return true;
            }))
            ->willReturn($this->responseMock);

        $result = $httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_POST, '/upload', [
            'multipart' => [
                [
                    'name' => 'file',
                    'filename' => 'upload.txt',
                    'contents' => 'hello-world',
                ],
            ],
        ]);

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }

    public function testMasksMultipartPayloadInServerErrorException(): void
    {
        $psr17Factory = new Psr17Factory();
        $httpClient = new HttpClient(
            new TypedRequestFactory($psr17Factory),
            $this->httpClientMock,
            $psr17Factory
        );

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(500);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['reason' => 'Server Error']])
            ]));

        $this->httpClientMock
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn($this->responseMock);

        try {
            $httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_POST, '/upload', [
                'multipart' => [
                    [
                        'name' => 'file',
                        'filename' => 'upload.txt',
                        'contents' => 'binary-or-large-content',
                    ],
                ],
            ]);
            $this->fail('Expected ServerErrorException to be thrown.');
        } catch (ServerErrorException $exception) {
            $this->assertSame('[multipart data]', $exception->getRequestPayload());
        }
    }

    /**
     * @throws ServerErrorException
     */
    public function testSendsRequestWithMultipartAndQueryParameters()
    {
        $psr17Factory = new Psr17Factory();
        $httpClient = new HttpClient(
            new TypedRequestFactory($psr17Factory),
            $this->httpClientMock,
            $psr17Factory
        );

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        $this->httpClientMock
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->callback(function ($request): bool {
                $this->assertSame('/upload?folder=reports', (string) $request->getUri());
                $this->assertStringStartsWith(
                    'multipart/form-data; boundary=',
                    $request->getHeaderLine('Content-Type')
                );

                return true;
            }))
            ->willReturn($this->responseMock);

        $result = $httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_POST, '/upload', [
            'query' => [
                'folder' => 'reports',
            ],
            'multipart' => [
                [
                    'name' => 'file',
                    'filename' => 'report.csv',
                    'contents' => 'row-1',
                ],
            ],
        ]);

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }

    /**
     * @throws ServerErrorException
     */
    public function testSendsRequestWithMultipleMultipartParts(): void
    {
        $psr17Factory = new Psr17Factory();
        $httpClient = new HttpClient(
            new TypedRequestFactory($psr17Factory),
            $this->httpClientMock,
            $psr17Factory
        );

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        $this->httpClientMock
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->callback(function ($request): bool {
                $request->getBody()->rewind();
                $payload = $request->getBody()->getContents();

                $this->assertStringContainsString('Content-Disposition: form-data; name="description"', $payload);
                $this->assertStringContainsString('Student profile image', $payload);
                $this->assertStringContainsString('Content-Disposition: form-data; name="file"; filename="avatar.png"', $payload);
                $this->assertStringContainsString("Content-Type: image/png\r\n", $payload);
                $this->assertStringContainsString('png-bytes', $payload);

                return true;
            }))
            ->willReturn($this->responseMock);

        $result = $httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_POST, '/upload', [
            'multipart' => [
                [
                    'name' => 'description',
                    'contents' => 'Student profile image',
                ],
                [
                    'name' => 'file',
                    'filename' => 'avatar.png',
                    'contents' => 'png-bytes',
                ],
            ],
        ]);

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }

    public function testThrowsExceptionWhenBodyAndMultipartAreSet(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Cannot use "body" and "multipart" options in the same request.');

        $this->httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_POST, '/upload', [
            'body' => ['key' => 'value'],
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => 'content',
                ],
            ],
        ]);
    }

    public function testThrowsExceptionForMultipartWithoutRequiredFields(): void
    {
        $psr17Factory = new Psr17Factory();
        $httpClient = new HttpClient(
            new TypedRequestFactory($psr17Factory),
            $this->httpClientMock,
            $psr17Factory
        );

        $this->httpClientMock
            ->expects($this->never())
            ->method('sendRequest');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Multipart part at index 0 must contain non-empty scalar "name".');

        $httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_POST, '/upload', [
            'multipart' => [
                [
                    'contents' => 'content',
                ],
            ],
        ]);
    }

    /**
     * @throws ServerErrorException
     */
    public function testKeepsExplicitMultipartPartContentTypeHeader(): void
    {
        $psr17Factory = new Psr17Factory();
        $httpClient = new HttpClient(
            new TypedRequestFactory($psr17Factory),
            $this->httpClientMock,
            $psr17Factory
        );

        $this->responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $this->responseMock
            ->method('getBody')
            ->willReturn($this->createConfiguredMock(StreamInterface::class, [
                'getContents' => json_encode(['response' => ['code' => 200]])
            ]));

        $this->httpClientMock
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->callback(function ($request): bool {
                $request->getBody()->rewind();
                $payload = $request->getBody()->getContents();

                $this->assertStringContainsString("content-type: image/png\r\n", strtolower($payload));
                $this->assertStringNotContainsString("Content-Type: application/octet-stream\r\n", $payload);

                return true;
            }))
            ->willReturn($this->responseMock);

        $result = $httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_POST, '/upload', [
            'multipart' => [
                [
                    'name' => 'file',
                    'filename' => 'avatar.png',
                    'contents' => 'png-bytes',
                    'headers' => [
                        'content-type' => 'image/png',
                    ],
                ],
            ],
        ]);

        $this->assertEquals(['response' => ['code' => 200]], $result);
    }
}
