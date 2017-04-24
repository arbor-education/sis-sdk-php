<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class MedicalConditionType extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const MEDICAL_CONDITION_TYPE = 'medicalConditionType';

    const IS_ALLERGY = 'isAllergy';

    protected $_resourceType = ResourceType::MEDICAL_CONDITION_TYPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return MedicalConditionType[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("MedicalConditionType");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MedicalConditionType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::MEDICAL_CONDITION_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getMedicalConditionType()
    {
        return $this->getProperty("medicalConditionType");
    }

    /**
     * @param string $medicalConditionType
     */
    public function setMedicalConditionType($medicalConditionType = null)
    {
        $this->setProperty("medicalConditionType", $medicalConditionType);
    }

    /**
     * @return bool
     */
    public function getIsAllergy()
    {
        return $this->getProperty("isAllergy");
    }

    /**
     * @param bool $isAllergy
     */
    public function setIsAllergy($isAllergy = null)
    {
        $this->setProperty("isAllergy", $isAllergy);
    }
}
