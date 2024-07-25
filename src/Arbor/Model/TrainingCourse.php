<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TrainingCourse extends ModelBase
{
    public const TRAINING_COURSE_TITLE = 'trainingCourseTitle';

    public const TRAINING_COURSE_DESCRIPTION = 'trainingCourseDescription';

    public const ORGANIZER = 'organizer';

    public const COURSE_FEES = 'courseFees';

    public const OTHER_COSTS = 'otherCosts';

    protected $_resourceType = ResourceType::TRAINING_COURSE;

    /**
     * @param Query $query
     * @return TrainingCourse[] | Collection
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

        $query->setResourceType(ResourceType::TRAINING_COURSE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TrainingCourse
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TRAINING_COURSE, $id);
    }

    /**
     * @return string
     */
    public function getTrainingCourseTitle()
    {
        return $this->getProperty('trainingCourseTitle');
    }

    /**
     * @param string $trainingCourseTitle
     */
    public function setTrainingCourseTitle(string $trainingCourseTitle = null)
    {
        $this->setProperty('trainingCourseTitle', $trainingCourseTitle);
    }

    /**
     * @return string
     */
    public function getTrainingCourseDescription()
    {
        return $this->getProperty('trainingCourseDescription');
    }

    /**
     * @param string $trainingCourseDescription
     */
    public function setTrainingCourseDescription(string $trainingCourseDescription = null)
    {
        $this->setProperty('trainingCourseDescription', $trainingCourseDescription);
    }

    /**
     * @return ModelBase
     */
    public function getOrganizer()
    {
        return $this->getProperty('organizer');
    }

    /**
     * @param ModelBase $organizer
     */
    public function setOrganizer(\ModelBase $organizer = null)
    {
        $this->setProperty('organizer', $organizer);
    }

    /**
     * @return float
     */
    public function getCourseFees()
    {
        return $this->getProperty('courseFees');
    }

    /**
     * @param float $courseFees
     */
    public function setCourseFees(float $courseFees = null)
    {
        $this->setProperty('courseFees', $courseFees);
    }

    /**
     * @return float
     */
    public function getOtherCosts()
    {
        return $this->getProperty('otherCosts');
    }

    /**
     * @param float $otherCosts
     */
    public function setOtherCosts(float $otherCosts = null)
    {
        $this->setProperty('otherCosts', $otherCosts);
    }
}
