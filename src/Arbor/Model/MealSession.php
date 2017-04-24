<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\MealSitting;
use \Arbor\Model\TimetableSlot;

class MealSession extends ModelBase
{
    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const LOCATION_TEXT = 'locationText';

    const LOCATION = 'location';

    const SCHEDULED_BY = 'scheduledBy';

    const MEAL_SITTING = 'mealSitting';

    const REGISTER_OPENED_DATETIME = 'registerOpenedDatetime';

    const REGISTER_CLOSED_DATETIME = 'registerClosedDatetime';

    const INVOICED_DATETIME = 'invoicedDatetime';

    const TIMETABLE_SLOT = 'timetableSlot';

    protected $_resourceType = ResourceType::MEAL_SESSION;

    /**
     * @param \Arbor\Query\Query $query
     * @return MealSession[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("MealSession");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MealSession
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::MEAL_SESSION, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty("startDatetime");
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty("startDatetime", $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty("endDatetime");
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty("endDatetime", $endDatetime);
    }

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty("locationText");
    }

    /**
     * @param string $locationText
     */
    public function setLocationText($locationText = null)
    {
        $this->setProperty("locationText", $locationText);
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
     * @return ModelBase
     */
    public function getScheduledBy()
    {
        return $this->getProperty("scheduledBy");
    }

    /**
     * @param ModelBase $scheduledBy
     */
    public function setScheduledBy(ModelBase $scheduledBy = null)
    {
        $this->setProperty("scheduledBy", $scheduledBy);
    }

    /**
     * @return MealSitting
     */
    public function getMealSitting()
    {
        return $this->getProperty("mealSitting");
    }

    /**
     * @param MealSitting $mealSitting
     */
    public function setMealSitting(MealSitting $mealSitting = null)
    {
        $this->setProperty("mealSitting", $mealSitting);
    }

    /**
     * @return \DateTime
     */
    public function getRegisterOpenedDatetime()
    {
        return $this->getProperty("registerOpenedDatetime");
    }

    /**
     * @param \DateTime $registerOpenedDatetime
     */
    public function setRegisterOpenedDatetime(\DateTime $registerOpenedDatetime = null)
    {
        $this->setProperty("registerOpenedDatetime", $registerOpenedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRegisterClosedDatetime()
    {
        return $this->getProperty("registerClosedDatetime");
    }

    /**
     * @param \DateTime $registerClosedDatetime
     */
    public function setRegisterClosedDatetime(\DateTime $registerClosedDatetime = null)
    {
        $this->setProperty("registerClosedDatetime", $registerClosedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getInvoicedDatetime()
    {
        return $this->getProperty("invoicedDatetime");
    }

    /**
     * @param \DateTime $invoicedDatetime
     */
    public function setInvoicedDatetime(\DateTime $invoicedDatetime = null)
    {
        $this->setProperty("invoicedDatetime", $invoicedDatetime);
    }

    /**
     * @return TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty("timetableSlot");
    }

    /**
     * @param TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(TimetableSlot $timetableSlot = null)
    {
        $this->setProperty("timetableSlot", $timetableSlot);
    }
}
