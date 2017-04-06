<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\DataCheckError;

class DataCheckErrorRelatedEntity extends ModelBase
{

    const DATA_CHECK_ERROR = 'dataCheckError';

    const RELATED_ENTITY = 'relatedEntity';

    protected $_resourceType = ResourceType::DATA_CHECK_ERROR_RELATED_ENTITY;

    /**
     * @param \Arbor\Query\Query $query
     * @return DataCheckErrorRelatedEntity[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("DataCheckErrorRelatedEntity");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DataCheckErrorRelatedEntity
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::DATA_CHECK_ERROR_RELATED_ENTITY, $id);
    }

    /**
     * @return DataCheckError
     */
    public function getDataCheckError()
    {
        return $this->getProperty("dataCheckError");
    }

    /**
     * @param DataCheckError $dataCheckError
     */
    public function setDataCheckError(DataCheckError $dataCheckError = null)
    {
        $this->setProperty("dataCheckError", $dataCheckError);
    }

    /**
     * @return ModelBase
     */
    public function getRelatedEntity()
    {
        return $this->getProperty("relatedEntity");
    }

    /**
     * @param ModelBase $relatedEntity
     */
    public function setRelatedEntity(ModelBase $relatedEntity = null)
    {
        $this->setProperty("relatedEntity", $relatedEntity);
    }


}
