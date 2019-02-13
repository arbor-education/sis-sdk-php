<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MedicalRelationshipType extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const MEDICAL_RELATIONSHIP_TYPE_NAME = 'medicalRelationshipTypeName';

    protected $_resourceType = ResourceType::MEDICAL_RELATIONSHIP_TYPE;

    /**
     * @param Query $query
     * @return MedicalRelationshipType[] | Collection
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

        $query->setResourceType(ResourceType::MEDICAL_RELATIONSHIP_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MedicalRelationshipType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEDICAL_RELATIONSHIP_TYPE, $id);
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
    public function getMedicalRelationshipTypeName()
    {
        return $this->getProperty('medicalRelationshipTypeName');
    }

    /**
     * @param string $medicalRelationshipTypeName
     */
    public function setMedicalRelationshipTypeName($medicalRelationshipTypeName = null)
    {
        $this->setProperty('medicalRelationshipTypeName', $medicalRelationshipTypeName);
    }


}
