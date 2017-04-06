<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CustomReport;

class CustomReportOrdering extends ModelBase
{

    const CUSTOM_REPORT = 'customReport';

    const FIELD_CLASS = 'fieldClass';

    const FIELD_PARAMS = 'fieldParams';

    const DIRECTION = 'direction';

    const TARGET_TYPE = 'targetType';

    const TARGET_INDEX = 'targetIndex';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_ORDERING;

    /**
     * @param \Arbor\Query\Query $query
     * @return CustomReportOrdering[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CustomReportOrdering");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CustomReportOrdering
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_ORDERING, $id);
    }

    /**
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty("customReport");
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
    {
        $this->setProperty("customReport", $customReport);
    }

    /**
     * @return string
     */
    public function getFieldClass()
    {
        return $this->getProperty("fieldClass");
    }

    /**
     * @param string $fieldClass
     */
    public function setFieldClass($fieldClass = null)
    {
        $this->setProperty("fieldClass", $fieldClass);
    }

    /**
     * @return string
     */
    public function getFieldParams()
    {
        return $this->getProperty("fieldParams");
    }

    /**
     * @param string $fieldParams
     */
    public function setFieldParams($fieldParams = null)
    {
        $this->setProperty("fieldParams", $fieldParams);
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->getProperty("direction");
    }

    /**
     * @param string $direction
     */
    public function setDirection($direction = null)
    {
        $this->setProperty("direction", $direction);
    }

    /**
     * @return string
     */
    public function getTargetType()
    {
        return $this->getProperty("targetType");
    }

    /**
     * @param string $targetType
     */
    public function setTargetType($targetType = null)
    {
        $this->setProperty("targetType", $targetType);
    }

    /**
     * @return int
     */
    public function getTargetIndex()
    {
        return $this->getProperty("targetIndex");
    }

    /**
     * @param int $targetIndex
     */
    public function setTargetIndex($targetIndex = null)
    {
        $this->setProperty("targetIndex", $targetIndex);
    }


}
