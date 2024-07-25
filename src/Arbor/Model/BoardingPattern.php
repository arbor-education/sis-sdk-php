<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BoardingPattern extends ModelBase
{
    public const STUDENT = 'student';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const MONDAY_BOARDING_STATUS = 'mondayBoardingStatus';

    public const TUESDAY_BOARDING_STATUS = 'tuesdayBoardingStatus';

    public const WEDNESDAY_BOARDING_STATUS = 'wednesdayBoardingStatus';

    public const THURSDAY_BOARDING_STATUS = 'thursdayBoardingStatus';

    public const FRIDAY_BOARDING_STATUS = 'fridayBoardingStatus';

    public const SATURDAY_BOARDING_STATUS = 'saturdayBoardingStatus';

    public const SUNDAY_BOARDING_STATUS = 'sundayBoardingStatus';

    public const ACCOMMODATION_ROOM = 'accommodationRoom';

    protected $_resourceType = ResourceType::BOARDING_PATTERN;

    /**
     * @param Query $query
     * @return BoardingPattern[] | Collection
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

        $query->setResourceType(ResourceType::BOARDING_PATTERN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BoardingPattern
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BOARDING_PATTERN, $id);
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
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
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
     * @return \Arbor\Model\BoardingStatus
     */
    public function getMondayBoardingStatus()
    {
        return $this->getProperty('mondayBoardingStatus');
    }

    /**
     * @param \Arbor\Model\BoardingStatus $mondayBoardingStatus
     */
    public function setMondayBoardingStatus(\Arbor\Model\BoardingStatus $mondayBoardingStatus = null)
    {
        $this->setProperty('mondayBoardingStatus', $mondayBoardingStatus);
    }

    /**
     * @return \Arbor\Model\BoardingStatus
     */
    public function getTuesdayBoardingStatus()
    {
        return $this->getProperty('tuesdayBoardingStatus');
    }

    /**
     * @param \Arbor\Model\BoardingStatus $tuesdayBoardingStatus
     */
    public function setTuesdayBoardingStatus(\Arbor\Model\BoardingStatus $tuesdayBoardingStatus = null)
    {
        $this->setProperty('tuesdayBoardingStatus', $tuesdayBoardingStatus);
    }

    /**
     * @return \Arbor\Model\BoardingStatus
     */
    public function getWednesdayBoardingStatus()
    {
        return $this->getProperty('wednesdayBoardingStatus');
    }

    /**
     * @param \Arbor\Model\BoardingStatus $wednesdayBoardingStatus
     */
    public function setWednesdayBoardingStatus(\Arbor\Model\BoardingStatus $wednesdayBoardingStatus = null)
    {
        $this->setProperty('wednesdayBoardingStatus', $wednesdayBoardingStatus);
    }

    /**
     * @return \Arbor\Model\BoardingStatus
     */
    public function getThursdayBoardingStatus()
    {
        return $this->getProperty('thursdayBoardingStatus');
    }

    /**
     * @param \Arbor\Model\BoardingStatus $thursdayBoardingStatus
     */
    public function setThursdayBoardingStatus(\Arbor\Model\BoardingStatus $thursdayBoardingStatus = null)
    {
        $this->setProperty('thursdayBoardingStatus', $thursdayBoardingStatus);
    }

    /**
     * @return \Arbor\Model\BoardingStatus
     */
    public function getFridayBoardingStatus()
    {
        return $this->getProperty('fridayBoardingStatus');
    }

    /**
     * @param \Arbor\Model\BoardingStatus $fridayBoardingStatus
     */
    public function setFridayBoardingStatus(\Arbor\Model\BoardingStatus $fridayBoardingStatus = null)
    {
        $this->setProperty('fridayBoardingStatus', $fridayBoardingStatus);
    }

    /**
     * @return \Arbor\Model\BoardingStatus
     */
    public function getSaturdayBoardingStatus()
    {
        return $this->getProperty('saturdayBoardingStatus');
    }

    /**
     * @param \Arbor\Model\BoardingStatus $saturdayBoardingStatus
     */
    public function setSaturdayBoardingStatus(\Arbor\Model\BoardingStatus $saturdayBoardingStatus = null)
    {
        $this->setProperty('saturdayBoardingStatus', $saturdayBoardingStatus);
    }

    /**
     * @return \Arbor\Model\BoardingStatus
     */
    public function getSundayBoardingStatus()
    {
        return $this->getProperty('sundayBoardingStatus');
    }

    /**
     * @param \Arbor\Model\BoardingStatus $sundayBoardingStatus
     */
    public function setSundayBoardingStatus(\Arbor\Model\BoardingStatus $sundayBoardingStatus = null)
    {
        $this->setProperty('sundayBoardingStatus', $sundayBoardingStatus);
    }

    /**
     * @return \Arbor\Model\Room
     */
    public function getAccommodationRoom()
    {
        return $this->getProperty('accommodationRoom');
    }

    /**
     * @param \Arbor\Model\Room $accommodationRoom
     */
    public function setAccommodationRoom(\Arbor\Model\Room $accommodationRoom = null)
    {
        $this->setProperty('accommodationRoom', $accommodationRoom);
    }
}
