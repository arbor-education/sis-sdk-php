<?php

declare(strict_types=1);

namespace Arbor\Test\Unit\Arbor\Api\Gateway;

use Arbor\Api\Exception\ServerErrorException;
use Arbor\Api\Gateway\PsrRestGateway;
use Arbor\Api\Gateway\HttpClient\HttpClientInterface;
use Arbor\Filter\CamelCaseToDash;
use Arbor\Filter\PluralizeFilter;
use Arbor\Model\Hydrator;
use Arbor\Model\ModelBase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;

#[CoversClass(PsrRestGateway::class)]
class PsrRestGatewayTest extends TestCase
{
    private PsrRestGateway $gateway;
    private HttpClientInterface $httpClient;
    private Hydrator $hydrator;
    private CamelCaseToDash $camelCaseToDash;
    private PluralizeFilter $pluralizeFilter;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        $this->httpClient = $this->createMock(HttpClientInterface::class);
        $this->hydrator = $this->createMock(Hydrator::class);
        $this->camelCaseToDash = $this->createMock(CamelCaseToDash::class);
        $this->pluralizeFilter = $this->createMock(PluralizeFilter::class);

        $this->gateway = new PsrRestGateway(
            $this->httpClient,
            $this->hydrator,
            $this->camelCaseToDash,
            $this->pluralizeFilter
        );
    }

    public function testSetAndGetApplicationId()
    {
        $this->httpClient->expects($this->once())
            ->method('setApplicationId')
            ->with('testAppId');

        $this->gateway->setApplicationId('testAppId');
        $this->assertEquals('testAppId', $this->gateway->getApplicationId());
    }

    /**
     * @throws ServerErrorException
     * @throws Exception
     * @throws \Arbor\Model\Exception
     */
    public function testCreateThrowsExceptionOnMissingResourceRoot()
    {
        $model = $this->createMock(ModelBase::class);
        $model->method('getResourceType')->willReturn('TestResource');

        $this->hydrator->method('extractArray')->willReturn([]);
        $this->camelCaseToDash->method('filter')->willReturn('test-resource');
        $this->pluralizeFilter->method('filter')->willReturn('TestResources');

        $this->httpClient->method('sendRequest')->willReturn([]);

        $this->expectException(\Arbor\Query\Exception::class);
        $result = $this->gateway->create($model);

        $this->assertNotNull($result);
        $this->assertInstanceOf(ModelBase::class, $result);
    }

    /**
     * @throws ServerErrorException
     * @throws Exception
     * @throws \Arbor\Model\Exception
     * @throws \Arbor\Query\Exception
     */
    public function testCreateRequestSuccessful()
    {
        $model = $this->createMock(ModelBase::class);
        $model->method('getResourceType')->willReturn('TestResource');

        $this->hydrator->method('extractArray')->willReturn([]);
        $this->camelCaseToDash->method('filter')->willReturn('test-resource');
        $this->pluralizeFilter->method('filter')->willReturn('TestResources');

        $this->httpClient->method('sendRequest')->willReturn([
            'testResource' => []
        ]);

        $result = $this->gateway->create($model);
        $this->assertNotNull($result);
        $this->assertInstanceOf(ModelBase::class, $result);
    }

    /**
     * @throws ServerErrorException
     * @throws Exception
     */
    public function testDeleteCallsHttpClientWithCorrectParameters()
    {
        $model = $this->createMock(ModelBase::class);
        $model->method('getResourceUrl')->willReturn('/rest-v2/test/123');

        $expectedResponse = ['success' => true];

        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->with(
                HttpClientInterface::HTTP_METHOD_DELETE,
                '/rest-v2/test/123'
            )
            ->willReturn($expectedResponse);

        $result = $this->gateway->delete($model);

        $this->assertEquals($expectedResponse, $result);
    }

    /**
     * @throws Exception
     * @throws ReflectionException
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     * @throws \Arbor\Query\Exception
     */
    public function testRefreshSuccessfullyHydratesModel()
    {
        $model = $this->createMock(ModelBase::class);
        $model->method('getResourceUrl')->willReturn('/resource/1');
        $model->method('getResourceType')->willReturn('TestResource');
        $model->method('getResourceId')->willReturn('1');

        $resourceRoot = 'testResource';
        $response = [$resourceRoot => ['id' => 1, 'name' => 'Test']];

        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->with(HttpClientInterface::HTTP_METHOD_GET, '/resource/1')
            ->willReturn($response);

        $this->hydrator->expects($this->once())
            ->method('hydrateModel')
            ->with($model, $response[$resourceRoot]);

        $reflection = new ReflectionClass($this->gateway);
        $getResourceRoot = $reflection->getMethod('getResourceRoot');

        $this->assertEquals($resourceRoot, $getResourceRoot->invoke($this->gateway, 'TestResource'));

        $result = $this->gateway->refresh($model);
        $this->assertSame($model, $result);
    }

    /**
     * @throws ServerErrorException
     * @throws Exception
     * @throws \Arbor\Model\Exception
     */
    public function testRefreshThrowsExceptionWhenResourceNotFound()
    {
        $this->expectException(\Arbor\Query\Exception::class);

        $model = $this->createMock(ModelBase::class);
        $model->method('getResourceUrl')->willReturn('/resource/1');
        $model->method('getResourceType')->willReturn('TestResource');
        $model->method('getResourceId')->willReturn('1');

        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->willReturn([]); // No resourceRoot key

        $this->gateway->refresh($model);
    }
}