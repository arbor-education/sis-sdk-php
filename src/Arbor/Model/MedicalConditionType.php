<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MedicalConditionType extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const MEDICAL_CONDITION_TYPE = 'medicalConditionType';

    public const IS_ALLERGY = 'isAllergy';

    protected $_resourceType = ResourceType::MEDICAL_CONDITION_TYPE;

    /**
     * @param Query $query
     * @return MedicalConditionType[] | Collection
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

        $query->setResourceType(ResourceType::MEDICAL_CONDITION_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MedicalConditionType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEDICAL_CONDITION_TYPE, $id);
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
    public function getMedicalConditionType()
    {
        return $this->getProperty('medicalConditionType');
    }

    /**
     * @param string $medicalConditionType
     */
    public function setMedicalConditionType(string $medicalConditionType = null)
    {
        $this->setProperty('medicalConditionType', $medicalConditionType);
    }

    /**
     * @return bool
     */
    public function getIsAllergy()
    {
        return $this->getProperty('isAllergy');
    }

    /**
     * @param bool $isAllergy
     */
    public function setIsAllergy(bool $isAllergy = null)
    {
        $this->setProperty('isAllergy', $isAllergy);
    }
}
