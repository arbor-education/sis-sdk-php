<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicUnit;

class AcademicUnitTag extends ModelBase
{

    const ACADEMIC_UNIT = 'academicUnit';

    const RELATED_OBJECT = 'relatedObject';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_TAG;

    /**
     * @param \Arbor\Query\Query $query
     * @return AcademicUnitTag[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AcademicUnitTag");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AcademicUnitTag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_TAG, $id);
    }

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty("academicUnit");
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty("academicUnit", $academicUnit);
    }

    /**
     * @return ModelBase
     */
    public function getRelatedObject()
    {
        return $this->getProperty("relatedObject");
    }

    /**
     * @param ModelBase $relatedObject
     */
    public function setRelatedObject(ModelBase $relatedObject = null)
    {
        $this->setProperty("relatedObject", $relatedObject);
    }


}
