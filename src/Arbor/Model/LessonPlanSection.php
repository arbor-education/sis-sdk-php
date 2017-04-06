<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\LessonPlan;

class LessonPlanSection extends ModelBase
{

    const LESSON_PLAN = 'lessonPlan';

    const NARRATIVE = 'narrative';

    const TEACHER_NOTES = 'teacherNotes';

    const SECTION_TYPE = 'sectionType';

    const EXPECTED_DURATION = 'expectedDuration';

    const DISPLAY_ORDER = 'displayOrder';

    protected $_resourceType = ResourceType::LESSON_PLAN_SECTION;

    /**
     * @param \Arbor\Query\Query $query
     * @return LessonPlanSection[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("LessonPlanSection");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return LessonPlanSection
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::LESSON_PLAN_SECTION, $id);
    }

    /**
     * @return LessonPlan
     */
    public function getLessonPlan()
    {
        return $this->getProperty("lessonPlan");
    }

    /**
     * @param LessonPlan $lessonPlan
     */
    public function setLessonPlan(LessonPlan $lessonPlan = null)
    {
        $this->setProperty("lessonPlan", $lessonPlan);
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

    /**
     * @return string
     */
    public function getTeacherNotes()
    {
        return $this->getProperty("teacherNotes");
    }

    /**
     * @param string $teacherNotes
     */
    public function setTeacherNotes($teacherNotes = null)
    {
        $this->setProperty("teacherNotes", $teacherNotes);
    }

    /**
     * @return string
     */
    public function getSectionType()
    {
        return $this->getProperty("sectionType");
    }

    /**
     * @param string $sectionType
     */
    public function setSectionType($sectionType = null)
    {
        $this->setProperty("sectionType", $sectionType);
    }

    /**
     * @return string
     */
    public function getExpectedDuration()
    {
        return $this->getProperty("expectedDuration");
    }

    /**
     * @param string $expectedDuration
     */
    public function setExpectedDuration($expectedDuration = null)
    {
        $this->setProperty("expectedDuration", $expectedDuration);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty("displayOrder");
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder($displayOrder = null)
    {
        $this->setProperty("displayOrder", $displayOrder);
    }


}
