<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SenEvent extends ModelBase
{
    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const LOCATION_TEXT = 'locationText';

    public const LOCATION = 'location';

    public const STUDENT = 'student';

    public const SEN_EVENT_TYPE = 'senEventType';

    public const SEN_EVENT_NAME = 'senEventName';

    public const SEN_EVENT_DESCRIPTION = 'senEventDescription';

    protected $_resourceType = ResourceType::SEN_EVENT;

    /**
     * @param Query $query
     * @return SenEvent[] | Collection
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

        $query->setResourceType(ResourceType::SEN_EVENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenEvent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SEN_EVENT, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty('locationText');
    }

    /**
     * @param string $locationText
     */
    public function setLocationText(string $locationText = null)
    {
        $this->setProperty('locationText', $locationText);
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
     * @return \Arbor\Model\SenEventType
     */
    public function getSenEventType()
    {
        return $this->getProperty('senEventType');
    }

    /**
     * @param \Arbor\Model\SenEventType $senEventType
     */
    public function setSenEventType(\Arbor\Model\SenEventType $senEventType = null)
    {
        $this->setProperty('senEventType', $senEventType);
    }

    /**
     * @return string
     */
    public function getSenEventName()
    {
        return $this->getProperty('senEventName');
    }

    /**
     * @param string $senEventName
     */
    public function setSenEventName(string $senEventName = null)
    {
        $this->setProperty('senEventName', $senEventName);
    }

    /**
     * @return string
     */
    public function getSenEventDescription()
    {
        return $this->getProperty('senEventDescription');
    }

    /**
     * @param string $senEventDescription
     */
    public function setSenEventDescription(string $senEventDescription = null)
    {
        $this->setProperty('senEventDescription', $senEventDescription);
    }
}
