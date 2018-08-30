<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\House;
use \Arbor\Model\RegistrationForm;

class HouseAutomaticEnrolment extends ModelBase
{

    protected $_resourceType = ResourceType::HOUSE_AUTOMATIC_ENROLMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\HouseAutomaticEnrolment[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("HouseAutomaticEnrolment");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\HouseAutomaticEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("HouseAutomaticEnrolment", $id);
    }

    /**
     * @return House
     */
    public function getHouse()
    {
        return $this->getProperty("house");
    }

    /**
     * @param House $house
     */
    public function setHouse(House $house = null)
    {
        $this->setProperty("house", $house);
    }

    /**
     * @return RegistrationForm
     */
    public function getTrigger()
    {
        return $this->getProperty("trigger");
    }

    /**
     * @param RegistrationForm $trigger
     */
    public function setTrigger(RegistrationForm $trigger = null)
    {
        $this->setProperty("trigger", $trigger);
    }


}
