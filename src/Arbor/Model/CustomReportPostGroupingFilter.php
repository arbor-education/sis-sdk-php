<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportPostGroupingFilter extends ModelBase
{
    const CUSTOM_REPORT = 'customReport';

    const FIELD_CLASS = 'fieldClass';

    const FIELD_PARAMS = 'fieldParams';

    const CONDITION_CLASS = 'conditionClass';

    const CONDITION_PARAMS = 'conditionParams';

    const TARGET_GROUPING = 'targetGrouping';

    const FILTER_GROUP_INDEX = 'filterGroupIndex';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_POST_GROUPING_FILTER;

    /**
     * @param Query $query
     * @return CustomReportPostGroupingFilter[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_POST_GROUPING_FILTER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportPostGroupingFilter
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_POST_GROUPING_FILTER, $id);
    }

    /**
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
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
    public function setFieldClass($fieldClass = null)
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
    public function setFieldParams($fieldParams = null)
    {
        $this->setProperty('fieldParams', $fieldParams);
    }

    /**
     * @return string
     */
    public function getConditionClass()
    {
        return $this->getProperty('conditionClass');
    }

    /**
     * @param string $conditionClass
     */
    public function setConditionClass($conditionClass = null)
    {
        $this->setProperty('conditionClass', $conditionClass);
    }

    /**
     * @return string
     */
    public function getConditionParams()
    {
        return $this->getProperty('conditionParams');
    }

    /**
     * @param string $conditionParams
     */
    public function setConditionParams($conditionParams = null)
    {
        $this->setProperty('conditionParams', $conditionParams);
    }

    /**
     * @return CustomReportGrouping
     */
    public function getTargetGrouping()
    {
        return $this->getProperty('targetGrouping');
    }

    /**
     * @param CustomReportGrouping $targetGrouping
     */
    public function setTargetGrouping(CustomReportGrouping $targetGrouping = null)
    {
        $this->setProperty('targetGrouping', $targetGrouping);
    }

    /**
     * @return int
     */
    public function getFilterGroupIndex()
    {
        return $this->getProperty('filterGroupIndex');
    }

    /**
     * @param int $filterGroupIndex
     */
    public function setFilterGroupIndex($filterGroupIndex = null)
    {
        $this->setProperty('filterGroupIndex', $filterGroupIndex);
    }
}
