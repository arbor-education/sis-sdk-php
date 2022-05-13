<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MedicalConditionType extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const MEDICAL_CONDITION_TYPE = 'medicalConditionType';

    const IS_ALLERGY = 'isAllergy';

    protected $_resourceType = ResourceType::MEDICAL_CONDITION_TYPE;

    /**
     * @param Query $query
     * @return MedicalConditionType[] | Collection
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
    public function getMedicalConditionType()
    {
        return $this->getProperty('medicalConditionType');
    }

    /**
     * @param string $medicalConditionType
     */
    public function setMedicalConditionType($medicalConditionType = null)
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
    public function setIsAllergy($isAllergy = null)
    {
        $this->setProperty('isAllergy', $isAllergy);
    }

}
