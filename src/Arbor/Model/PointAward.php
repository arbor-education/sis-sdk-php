<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\PointAwardScale;
use \Arbor\Model\Student;
use \Arbor\Model\Session;
use \Arbor\Model\PointAwardCategory;
use \Arbor\Model\Staff;

class PointAward extends ModelBase
{
    const POINT_AWARD_SCALE = 'pointAwardScale';

    const STUDENT = 'student';

    const SESSION = 'session';

    const POINT_AWARD_CATEGORY = 'pointAwardCategory';

    const POINTS = 'points';

    const AWARDED_DATETIME = 'awardedDatetime';

    const NARRATIVE = 'narrative';

    const LOCATION = 'location';

    const AWARDED_BY_STAFF = 'awardedByStaff';

    protected $_resourceType = ResourceType::POINT_AWARD;

    /**
     * @param \Arbor\Query\Query $query
     * @return PointAward[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PointAward");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PointAward
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::POINT_AWARD, $id);
    }

    /**
     * @return PointAwardScale
     */
    public function getPointAwardScale()
    {
        return $this->getProperty("pointAwardScale");
    }

    /**
     * @param PointAwardScale $pointAwardScale
     */
    public function setPointAwardScale(PointAwardScale $pointAwardScale = null)
    {
        $this->setProperty("pointAwardScale", $pointAwardScale);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return Session
     */
    public function getSession()
    {
        return $this->getProperty("session");
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session = null)
    {
        $this->setProperty("session", $session);
    }

    /**
     * @return PointAwardCategory
     */
    public function getPointAwardCategory()
    {
        return $this->getProperty("pointAwardCategory");
    }

    /**
     * @param PointAwardCategory $pointAwardCategory
     */
    public function setPointAwardCategory(PointAwardCategory $pointAwardCategory = null)
    {
        $this->setProperty("pointAwardCategory", $pointAwardCategory);
    }

    /**
     * @return float
     */
    public function getPoints()
    {
        return $this->getProperty("points");
    }

    /**
     * @param float $points
     */
    public function setPoints($points = null)
    {
        $this->setProperty("points", $points);
    }

    /**
     * @return \DateTime
     */
    public function getAwardedDatetime()
    {
        return $this->getProperty("awardedDatetime");
    }

    /**
     * @param \DateTime $awardedDatetime
     */
    public function setAwardedDatetime(\DateTime $awardedDatetime = null)
    {
        $this->setProperty("awardedDatetime", $awardedDatetime);
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
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty("location");
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(ModelBase $location = null)
    {
        $this->setProperty("location", $location);
    }

    /**
     * @return Staff
     */
    public function getAwardedByStaff()
    {
        return $this->getProperty("awardedByStaff");
    }

    /**
     * @param Staff $awardedByStaff
     */
    public function setAwardedByStaff(Staff $awardedByStaff = null)
    {
        $this->setProperty("awardedByStaff", $awardedByStaff);
    }
}
