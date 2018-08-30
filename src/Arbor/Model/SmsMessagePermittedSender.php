<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\Staff;

class SmsMessagePermittedSender extends ModelBase
{

    protected $_resourceType = ResourceType::SMS_MESSAGE_PERMITTED_SENDER;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\SmsMessagePermittedSender[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("SmsMessagePermittedSender");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\SmsMessagePermittedSender
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("SmsMessagePermittedSender", $id);
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
     * @return Staff
     */
    public function getActionTaker()
    {
        return $this->getProperty("actionTaker");
    }

    /**
     * @param Staff $actionTaker
     */
    public function setActionTaker(Staff $actionTaker = null)
    {
        $this->setProperty("actionTaker", $actionTaker);
    }

    /**
     * @return ModelBase
     */
    public function getSender()
    {
        return $this->getProperty("sender");
    }

    /**
     * @param ModelBase $sender
     */
    public function setSender(ModelBase $sender = null)
    {
        $this->setProperty("sender", $sender);
    }

    /**
     * @return bool
     */
    public function getAllow()
    {
        return $this->getProperty("allow");
    }

    /**
     * @param bool $allow
     */
    public function setAllow($allow = null)
    {
        $this->setProperty("allow", $allow);
    }


}
