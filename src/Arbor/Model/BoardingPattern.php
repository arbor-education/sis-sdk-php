<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BoardingPattern extends \ModelBase
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
    public static function query(\Query $query = null)
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
     * @return BoardingStatus
     */
    public function getMondayBoardingStatus()
    {
        return $this->getProperty('mondayBoardingStatus');
    }

    /**
     * @param BoardingStatus $mondayBoardingStatus
     */
    public function setMondayBoardingStatus(\BoardingStatus $mondayBoardingStatus = null)
    {
        $this->setProperty('mondayBoardingStatus', $mondayBoardingStatus);
    }

    /**
     * @return BoardingStatus
     */
    public function getTuesdayBoardingStatus()
    {
        return $this->getProperty('tuesdayBoardingStatus');
    }

    /**
     * @param BoardingStatus $tuesdayBoardingStatus
     */
    public function setTuesdayBoardingStatus(\BoardingStatus $tuesdayBoardingStatus = null)
    {
        $this->setProperty('tuesdayBoardingStatus', $tuesdayBoardingStatus);
    }

    /**
     * @return BoardingStatus
     */
    public function getWednesdayBoardingStatus()
    {
        return $this->getProperty('wednesdayBoardingStatus');
    }

    /**
     * @param BoardingStatus $wednesdayBoardingStatus
     */
    public function setWednesdayBoardingStatus(\BoardingStatus $wednesdayBoardingStatus = null)
    {
        $this->setProperty('wednesdayBoardingStatus', $wednesdayBoardingStatus);
    }

    /**
     * @return BoardingStatus
     */
    public function getThursdayBoardingStatus()
    {
        return $this->getProperty('thursdayBoardingStatus');
    }

    /**
     * @param BoardingStatus $thursdayBoardingStatus
     */
    public function setThursdayBoardingStatus(\BoardingStatus $thursdayBoardingStatus = null)
    {
        $this->setProperty('thursdayBoardingStatus', $thursdayBoardingStatus);
    }

    /**
     * @return BoardingStatus
     */
    public function getFridayBoardingStatus()
    {
        return $this->getProperty('fridayBoardingStatus');
    }

    /**
     * @param BoardingStatus $fridayBoardingStatus
     */
    public function setFridayBoardingStatus(\BoardingStatus $fridayBoardingStatus = null)
    {
        $this->setProperty('fridayBoardingStatus', $fridayBoardingStatus);
    }

    /**
     * @return BoardingStatus
     */
    public function getSaturdayBoardingStatus()
    {
        return $this->getProperty('saturdayBoardingStatus');
    }

    /**
     * @param BoardingStatus $saturdayBoardingStatus
     */
    public function setSaturdayBoardingStatus(\BoardingStatus $saturdayBoardingStatus = null)
    {
        $this->setProperty('saturdayBoardingStatus', $saturdayBoardingStatus);
    }

    /**
     * @return BoardingStatus
     */
    public function getSundayBoardingStatus()
    {
        return $this->getProperty('sundayBoardingStatus');
    }

    /**
     * @param BoardingStatus $sundayBoardingStatus
     */
    public function setSundayBoardingStatus(\BoardingStatus $sundayBoardingStatus = null)
    {
        $this->setProperty('sundayBoardingStatus', $sundayBoardingStatus);
    }

    /**
     * @return Room
     */
    public function getAccommodationRoom()
    {
        return $this->getProperty('accommodationRoom');
    }

    /**
     * @param Room $accommodationRoom
     */
    public function setAccommodationRoom(\Room $accommodationRoom = null)
    {
        $this->setProperty('accommodationRoom', $accommodationRoom);
    }
}
