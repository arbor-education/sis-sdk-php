<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class LessonPlanSectionItem extends ModelBase
{
    public const LESSON_PLAN_SECTION = 'lessonPlanSection';

    public const LINKED_ITEM = 'linkedItem';

    public const NARRATIVE = 'narrative';

    public const TEACHER_NOTES = 'teacherNotes';

    public const DISPLAY_ORDER = 'displayOrder';

    protected $_resourceType = ResourceType::LESSON_PLAN_SECTION_ITEM;

    /**
     * @param Query $query
     * @return LessonPlanSectionItem[] | Collection
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

        $query->setResourceType(ResourceType::LESSON_PLAN_SECTION_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return LessonPlanSectionItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::LESSON_PLAN_SECTION_ITEM, $id);
    }

    /**
     * @return \Arbor\Model\LessonPlanSection
     */
    public function getLessonPlanSection()
    {
        return $this->getProperty('lessonPlanSection');
    }

    /**
     * @param \Arbor\Model\LessonPlanSection $lessonPlanSection
     */
    public function setLessonPlanSection(\Arbor\Model\LessonPlanSection $lessonPlanSection = null)
    {
        $this->setProperty('lessonPlanSection', $lessonPlanSection);
    }

    /**
     * @return ModelBase
     */
    public function getLinkedItem()
    {
        return $this->getProperty('linkedItem');
    }

    /**
     * @param ModelBase $linkedItem
     */
    public function setLinkedItem(\ModelBase $linkedItem = null)
    {
        $this->setProperty('linkedItem', $linkedItem);
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
