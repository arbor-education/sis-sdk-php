<?php

namespace Arbor\Api\Gateway;

use Arbor\Model\ModelBase;

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
     * @return \Arbor\Model\ModelBase
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
     * @return \Arbor\Resource\ResourceMetadata
     */
    public function describe($resource);

    /**
     * @param Arbor\Query\QueryBase
     * @return \Arbor\Model\Collection
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
     * @return \Arbor\Changelog\Change[]
     */
    public function getChanges($resourceType, $fromRevision, $toRevision);

    /**
     * @param string $applicationId
     */
    public function setApplicationId($applicationId);

    /**
     * @return return string
     */
    public function getApplicationId();
}
