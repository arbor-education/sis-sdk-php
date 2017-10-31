<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DataQualityCheckTag extends ModelBase
{

    const DATA_QUALITY_CHECK_RESULT = 'dataQualityCheckResult';

    const TAGGED = 'tagged';

    protected $_resourceType = ResourceType::DATA_QUALITY_CHECK_TAG;

    /**
     * @param Query $query
     * @return DataQualityCheckTag[] | Collection
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

        $query->setResourceType(ResourceType::DATA_QUALITY_CHECK_TAG);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataQualityCheckTag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_QUALITY_CHECK_TAG, $id);
    }

    /**
     * @return DataQualityCheckResult
     */
    public function getDataQualityCheckResult()
    {
        return $this->getProperty('dataQualityCheckResult');
    }

    /**
     * @param DataQualityCheckResult $dataQualityCheckResult
     */
    public function setDataQualityCheckResult(DataQualityCheckResult $dataQualityCheckResult = null)
    {
        $this->setProperty('dataQualityCheckResult', $dataQualityCheckResult);
    }

    /**
     * @return ModelBase
     */
    public function getTagged()
    {
        return $this->getProperty('tagged');
    }

    /**
     * @param ModelBase $tagged
     */
    public function setTagged(ModelBase $tagged = null)
    {
        $this->setProperty('tagged', $tagged);
    }


}
