<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class LessonPlanSectionItem extends ModelBase
{

    const LESSON_PLAN_SECTION = 'lessonPlanSection';

    const LINKED_ITEM = 'linkedItem';

    const NARRATIVE = 'narrative';

    const TEACHER_NOTES = 'teacherNotes';

    const DISPLAY_ORDER = 'displayOrder';

    protected $_resourceType = ResourceType::LESSON_PLAN_SECTION_ITEM;

    /**
     * @param Query $query
     * @return LessonPlanSectionItem[] | Collection
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
     * @return LessonPlanSection
     */
    public function getLessonPlanSection()
    {
        return $this->getProperty('lessonPlanSection');
    }

    /**
     * @param LessonPlanSection $lessonPlanSection
     */
    public function setLessonPlanSection(LessonPlanSection $lessonPlanSection = null)
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
    public function setLinkedItem(ModelBase $linkedItem = null)
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
    public function setNarrative($narrative = null)
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
    public function setTeacherNotes($teacherNotes = null)
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
    public function setDisplayOrder($displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
    }


}
