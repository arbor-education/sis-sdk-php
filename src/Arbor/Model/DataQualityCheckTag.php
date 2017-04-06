<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\DataQualityCheckResult;

class DataQualityCheckTag extends ModelBase
{

    const DATA_QUALITY_CHECK_RESULT = 'dataQualityCheckResult';

    const TAGGED = 'tagged';

    protected $_resourceType = ResourceType::DATA_QUALITY_CHECK_TAG;

    /**
     * @param \Arbor\Query\Query $query
     * @return DataQualityCheckTag[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("DataQualityCheckTag");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DataQualityCheckTag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::DATA_QUALITY_CHECK_TAG, $id);
    }

    /**
     * @return DataQualityCheckResult
     */
    public function getDataQualityCheckResult()
    {
        return $this->getProperty("dataQualityCheckResult");
    }

    /**
     * @param DataQualityCheckResult $dataQualityCheckResult
     */
    public function setDataQualityCheckResult(DataQualityCheckResult $dataQualityCheckResult = null)
    {
        $this->setProperty("dataQualityCheckResult", $dataQualityCheckResult);
    }

    /**
     * @return ModelBase
     */
    public function getTagged()
    {
        return $this->getProperty("tagged");
    }

    /**
     * @param ModelBase $tagged
     */
    public function setTagged(ModelBase $tagged = null)
    {
        $this->setProperty("tagged", $tagged);
    }


}
