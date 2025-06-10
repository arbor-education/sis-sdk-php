<?php

namespace Arbor\Api\Gateway;

use Arbor\ChangeLog\Change;
use Arbor\Model\Collection;
use Arbor\Model\ModelBase;
use Arbor\Query\Query;

interface GatewayInterface
{
    /**
     * @param ModelBase $model
     * @return ModelBase
     */
    public function create(ModelBase $model): ModelBase;

    /**
     * @param string $resource
     * @param string $id
     * @return ModelBase
     */
    public function retrieve(string $resource, string $id): ModelBase;

    /**
     * @param ModelBase $model
     */
    public function update(ModelBase $model);

    /**
     * @param ModelBase $model
     */
    public function delete(ModelBase $model);

    /**
     * @param $resource
     * @return void
     */
    public function describe($resource): void;

    /**
     * @param Query $query
     * @return Collection
     */
    public function query(Query $query): Collection;

    /**
     * @param ModelBase $model
     * @return ModelBase;
     */
    public function refresh(ModelBase $model): ModelBase;

    /**
     * @param string $resourceType
     * @param int $fromRevision
     * @param int $toRevision
     * @return Change[]
     */
    public function getChanges(string $resourceType, int $fromRevision, int $toRevision): array;

    /**
     * @param string $resource
     * @param Collection $collection
     * @param bool $checkForPersistence
     * @return Collection
     */
    public function bulkCreate(string $resource, Collection $collection, bool $checkForPersistence = true): Collection;

    /**
     * @param string $applicationId
     */
    public function setApplicationId(string $applicationId);

    /**
     * @return string
     */
    public function getApplicationId(): string;
}
