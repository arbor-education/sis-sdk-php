<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomGroupMembershipCriterion extends ModelBase
{
    const CUSTOM_GROUP = 'customGroup';

    const FIELD_CLASS = 'fieldClass';

    const FIELD_PARAMS = 'fieldParams';

    const TRANSFORMATION_CLASS = 'transformationClass';

    const CONDITION_CLASS = 'conditionClass';

    const CONDITION_PARAMS = 'conditionParams';

    protected $_resourceType = ResourceType::CUSTOM_GROUP_MEMBERSHIP_CRITERION;

    /**
     * @param Query $query
     * @return CustomGroupMembershipCriterion[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_GROUP_MEMBERSHIP_CRITERION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomGroupMembershipCriterion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_GROUP_MEMBERSHIP_CRITERION, $id);
    }

    /**
     * @return CustomGroup
     */
    public function getCustomGroup()
    {
        return $this->getProperty('customGroup');
    }

    /**
     * @param CustomGroup $customGroup
     */
    public function setCustomGroup(CustomGroup $customGroup = null)
    {
        $this->setProperty('customGroup', $customGroup);
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

}
