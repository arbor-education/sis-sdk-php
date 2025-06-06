<?php

declare(strict_types=1);

namespace Arbor\Test\Unit\Arbor\Api\Gateway;

use Arbor\Api\Exception\ServerErrorException;
use Arbor\Api\Gateway\PsrRestGateway;
use Arbor\Api\Gateway\HttpClient\HttpClientInterface;
use Arbor\ChangeLog\Change;
use Arbor\Filter\CamelCaseToDash;
use Arbor\Filter\PluralizeFilter;
use Arbor\Model\Collection;
use Arbor\Model\Hydrator;
use Arbor\Model\ModelBase;
use Arbor\Model\Staff;
use Arbor\Query\Query;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientExceptionInterface;
use ReflectionClass;
use ReflectionException;

#[CoversClass(PsrRestGateway::class)]
#[CoversClass(Change::class)]
#[CoversClass(Query::class)]
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

    /**
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     * @throws \Arbor\Query\Exception
     */
    public function testRetrieveReturnsHydratedModel()
    {
        $resource = 'Staff';
        $id = '123';
        $resourceRoot = 'staff';
        $url = '/rest-v2/staff/123';
        $arrayRepresentation = [
            $resourceRoot => ['id' => $id, 'name' => 'Test Name']
        ];

        $this->camelCaseToDash->method('filter')->willReturn('staff');
        $this->pluralizeFilter->method('filter')->willReturn('Staff');
        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->with(HttpClientInterface::HTTP_METHOD_GET, $url)
            ->willReturn($arrayRepresentation);

        $this->hydrator->expects($this->once())->method('hydrateModel');

        $result = $this->gateway->retrieve($resource, $id);

        $this->assertInstanceOf(ModelBase::class, $result);
        $this->assertInstanceOf(Staff::class, $result);
    }

    #[DataProvider('modelInstancesDataProvider')]
    public function testInstantiateModelReturnsCorrectModelInstance($modelType)
    {
        $model = $this->gateway->instantiateModel($modelType);
        $this->assertInstanceOf(ModelBase::class, $model);
        $this->assertEquals($modelType, $model->getResourceType());
    }

    public static function modelInstancesDataProvider(): array
    {
        return [
            ['Student'], // Test with a resource type that exists
            ['Module_Resource'], // Test with a module resource type (simulate file does not exist)
            ['NonExistentResource'] // Test with a resource type that does not exist (should fall back to ModelBase)
        ];
    }

    /**
     * @throws \Arbor\Query\Exception
     * @throws Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testUpdateReturnsUpdatedModel()
    {
        $model = $this->createMock(ModelBase::class);
        $model->method('getResourceUrl')->willReturn('/rest-v2/resource/1');
        $model->method('getResourceType')->willReturn('Resource');
        $model->method('getResourceId')->willReturn('1');

        $this->hydrator->method('extractArray')->willReturn(['foo' => 'bar']);
        $this->hydrator->expects($this->atLeastOnce())->method('hydrateModel');

        $this->httpClient->method('sendRequest')->willReturnOnConsecutiveCalls(
            ['resource' => ['foo' => 'baz']], // retrieve
            ['resource' => ['foo' => 'bar']]  // update
        );

        $this->pluralizeFilter->method('filter')->willReturn('Resources');

        $this->camelCaseToDash->method('filter')->willReturn('resources');

        $result = $this->gateway->update($model);

        $this->assertSame($model, $result);
    }

    /**
     * @throws \Arbor\Query\Exception
     * @throws Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testUpdateReturnsNewModel()
    {
        $model = $this->createMock(ModelBase::class);
        $model->method('getResourceUrl')->willReturn('/rest-v2/resource/1');
        $model->method('getResourceType')->willReturn('Resource');
        $model->method('getResourceId')->willReturn('1');

        $this->hydrator->method('extractArray')->willReturnOnConsecutiveCalls(
            [['foo' => 'bar']],
            [['foo' => 'bar2']]
        );
        $this->hydrator->expects($this->atLeastOnce())->method('hydrateModel');

        $this->httpClient->method('sendRequest')->willReturnOnConsecutiveCalls(
            ['resource' => ['foo' => 'baz']], // retrieve
            ['resource' => ['foo' => 'bar2']]  // update
        );

        $this->pluralizeFilter->method('filter')->willReturn('Resources');

        $this->camelCaseToDash->method('filter')->willReturn('resources');

        $result = $this->gateway->update($model);

        $this->assertSame($model, $result);
    }

    /**
     * @throws \Arbor\Query\Exception
     * @throws Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testUpdateReturnsNewModelWithRevisionId()
    {
        $model = $this->createMock(ModelBase::class);
        $model->method('getResourceUrl')->willReturn('/rest-v2/resource/1');
        $model->method('getResourceType')->willReturn('Resource');
        $model->method('getResourceId')->willReturn('1');

        $this->hydrator->method('extractArray')->willReturnOnConsecutiveCalls(
            [['foo' => 'bar']],
            [['foo' => 'bar2']]
        );
        $this->hydrator->expects($this->atLeastOnce())->method('hydrateModel');

        $this->httpClient->method('sendRequest')->willReturnOnConsecutiveCalls(
            ['resource' => ['foo' => 'baz']], // retrieve
            ['resource' => ['foo' => 'bar2'], 'revisionId' => 1]  // update
        );

        $this->pluralizeFilter->method('filter')->willReturn('Resources');

        $this->camelCaseToDash->method('filter')->willReturn('resources');

        $result = $this->gateway->update($model);

        $this->assertSame($model, $result);
    }

    /**
     * @throws \Arbor\Query\Exception
     * @throws Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testThrowExceptionUpdateModelWithoutResource()
    {
        $model = $this->createMock(ModelBase::class);
        $model->method('getResourceUrl')->willReturn('/rest-v2/resource/1');
        $model->method('getResourceType')->willReturn('Resource');
        $model->method('getResourceId')->willReturn('1');

        $this->hydrator->method('extractArray')->willReturnOnConsecutiveCalls(
            [['foo' => 'bar']],
            []
        );
        $this->hydrator->expects($this->atLeastOnce())->method('hydrateModel');

        $this->httpClient->method('sendRequest')->willReturnOnConsecutiveCalls(
            ['resource' => ['foo' => 'baz']], // retrieve
            []  // update
        );

        $this->pluralizeFilter->method('filter')->willReturn('Resources');

        $this->camelCaseToDash->method('filter')->willReturn('resources');

        $this->expectException(\Arbor\Query\Exception::class);
        $this->gateway->update($model);
    }

    /**
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function testGetChangesReturnsArrayOfChangeObjects(): void
    {
        $resourceType = 'Student';
        $fromRevision = 10;
        $toRevision = 20;

        $this->pluralizeFilter->method('filter')->willReturn('Students');
        $this->camelCaseToDash->method('filter')->willReturn('Students');

        $this->httpClient->method('sendRequest')
            ->willReturn([
                'changes' => [
                    [
                        'changedObject' => ['id' => 1],
                        'changeType' => 'update',
                        'fromRevision' => 10,
                        'toRevision' => 11
                    ]
                ]
            ]);

        $result = $this->gateway->getChanges($resourceType, $fromRevision, $toRevision);

        $this->assertIsArray($result);
        $this->assertInstanceOf(Change::class, $result[0]);
    }

    /**
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function testGetChangesReturnsWithoutChangesArray(): void
    {
        $resourceType = 'Student';
        $fromRevision = 10;
        $toRevision = 20;

        $this->pluralizeFilter->method('filter')->willReturn('Students');
        $this->camelCaseToDash->method('filter')->willReturn('Students');

        $this->httpClient->method('sendRequest')->willReturn([]);

        $result = $this->gateway->getChanges($resourceType, $fromRevision, $toRevision);

        $this->assertIsArray($result);
    }

    /**
     * @throws \Arbor\Query\Exception
     * @throws Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testQueryReturnsHydratedModelWhenResourceExists(): void
    {
        // Create a Query mock
        $query = $this->createMock(Query::class);
        $resourceType = 'Student';
        $pluralizedResourceType = 'Students';
        $queryOptions = ['param1' => 'value1'];
        $resourceRoot = 'students';
        $url = '/rest-v2/Students';

        // Set up expectations for the Query mock
        $query->expects($this->atLeastOnce())
            ->method('getResourceType')
            ->willReturn($resourceType);

        $query->expects($this->once())
            ->method('getQueryOptions')
            ->willReturn($queryOptions);

        // Set up expectations for PluralizeFilter
        $this->pluralizeFilter->expects($this->once())
            ->method('filter')
            ->with($resourceType)
            ->willReturn($pluralizedResourceType);

        // Set up expectations for HttpClient
        $options = ['query' => $queryOptions];
        $responseData = [$resourceRoot => [['id' => '123']]];
        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->with(HttpClientInterface::HTTP_METHOD_GET, $url, $options)
            ->willReturn($responseData);

        // Call the method under test
        $result = $this->gateway->query($query);

        // Assert the result
        $this->assertInstanceOf(Collection::class, $result);
        $student = $result->offsetGet('0');
        $this->assertInstanceOf(ModelBase::class, $student);
        $this->assertSame('Student', $student->getResourceType());
    }

    /**
     * @throws \Arbor\Query\Exception
     * @throws Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testQueryReturnsEmptyCollectionWhenResourceDoesNotExist(): void
    {
        // Create a Query mock
        $query = $this->createMock(Query::class);
        $resourceType = 'Student';
        $pluralizedResourceType = 'Students';
        $queryOptions = ['param1' => 'value1'];
        $url = '/rest-v2/Students';

        // Set up expectations for the Query mock
        $query->expects($this->atLeastOnce())
            ->method('getResourceType')
            ->willReturn($resourceType);

        $query->expects($this->once())
            ->method('getQueryOptions')
            ->willReturn($queryOptions);

        // Set up expectations for PluralizeFilter
        $this->pluralizeFilter->expects($this->once())
            ->method('filter')
            ->with($resourceType)
            ->willReturn($pluralizedResourceType);

        // Set up expectations for HttpClient
        $options = ['query' => $queryOptions];
        $responseData = []; // Empty response without the resource root
        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->with(HttpClientInterface::HTTP_METHOD_GET, $url, $options)
            ->willReturn($responseData);

        // Call the method under test
        $result = $this->gateway->query($query);

        // Assert the result
        $this->assertInstanceOf(Collection::class, $result);
        $this->assertCount(0, $result);
    }

    /**
     * @throws \Arbor\Query\Exception
     * @throws Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testFindAllReturnsArrayOfModels()
    {
        $resourceType = 'Student';
        $propertyFilters = ['name' => 'John'];
        $userTags = ['tag' => 'value'];
        $url = '/rest-v2/Students';
        $options = ['query' => ['filters.name.equals' => 'John']];
        $responseData = ['students' => [['id' => '123']]];

        $mockCollection = $this->createMock(Collection::class);
        $mockCollection->method('getArrayCopy')->willReturn(['model1', 'model2']);

        $this->camelCaseToDash->method('filter')->willReturn('students');
        $this->pluralizeFilter->method('filter')->willReturn('Students');
        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->with(HttpClientInterface::HTTP_METHOD_GET, $url, $options)
            ->willReturn($responseData);

        $result = $this->gateway->findAll($resourceType, $propertyFilters, $userTags);

        $this->assertIsArray($result);
        $student = $result['0'];
        $this->assertInstanceOf(ModelBase::class, $student);
        $this->assertSame('Student', $student->getResourceType());
    }

    /**
     * @throws \Arbor\Query\Exception
     * @throws Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testFindAllReturnsArrayOfModelsWithOperators()
    {
        $resourceType = 'Student';
        $propertyFilters = ['lastName' => 'Smith', 'name' => ['OR', 'John']];
        $userTags = ['tag' => 'value'];
        $url = '/rest-v2/Students';
        $options = ['query' => [
            'filters.name.OR' => 'John',
            'filters.lastName.equals' => 'Smith'
        ]];
        $responseData = ['students' => [['id' => '123']]];

        $mockCollection = $this->createMock(Collection::class);
        $mockCollection->method('getArrayCopy')->willReturn(['model1', 'model2']);

        $this->camelCaseToDash->method('filter')->willReturn('students');
        $this->pluralizeFilter->method('filter')->willReturn('Students');
        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->with(HttpClientInterface::HTTP_METHOD_GET, $url, $options)
            ->willReturn($responseData);

        $result = $this->gateway->findAll($resourceType, $propertyFilters, $userTags);

        $this->assertIsArray($result);
        $student = $result['0'];
        $this->assertInstanceOf(ModelBase::class, $student);
        $this->assertSame('Student', $student->getResourceType());
    }

    /**
     * @throws \Arbor\Query\Exception
     * @throws Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testFindAllWithEmptyFiltersReturnsArray()
    {
        $resourceType = 'Student';
        $propertyFilters = [];
        $userTags = [];

        $mockCollection = $this->createMock(Collection::class);
        $mockCollection->method('getArrayCopy')->willReturn([]);

        $this->camelCaseToDash->method('filter')->willReturn('students');
        $this->pluralizeFilter->method('filter')->willReturn('Students');

        $result = $this->gateway->findAll($resourceType, $propertyFilters, $userTags);

        $this->assertIsArray($result);
        $this->assertEmpty($result);
    }

    /**
     * @throws Exception
     * @throws \Arbor\Query\Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testFindOneReturnsModelWhenFound(): void
    {
        $resourceType = 'Student';
        $propertyFilters = ['name' => 'John'];
        $userTags = ['tag' => 'value'];
        $responseData = ['students' => [['id' => '123']]];
        $options = ['query' => ['filters.name.equals' => 'John']];

        $mockModel = $this->createMock(ModelBase::class);
        $mockModel->method('getResourceType')->willReturn($resourceType);

        $this->camelCaseToDash->method('filter')->willReturn('students');
        $this->pluralizeFilter->method('filter')->willReturn('Students');
        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->with(HttpClientInterface::HTTP_METHOD_GET, '/rest-v2/Students', $options)
            ->willReturn($responseData);

        $result = $this->gateway->findOne($resourceType, $propertyFilters, $userTags);

        $this->assertInstanceOf(ModelBase::class, $result);
        $this->assertSame($resourceType, $result->getResourceType());
    }

    /**
     * @throws ServerErrorException
     * @throws \Arbor\Query\Exception
     * @throws \Arbor\Model\Exception
     */
    public function testFindOneReturnsNullWhenNoFilters(): void
    {
        $result = $this->gateway->findOne('Student', [], []);
        $this->assertNull($result);
    }

    /**
     * @throws ServerErrorException
     * @throws \Arbor\Query\Exception
     * @throws \Arbor\Model\Exception
     */
    public function testFindOneReturnsNullWhenNoModelsFound(): void
    {
        $this->camelCaseToDash->method('filter')->willReturn('students');
        $this->pluralizeFilter->method('filter')->willReturn('Students');

        $result = $this->gateway->findOne('Student', ['name' => 'John'], []);

        $this->assertNull($result);
    }

    /**
     * Test successful bulk create with a single model
     *
     * @throws ClientExceptionInterface
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     * @throws \Arbor\Query\Exception
     */
    public function testBulkCreateSuccess()
    {
        $resource = 'Student';
        $resourceUrl = 'students';
        $resourceRoot = 'student';

        $model1 = $this->createMock(ModelBase::class);
        $model1->method('getResourceType')->willReturn($resource);
        $model1->method('getResourceUrl')->willReturn(null);
        $model1->method('getUserTags')->willReturn([]);
        $this->hydrator->method('extractArray')->willReturn(['name' => 'John']);

        $collection = new Collection();
        $collection->add($model1);

        $this->camelCaseToDash->method('filter')->willReturn($resourceUrl);
        $this->pluralizeFilter->method('filter')->willReturn($resourceUrl);

        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->willReturn([
                'results' => [
                    [
                        'status' => ['success' => true],
                        $resourceRoot => ['name' => 'John']
                    ]
                ]
            ]);

        $this->hydrator->expects($this->once())
            ->method('hydrateModel')
            ->with($model1, ['name' => 'John']);

        $result = $this->gateway->bulkCreate($resource, $collection);

        $this->assertInstanceOf(Collection::class, $result);
        $this->assertCount(1, $result);
    }

    /**
     * Test bulk create with user tags and checkForPersistence true, where no existing model is found
     *
     * @throws Exception
     * @throws ClientExceptionInterface
     * @throws \Arbor\Query\Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testBulkCreateWithUserTagsNoExistingModel()
    {
        $resource = 'Student';
        $resourceUrl = 'students';
        $resourceRoot = 'student';

        $model1 = $this->createMock(ModelBase::class);
        $model1->method('getResourceType')->willReturn($resource);
        $model1->method('getResourceUrl')->willReturn(null);
        $model1->method('getUserTags')->willReturn(['id' => 1]);
        $this->hydrator->method('extractArray')->willReturn(['name' => 'John']);

        $collection = new Collection();
        $collection->add($model1);

        $this->camelCaseToDash->method('filter')->willReturn($resourceUrl);
        $this->pluralizeFilter->method('filter')->willReturn($resourceUrl);

        $this->httpClient->expects($this->atLeast(2))
            ->method('sendRequest')
            ->willReturn([
                'results' => [
                    [
                        'status' => ['success' => true],
                        $resourceRoot => ['name' => 'John']
                    ]
                ]
            ]);

        $this->hydrator->expects($this->once())
            ->method('hydrateModel')
            ->with($model1, ['name' => 'John']);

        $result = $this->gateway->bulkCreate($resource, $collection);

        $this->assertInstanceOf(Collection::class, $result);
        $this->assertCount(1, $result);
    }

    /**
     * Test bulk create with a model of the wrong resource type
     *
     * @throws Exception
     * @throws ClientExceptionInterface
     * @throws \Arbor\Query\Exception
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testBulkCreateWithWrongResourceTypeThrowsException()
    {
        $resource = 'Student';
        $resourceUrl = 'students';

        $model1 = $this->createMock(ModelBase::class);
        $model1->method('getResourceType')->willReturn($resource);
        $model1->method('getResourceUrl')->willReturn(null);
        $model1->method('getUserTags')->willReturn([]);
        $this->hydrator->method('extractArray')->willReturn(['name' => 'John']);

        $collection = new Collection();
        $collection->add($model1);

        $this->camelCaseToDash->method('filter')->willReturn($resourceUrl);
        $this->pluralizeFilter->method('filter')->willReturn($resourceUrl);

        $this->expectException(\Arbor\Query\Exception::class);
        $this->gateway->bulkCreate('Staff', $collection);
    }

    /**
     * Test bulk create with a model that already has a resource URL
     *
     * @throws Exception
     * @throws ClientExceptionInterface
     * @throws \Arbor\Model\Exception
     * @throws ServerErrorException
     */
    public function testBulkCreateWithExistingResourceUrlThrowsException()
    {
        // Arrange: model->getResourceUrl returns non-null
        // Act & Assert: bulkCreate throws Exception
        $resource = 'Student';
        $resourceUrl = 'students';

        $model1 = $this->createMock(ModelBase::class);
        $model1->method('getResourceType')->willReturn($resource);
        $model1->method('getResourceUrl')->willReturn('/students/1');
        $model1->method('getUserTags')->willReturn([]);
        $this->hydrator->method('extractArray')->willReturn(['name' => 'John']);

        $collection = new Collection();
        $collection->add($model1);

        $this->camelCaseToDash->method('filter')->willReturn($resourceUrl);
        $this->pluralizeFilter->method('filter')->willReturn($resourceUrl);

        $this->expectException(\Arbor\Query\Exception::class);
        $this->gateway->bulkCreate($resource, $collection);
    }

    /**
     * Test bulk create when API returns a failed status in results
     *
     * @return void
     * @throws ClientExceptionInterface
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     * @throws \Arbor\Query\Exception
     */
    public function testBulkCreateWithPartialFailure()
    {
        $resource = 'Student';
        $resourceUrl = 'students';
        $resourceRoot = 'student';

        $model1 = $this->createMock(ModelBase::class);
        $model1->method('getResourceType')->willReturn($resource);
        $model1->method('getResourceUrl')->willReturn(null);
        $model1->method('getUserTags')->willReturn([]);
        $model2 = $this->createMock(ModelBase::class);
        $model2->method('getResourceType')->willReturnOnConsecutiveCalls($resource, null);
        $model2->method('getResourceUrl')->willReturn(null);
        $model2->method('getUserTags')->willReturn([]);

        $collection = new Collection();
        $collection->add($model1);
        $collection->add($model2);

        $this->camelCaseToDash->method('filter')->willReturn($resourceUrl);
        $this->pluralizeFilter->method('filter')->willReturn($resourceUrl);

        $this->hydrator->method('extractArray')->willReturn(['name' => 'John']);

        $response = [
            'results' => [
                [
                    'status' => ['success' => true],
                    $resourceRoot => ['name' => 'John']
                ],
                [
                    'status' => ['success' => false, 'error' => 'Some error']
                ]
            ]
        ];

        $this->httpClient->expects($this->once())
            ->method('sendRequest')
            ->willReturn($response);

        $this->hydrator->expects($this->once())
            ->method('hydrateModel')
            ->with($model1, ['name' => 'John'])
            ->willReturn($model1);

        $result = $this->gateway->bulkCreate($resource, $collection);

        // Only the first model should be hydrated, the second should not
        $this->assertInstanceOf(Collection::class, $result);
        $this->assertCount(2, $result);
        $this->assertSame('Student', $result->offsetGet(0)->getResourceType()); // First model should be hydrated
        $this->assertNull($result->offsetGet(1)->getResourceType()); // Second model should not be hydrated
    }

    /**
     * Test bulk create when ServerErrorException is thrown by httpClient
     *
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     * @throws \Arbor\Query\Exception
     */
    public function testBulkCreateServerErrorException()
    {
        $resource = 'TestResource';
        $modelMock = $this->createMock(ModelBase::class);
        $modelMock->method('getResourceType')->willReturn($resource);
        $modelMock->method('getResourceUrl')->willReturn(null);
        $modelMock->method('getUserTags')->willReturn([]);
        $collection = new Collection();
        $collection->add($modelMock);

        $this->hydrator->method('extractArray')->willReturn([]);
        $this->camelCaseToDash->method('filter')->willReturn($resource);
        $this->pluralizeFilter->method('filter')->willReturn($resource);

        $serverErrorException = new ServerErrorException(
            'Server error',
            500,
            null,
            [],
            ['results' => [['status' => ['success' => false, 'error' => 'Failed']]]],
            'TestClass',
            'TestMessage',
            'TestTrace'
        );
        $this->httpClient->method('sendRequest')->will($this->throwException($serverErrorException));

        $this->expectException(ServerErrorException::class);
        $this->gateway->bulkCreate($resource, $collection);
    }
}
