<?php

namespace Arbor\Api\Gateway;

use Arbor\Api\ServerErrorException;
use Arbor\Changelog\Change;
use Arbor\Model\Collection;
use Arbor\Model\ModelBase;
use Arbor\Query\Exception;
use Arbor\Query\Query;

interface GatewayInterface
{
    /**
     * @param ModelBase $model
     * @return ModelBase
     */
    public function create(ModelBase $model);

    /**
     * @param string $resource
     * @param string $id
     * @return ModelBase
     */
    public function retrieve($resource, $id);

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
     * @return mixed
     */
    public function describe($resource);

    /**
     * @param Query
     * @return Collection
     */
    public function query($query);

    /**
     * @param ModelBase $model
     * @return ModelBase;
     */
    public function refresh($model);

    /**
     * @param string $resourceType
     * @param int $fromRevision
     * @param int $toRevision
     * @return Change[]
     */
    public function getChanges($resourceType, $fromRevision, $toRevision);

    /**
     * @param string $resource
     * @param Collection $collection
     * @param bool $checkForPersistance
     * @return Collection
     */
    public function bulkCreate($resource, Collection $collection, $checkForPersistance = true);

    /**
     * @param string $applicationId
     */
    public function setApplicationId($applicationId);

    /**
     * @return string
     */
    public function getApplicationId();
}
