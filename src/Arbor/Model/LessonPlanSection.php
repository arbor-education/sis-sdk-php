<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class LessonPlanSection extends ModelBase
{
    public const LESSON_PLAN = 'lessonPlan';

    public const NARRATIVE = 'narrative';

    public const TEACHER_NOTES = 'teacherNotes';

    public const SECTION_TYPE = 'sectionType';

    public const EXPECTED_DURATION = 'expectedDuration';

    public const DISPLAY_ORDER = 'displayOrder';

    protected $_resourceType = ResourceType::LESSON_PLAN_SECTION;

    /**
     * @param Query $query
     * @return LessonPlanSection[] | Collection
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

        $query->setResourceType(ResourceType::LESSON_PLAN_SECTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return LessonPlanSection
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::LESSON_PLAN_SECTION, $id);
    }

    /**
     * @return \Arbor\Model\LessonPlan
     */
    public function getLessonPlan()
    {
        return $this->getProperty('lessonPlan');
    }

    /**
     * @param \Arbor\Model\LessonPlan $lessonPlan
     */
    public function setLessonPlan(\Arbor\Model\LessonPlan $lessonPlan = null)
    {
        $this->setProperty('lessonPlan', $lessonPlan);
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
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }

    /**
     * @return string
     */
    public function getTeacherNotes()
    {
        return $this->getProperty('teacherNotes');
    }

    /**
     * @param string $teacherNotes
     */
    public function setTeacherNotes(string $teacherNotes = null)
    {
        $this->setProperty('teacherNotes', $teacherNotes);
    }

    /**
     * @return string
     */
    public function getSectionType()
    {
        return $this->getProperty('sectionType');
    }

    /**
     * @param string $sectionType
     */
    public function setSectionType(string $sectionType = null)
    {
        $this->setProperty('sectionType', $sectionType);
    }

    /**
     * @return string
     */
    public function getExpectedDuration()
    {
        return $this->getProperty('expectedDuration');
    }

    /**
     * @param string $expectedDuration
     */
    public function setExpectedDuration(string $expectedDuration = null)
    {
        $this->setProperty('expectedDuration', $expectedDuration);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty('displayOrder');
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
    }
}
