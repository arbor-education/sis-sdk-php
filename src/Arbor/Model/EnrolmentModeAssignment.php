<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\SchoolEnrolment;
use \Arbor\Model\EnrolmentMode;

class EnrolmentModeAssignment extends ModelBase
{

    const SCHOOL_ENROLMENT = 'schoolEnrolment';

    const ENROLMENT_MODE = 'enrolmentMode';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::ENROLMENT_MODE_ASSIGNMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return EnrolmentModeAssignment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("EnrolmentModeAssignment");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EnrolmentModeAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ENROLMENT_MODE_ASSIGNMENT, $id);
    }

    /**
     * @return SchoolEnrolment
     */
    public function getSchoolEnrolment()
    {
        return $this->getProperty("schoolEnrolment");
    }

    /**
     * @param SchoolEnrolment $schoolEnrolment
     */
    public function setSchoolEnrolment(SchoolEnrolment $schoolEnrolment = null)
    {
        $this->setProperty("schoolEnrolment", $schoolEnrolment);
    }

    /**
     * @return EnrolmentMode
     */
    public function getEnrolmentMode()
    {
        return $this->getProperty("enrolmentMode");
    }

    /**
     * @param EnrolmentMode $enrolmentMode
     */
    public function setEnrolmentMode(EnrolmentMode $enrolmentMode = null)
    {
        $this->setProperty("enrolmentMode", $enrolmentMode);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }


}
