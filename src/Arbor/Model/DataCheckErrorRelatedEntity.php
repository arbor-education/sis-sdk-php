<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DataCheckErrorRelatedEntity extends ModelBase
{

    const DATA_CHECK_ERROR = 'dataCheckError';

    const RELATED_ENTITY = 'relatedEntity';

    protected $_resourceType = ResourceType::DATA_CHECK_ERROR_RELATED_ENTITY;

    /**
     * @param Query $query
     * @return DataCheckErrorRelatedEntity[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::DATA_CHECK_ERROR_RELATED_ENTITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataCheckErrorRelatedEntity
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_CHECK_ERROR_RELATED_ENTITY, $id);
    }

    /**
     * @return DataCheckError
     */
    public function getDataCheckError()
    {
        return $this->getProperty('dataCheckError');
    }

    /**
     * @param DataCheckError $dataCheckError
     */
    public function setDataCheckError(DataCheckError $dataCheckError = null)
    {
        $this->setProperty('dataCheckError', $dataCheckError);
    }

    /**
     * @return ModelBase
     */
    public function getRelatedEntity()
    {
        return $this->getProperty('relatedEntity');
    }

    /**
     * @param ModelBase $relatedEntity
     */
    public function setRelatedEntity(ModelBase $relatedEntity = null)
    {
        $this->setProperty('relatedEntity', $relatedEntity);
    }


}
