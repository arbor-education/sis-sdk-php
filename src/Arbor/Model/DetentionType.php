<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;

class DetentionType extends ModelBase
{

    const DETENTION_TYPE_NAME = 'detentionTypeName';

    const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::DETENTION_TYPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return DetentionType[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("DetentionType");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DetentionType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::DETENTION_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getDetentionTypeName()
    {
        return $this->getProperty("detentionTypeName");
    }

    /**
     * @param string $detentionTypeName
     */
    public function setDetentionTypeName($detentionTypeName = null)
    {
        $this->setProperty("detentionTypeName", $detentionTypeName);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty("academicYear");
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty("academicYear", $academicYear);
    }


}
