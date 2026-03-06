<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentDestinationType extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const LABEL = 'label';

    public const IS_EDUCATION = 'isEducation';

    public const IS_EMPLOYMENT = 'isEmployment';

    public const LINKED_ENTITY_TYPE = 'linkedEntityType';

    protected $_resourceType = ResourceType::STUDENT_DESTINATION_TYPE;

    /**
     * @param Query $query
     * @return StudentDestinationType[] | Collection
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
    public function setCode(string $code = null)
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
    public function setActive(bool $active = null)
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
    public function setDataOrder(int $dataOrder = null)
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
    public function setLabel(string $label = null)
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
    public function setIsEducation(bool $isEducation = null)
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
    public function setIsEmployment(bool $isEmployment = null)
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
    public function setLinkedEntityType(int $linkedEntityType = null)
    {
        $this->setProperty('linkedEntityType', $linkedEntityType);
    }
}
