<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomReportOrdering extends ModelBase
{
    public const CUSTOM_REPORT = 'customReport';

    public const FIELD_CLASS = 'fieldClass';

    public const FIELD_PARAMS = 'fieldParams';

    public const TRANSFORMATION_CLASS = 'transformationClass';

    public const DIRECTION = 'direction';

    public const TARGET_GROUPING = 'targetGrouping';

    public const CUSTOM_REPORT_COLUMN = 'customReportColumn';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_ORDERING;

    /**
     * @param Query $query
     * @return CustomReportOrdering[] | Collection
     * @throws Exception
     */
    public static function query(\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::CUSTOM_REPORT_ORDERING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportOrdering
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_ORDERING, $id);
    }

    /**
     * @return \Arbor\Model\CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param \Arbor\Model\CustomReport $customReport
     */
    public function setCustomReport(\Arbor\Model\CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }

    /**
     * @return string
     */
    public function getFieldClass()
    {
        return $this->getProperty('fieldClass');
    }

    /**
     * @param string $fieldClass
     */
    public function setFieldClass(string $fieldClass = null)
    {
        $this->setProperty('fieldClass', $fieldClass);
    }

    /**
     * @return string
     */
    public function getFieldParams()
    {
        return $this->getProperty('fieldParams');
    }

    /**
     * @param string $fieldParams
     */
    public function setFieldParams(string $fieldParams = null)
    {
        $this->setProperty('fieldParams', $fieldParams);
    }

    /**
     * @return string
     */
    public function getTransformationClass()
    {
        return $this->getProperty('transformationClass');
    }

    /**
     * @param string $transformationClass
     */
    public function setTransformationClass(string $transformationClass = null)
    {
        $this->setProperty('transformationClass', $transformationClass);
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->getProperty('direction');
    }

    /**
     * @param string $direction
     */
    public function setDirection(string $direction = null)
    {
        $this->setProperty('direction', $direction);
    }

    /**
     * @return \Arbor\Model\CustomReportGrouping
     */
    public function getTargetGrouping()
    {
        return $this->getProperty('targetGrouping');
    }

    /**
     * @param \Arbor\Model\CustomReportGrouping $targetGrouping
     */
    public function setTargetGrouping(\Arbor\Model\CustomReportGrouping $targetGrouping = null)
    {
        $this->setProperty('targetGrouping', $targetGrouping);
    }

    /**
     * @return \Arbor\Model\CustomReportColumn
     */
    public function getCustomReportColumn()
    {
        return $this->getProperty('customReportColumn');
    }

    /**
     * @param \Arbor\Model\CustomReportColumn $customReportColumn
     */
    public function setCustomReportColumn(\Arbor\Model\CustomReportColumn $customReportColumn = null)
    {
        $this->setProperty('customReportColumn', $customReportColumn);
    }
}
