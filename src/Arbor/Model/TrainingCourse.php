<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class TrainingCourse extends ModelBase
{

    const TRAINING_COURSE_TITLE = 'trainingCourseTitle';

    const TRAINING_COURSE_DESCRIPTION = 'trainingCourseDescription';

    const ORGANIZER = 'organizer';

    const COURSE_FEES = 'courseFees';

    const OTHER_COSTS = 'otherCosts';

    protected $_resourceType = ResourceType::TRAINING_COURSE;

    /**
     * @param \Arbor\Query\Query $query
     * @return TrainingCourse[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("TrainingCourse");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TrainingCourse
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::TRAINING_COURSE, $id);
    }

    /**
     * @return string
     */
    public function getTrainingCourseTitle()
    {
        return $this->getProperty("trainingCourseTitle");
    }

    /**
     * @param string $trainingCourseTitle
     */
    public function setTrainingCourseTitle($trainingCourseTitle = null)
    {
        $this->setProperty("trainingCourseTitle", $trainingCourseTitle);
    }

    /**
     * @return string
     */
    public function getTrainingCourseDescription()
    {
        return $this->getProperty("trainingCourseDescription");
    }

    /**
     * @param string $trainingCourseDescription
     */
    public function setTrainingCourseDescription($trainingCourseDescription = null)
    {
        $this->setProperty("trainingCourseDescription", $trainingCourseDescription);
    }

    /**
     * @return ModelBase
     */
    public function getOrganizer()
    {
        return $this->getProperty("organizer");
    }

    /**
     * @param ModelBase $organizer
     */
    public function setOrganizer(ModelBase $organizer = null)
    {
        $this->setProperty("organizer", $organizer);
    }

    /**
     * @return float
     */
    public function getCourseFees()
    {
        return $this->getProperty("courseFees");
    }

    /**
     * @param float $courseFees
     */
    public function setCourseFees($courseFees = null)
    {
        $this->setProperty("courseFees", $courseFees);
    }

    /**
     * @return float
     */
    public function getOtherCosts()
    {
        return $this->getProperty("otherCosts");
    }

    /**
     * @param float $otherCosts
     */
    public function setOtherCosts($otherCosts = null)
    {
        $this->setProperty("otherCosts", $otherCosts);
    }


}
