<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentDestinationType extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const LABEL = 'label';

    const IS_EDUCATION = 'isEducation';

    const IS_EMPLOYMENT = 'isEmployment';

    const LINKED_ENTITY_TYPE = 'linkedEntityType';

    protected $_resourceType = ResourceType::STUDENT_DESTINATION_TYPE;

    /**
     * @param Query $query
     * @return StudentDestinationType[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_DESTINATION_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentDestinationType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_DESTINATION_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->getProperty('label');
    }

    /**
     * @param string $label
     */
    public function setLabel($label = null)
    {
        $this->setProperty('label', $label);
    }

    /**
     * @return bool
     */
    public function getIsEducation()
    {
        return $this->getProperty('isEducation');
    }

    /**
     * @param bool $isEducation
     */
    public function setIsEducation($isEducation = null)
    {
        $this->setProperty('isEducation', $isEducation);
    }

    /**
     * @return bool
     */
    public function getIsEmployment()
    {
        return $this->getProperty('isEmployment');
    }

    /**
     * @param bool $isEmployment
     */
    public function setIsEmployment($isEmployment = null)
    {
        $this->setProperty('isEmployment', $isEmployment);
    }

    /**
     * @return int
     */
    public function getLinkedEntityType()
    {
        return $this->getProperty('linkedEntityType');
    }

    /**
     * @param int $linkedEntityType
     */
    public function setLinkedEntityType($linkedEntityType = null)
    {
        $this->setProperty('linkedEntityType', $linkedEntityType);
    }


}
