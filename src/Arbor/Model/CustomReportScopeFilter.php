<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportScopeFilter extends ModelBase
{

    const CUSTOM_REPORT_SCOPE = 'customReportScope';

    const FIELD_CLASS = 'fieldClass';

    const FIELD_PARAMS = 'fieldParams';

    const TRANSFORMATION_CLASS = 'transformationClass';

    const CONDITION_CLASS = 'conditionClass';

    const CONDITION_PARAMS = 'conditionParams';

    const FILTER_GROUP_INDEX = 'filterGroupIndex';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SCOPE_FILTER;

    /**
     * @param Query $query
     * @return CustomReportScopeFilter[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_SCOPE_FILTER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportScopeFilter
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_SCOPE_FILTER, $id);
    }

    /**
     * @return CustomReportScope
     */
    public function getCustomReportScope()
    {
        return $this->getProperty('customReportScope');
    }

    /**
     * @param CustomReportScope $customReportScope
     */
    public function setCustomReportScope(CustomReportScope $customReportScope = null)
    {
        $this->setProperty('customReportScope', $customReportScope);
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
    public function getTransformationClass()
    {
        return $this->getProperty('transformationClass');
    }

    /**
     * @param string $transformationClass
     */
    public function setTransformationClass($transformationClass = null)
    {
        $this->setProperty('transformationClass', $transformationClass);
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
