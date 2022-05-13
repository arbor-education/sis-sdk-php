<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class HouseAutomaticEnrolment extends ModelBase
{
    const HOUSE = 'house';

    const TRIGGER = 'trigger';

    protected $_resourceType = ResourceType::HOUSE_AUTOMATIC_ENROLMENT;

    /**
     * @param Query $query
     * @return HouseAutomaticEnrolment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::HOUSE_AUTOMATIC_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return HouseAutomaticEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::HOUSE_AUTOMATIC_ENROLMENT, $id);
    }

    /**
     * @return House
     */
    public function getHouse()
    {
        return $this->getProperty('house');
    }

    /**
     * @param House $house
     */
    public function setHouse(House $house = null)
    {
        $this->setProperty('house', $house);
    }

    /**
     * @return RegistrationForm
     */
    public function getTrigger()
    {
        return $this->getProperty('trigger');
    }

    /**
     * @param RegistrationForm $trigger
     */
    public function setTrigger(RegistrationForm $trigger = null)
    {
        $this->setProperty('trigger', $trigger);
    }

}
