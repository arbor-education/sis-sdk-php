<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PointAward extends \ModelBase
{
    public const POINT_AWARD_SCALE = 'pointAwardScale';

    public const STUDENT = 'student';

    public const POINT_AWARD_CATEGORY = 'pointAwardCategory';

    public const POINTS = 'points';

    public const AWARDED_DATETIME = 'awardedDatetime';

    public const NARRATIVE = 'narrative';

    public const LOCATION = 'location';

    public const AWARDED_BY_STAFF = 'awardedByStaff';

    public const EVENT = 'event';

    protected $_resourceType = ResourceType::POINT_AWARD;

    /**
     * @param Query $query
     * @return PointAward[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::POINT_AWARD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PointAward
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::POINT_AWARD, $id);
    }

    /**
     * @return PointAwardScale
     */
    public function getPointAwardScale()
    {
        return $this->getProperty('pointAwardScale');
    }

    /**
     * @param PointAwardScale $pointAwardScale
     */
    public function setPointAwardScale(\PointAwardScale $pointAwardScale = null)
    {
        $this->setProperty('pointAwardScale', $pointAwardScale);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return PointAwardCategory
     */
    public function getPointAwardCategory()
    {
        return $this->getProperty('pointAwardCategory');
    }

    /**
     * @param PointAwardCategory $pointAwardCategory
     */
    public function setPointAwardCategory(\PointAwardCategory $pointAwardCategory = null)
    {
        $this->setProperty('pointAwardCategory', $pointAwardCategory);
    }

    /**
     * @return float
     */
    public function getPoints()
    {
        return $this->getProperty('points');
    }

    /**
     * @param float $points
     */
    public function setPoints(float $points = null)
    {
        $this->setProperty('points', $points);
    }

    /**
     * @return \DateTime
     */
    public function getAwardedDatetime()
    {
        return $this->getProperty('awardedDatetime');
    }

    /**
     * @param \DateTime $awardedDatetime
     */
    public function setAwardedDatetime(\DateTime $awardedDatetime = null)
    {
        $this->setProperty('awardedDatetime', $awardedDatetime);
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
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(\ModelBase $location = null)
    {
        $this->setProperty('location', $location);
    }

    /**
     * @return Staff
     */
    public function getAwardedByStaff()
    {
        return $this->getProperty('awardedByStaff');
    }

    /**
     * @param Staff $awardedByStaff
     */
    public function setAwardedByStaff(\Staff $awardedByStaff = null)
    {
        $this->setProperty('awardedByStaff', $awardedByStaff);
    }

    /**
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(\ModelBase $event = null)
    {
        $this->setProperty('event', $event);
    }
}
