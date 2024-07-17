<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InterventionFilter extends ModelBase
{
    public const INTERVENTION = 'intervention';

    public const FIELD_CLASS = 'fieldClass';

    public const FIELD_PARAMS = 'fieldParams';

    public const TRANSFORMATION_CLASS = 'transformationClass';

    public const CONDITION_CLASS = 'conditionClass';

    public const CONDITION_PARAMS = 'conditionParams';

    public const FILTER_GROUP_INDEX = 'filterGroupIndex';

    public const IS_OUTCOME = 'isOutcome';

    protected $_resourceType = ResourceType::INTERVENTION_FILTER;

    /**
     * @param Query $query
     * @return InterventionFilter[] | Collection
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

        $query->setResourceType(ResourceType::INTERVENTION_FILTER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InterventionFilter
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERVENTION_FILTER, $id);
    }

    /**
     * @return \Arbor\Model\Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param \Arbor\Model\Intervention $intervention
     */
    public function setIntervention(\Arbor\Model\Intervention $intervention = null)
    {
        $this->setProperty('intervention', $intervention);
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
    public function getConditionClass()
    {
        return $this->getProperty('conditionClass');
    }

    /**
     * @param string $conditionClass
     */
    public function setConditionClass(string $conditionClass = null)
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
    public function setConditionParams(string $conditionParams = null)
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
    public function setFilterGroupIndex(int $filterGroupIndex = null)
    {
        $this->setProperty('filterGroupIndex', $filterGroupIndex);
    }

    /**
     * @return bool
     */
    public function getIsOutcome()
    {
        return $this->getProperty('isOutcome');
    }

    /**
     * @param bool $isOutcome
     */
    public function setIsOutcome(bool $isOutcome = null)
    {
        $this->setProperty('isOutcome', $isOutcome);
    }
}
