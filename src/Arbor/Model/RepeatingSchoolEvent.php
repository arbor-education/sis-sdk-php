<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;
use \Arbor\Model\SchoolEventType;

class RepeatingSchoolEvent extends ModelBase
{

    const ACADEMIC_YEAR = 'academicYear';

    const SCHOOL_EVENT_TYPE = 'schoolEventType';

    const SCHOOL_EVENT_NAME = 'schoolEventName';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::REPEATING_SCHOOL_EVENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return RepeatingSchoolEvent[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("RepeatingSchoolEvent");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return RepeatingSchoolEvent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::REPEATING_SCHOOL_EVENT, $id);
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

    /**
     * @return SchoolEventType
     */
    public function getSchoolEventType()
    {
        return $this->getProperty("schoolEventType");
    }

    /**
     * @param SchoolEventType $schoolEventType
     */
    public function setSchoolEventType(SchoolEventType $schoolEventType = null)
    {
        $this->setProperty("schoolEventType", $schoolEventType);
    }

    /**
     * @return string
     */
    public function getSchoolEventName()
    {
        return $this->getProperty("schoolEventName");
    }

    /**
     * @param string $schoolEventName
     */
    public function setSchoolEventName($schoolEventName = null)
    {
        $this->setProperty("schoolEventName", $schoolEventName);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }


}
