<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class HouseMembership extends ModelBase
{
    public const HOUSE = 'house';

    public const STUDENT = 'student';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const HOUSE_AUTOMATIC_ENROLMENT = 'houseAutomaticEnrolment';

    public const ENROLMENT_DEPENDENCY = 'enrolmentDependency';

    protected $_resourceType = ResourceType::HOUSE_MEMBERSHIP;

    /**
     * @param Query $query
     * @return HouseMembership[] | Collection
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

        $query->setResourceType(ResourceType::HOUSE_MEMBERSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return HouseMembership
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::HOUSE_MEMBERSHIP, $id);
    }

    /**
     * @return \Arbor\Model\House
     */
    public function getHouse()
    {
        return $this->getProperty('house');
    }

    /**
     * @param \Arbor\Model\House $house
     */
    public function setHouse(\Arbor\Model\House $house = null)
    {
        $this->setProperty('house', $house);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return \Arbor\Model\HouseAutomaticEnrolment
     */
    public function getHouseAutomaticEnrolment()
    {
        return $this->getProperty('houseAutomaticEnrolment');
    }

    /**
     * @param \Arbor\Model\HouseAutomaticEnrolment $houseAutomaticEnrolment
     */
    public function setHouseAutomaticEnrolment(\Arbor\Model\HouseAutomaticEnrolment $houseAutomaticEnrolment = null)
    {
        $this->setProperty('houseAutomaticEnrolment', $houseAutomaticEnrolment);
    }

    /**
     * @return \Arbor\Model\RegistrationFormMembership
     */
    public function getEnrolmentDependency()
    {
        return $this->getProperty('enrolmentDependency');
    }

    /**
     * @param \Arbor\Model\RegistrationFormMembership $enrolmentDependency
     */
    public function setEnrolmentDependency(\Arbor\Model\RegistrationFormMembership $enrolmentDependency = null)
    {
        $this->setProperty('enrolmentDependency', $enrolmentDependency);
    }
}
