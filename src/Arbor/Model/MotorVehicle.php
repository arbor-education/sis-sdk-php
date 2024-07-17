<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MotorVehicle extends ModelBase
{
    public const OWNER = 'owner';

    public const MOTOR_VEHICLE_TYPE = 'motorVehicleType';

    public const MOTOR_VEHICLE_MAKE = 'motorVehicleMake';

    public const MODEL = 'model';

    public const COLOUR = 'colour';

    public const REGISTRATION_NUMBER = 'registrationNumber';

    public const PARKING_ALLOCATION_PROVIDED = 'parkingAllocationProvided';

    protected $_resourceType = ResourceType::MOTOR_VEHICLE;

    /**
     * @param Query $query
     * @return MotorVehicle[] | Collection
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

        $query->setResourceType(ResourceType::MOTOR_VEHICLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MotorVehicle
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MOTOR_VEHICLE, $id);
    }

    /**
     * @return ModelBase
     */
    public function getOwner()
    {
        return $this->getProperty('owner');
    }

    /**
     * @param ModelBase $owner
     */
    public function setOwner(\ModelBase $owner = null)
    {
        $this->setProperty('owner', $owner);
    }

    /**
     * @return string
     */
    public function getMotorVehicleType()
    {
        return $this->getProperty('motorVehicleType');
    }

    /**
     * @param string $motorVehicleType
     */
    public function setMotorVehicleType(string $motorVehicleType = null)
    {
        $this->setProperty('motorVehicleType', $motorVehicleType);
    }

    /**
     * @return \Arbor\Model\MotorVehicleMake
     */
    public function getMotorVehicleMake()
    {
        return $this->getProperty('motorVehicleMake');
    }

    /**
     * @param \Arbor\Model\MotorVehicleMake $motorVehicleMake
     */
    public function setMotorVehicleMake(\Arbor\Model\MotorVehicleMake $motorVehicleMake = null)
    {
        $this->setProperty('motorVehicleMake', $motorVehicleMake);
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->getProperty('model');
    }

    /**
     * @param string $model
     */
    public function setModel(string $model = null)
    {
        $this->setProperty('model', $model);
    }

    /**
     * @return string
     */
    public function getColour()
    {
        return $this->getProperty('colour');
    }

    /**
     * @param string $colour
     */
    public function setColour(string $colour = null)
    {
        $this->setProperty('colour', $colour);
    }

    /**
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->getProperty('registrationNumber');
    }

    /**
     * @param string $registrationNumber
     */
    public function setRegistrationNumber(string $registrationNumber = null)
    {
        $this->setProperty('registrationNumber', $registrationNumber);
    }

    /**
     * @return bool
     */
    public function getParkingAllocationProvided()
    {
        return $this->getProperty('parkingAllocationProvided');
    }

    /**
     * @param bool $parkingAllocationProvided
     */
    public function setParkingAllocationProvided(bool $parkingAllocationProvided = null)
    {
        $this->setProperty('parkingAllocationProvided', $parkingAllocationProvided);
    }
}
