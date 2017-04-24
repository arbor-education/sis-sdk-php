<?php

namespace Arbor\Api\Gateway;

use Arbor\Model\ModelBase;

interface GatewayInterface
{
    /**
     * @param \Arbor\Model\ModelBase
     * @return \Arbor\Model\ModelBase
     */
    public function create($model);

    /**
     * @param string $resource
     * @param string $id
     * @return \Arbor\Model\ModelBase
     */
    public function retrieve($resource, $id);

    /**
     * @param \Arbor\Model\ModelBase $model
     */
    public function update($model);

    /**
     * @param \Arbor\Model\ModelBase $model
     */
    public function delete($model);

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
