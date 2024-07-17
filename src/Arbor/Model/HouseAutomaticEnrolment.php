<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class HouseAutomaticEnrolment extends ModelBase
{
    public const HOUSE = 'house';

    public const TRIGGER = 'trigger';

    protected $_resourceType = ResourceType::HOUSE_AUTOMATIC_ENROLMENT;

    /**
     * @param Query $query
     * @return HouseAutomaticEnrolment[] | Collection
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
     * @return \Arbor\Model\RegistrationForm
     */
    public function getTrigger()
    {
        return $this->getProperty('trigger');
    }

    /**
     * @param \Arbor\Model\RegistrationForm $trigger
     */
    public function setTrigger(\Arbor\Model\RegistrationForm $trigger = null)
    {
        $this->setProperty('trigger', $trigger);
    }
}
