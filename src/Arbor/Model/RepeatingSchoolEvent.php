<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class RepeatingSchoolEvent extends ModelBase
{

    const ACADEMIC_YEAR = 'academicYear';

    const SCHOOL_EVENT_TYPE = 'schoolEventType';

    const SCHOOL_EVENT_NAME = 'schoolEventName';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::REPEATING_SCHOOL_EVENT;

    /**
     * @param Query $query
     * @return RepeatingSchoolEvent[] | Collection
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

        $query->setResourceType(ResourceType::REPEATING_SCHOOL_EVENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RepeatingSchoolEvent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::REPEATING_SCHOOL_EVENT, $id);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return SchoolEventType
     */
    public function getSchoolEventType()
    {
        return $this->getProperty('schoolEventType');
    }

    /**
     * @param SchoolEventType $schoolEventType
     */
    public function setSchoolEventType(SchoolEventType $schoolEventType = null)
    {
        $this->setProperty('schoolEventType', $schoolEventType);
    }

    /**
     * @return string
     */
    public function getSchoolEventName()
    {
        return $this->getProperty('schoolEventName');
    }

    /**
     * @param string $schoolEventName
     */
    public function setSchoolEventName($schoolEventName = null)
    {
        $this->setProperty('schoolEventName', $schoolEventName);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }


}
