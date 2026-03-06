<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DeliveryAddress extends ModelBase
{
    public const DELIVERY_ADDRESS_NAME = 'deliveryAddressName';

    public const OWNER = 'owner';

    public const POSTAL_ADDRESS = 'postalAddress';

    public const DELIVERY_CONTACT_NAME = 'deliveryContactName';

    public const DELIVERY_CONTACT_NUMBER = 'deliveryContactNumber';

    public const DELIVERY_INSTRUCTIONS = 'deliveryInstructions';

    public const IS_DEFAULT = 'isDefault';

    public const IS_ADDRESS_FOR_REUSE = 'isAddressForReuse';

    protected $_resourceType = ResourceType::DELIVERY_ADDRESS;

    /**
     * @param Query $query
     * @return DeliveryAddress[] | Collection
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

        $query->setResourceType(ResourceType::DELIVERY_ADDRESS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DeliveryAddress
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DELIVERY_ADDRESS, $id);
    }

    /**
     * @return string
     */
    public function getDeliveryAddressName()
    {
        return $this->getProperty('deliveryAddressName');
    }

    /**
     * @param string $deliveryAddressName
     */
    public function setDeliveryAddressName(string $deliveryAddressName = null)
    {
        $this->setProperty('deliveryAddressName', $deliveryAddressName);
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
     * @return \Arbor\Model\PostalAddress
     */
    public function getPostalAddress()
    {
        return $this->getProperty('postalAddress');
    }

    /**
     * @param \Arbor\Model\PostalAddress $postalAddress
     */
    public function setPostalAddress(\Arbor\Model\PostalAddress $postalAddress = null)
    {
        $this->setProperty('postalAddress', $postalAddress);
    }

    /**
     * @return string
     */
    public function getDeliveryContactName()
    {
        return $this->getProperty('deliveryContactName');
    }

    /**
     * @param string $deliveryContactName
     */
    public function setDeliveryContactName(string $deliveryContactName = null)
    {
        $this->setProperty('deliveryContactName', $deliveryContactName);
    }

    /**
     * @return string
     */
    public function getDeliveryContactNumber()
    {
        return $this->getProperty('deliveryContactNumber');
    }

    /**
     * @param string $deliveryContactNumber
     */
    public function setDeliveryContactNumber(string $deliveryContactNumber = null)
    {
        $this->setProperty('deliveryContactNumber', $deliveryContactNumber);
    }

    /**
     * @return string
     */
    public function getDeliveryInstructions()
    {
        return $this->getProperty('deliveryInstructions');
    }

    /**
     * @param string $deliveryInstructions
     */
    public function setDeliveryInstructions(string $deliveryInstructions = null)
    {
        $this->setProperty('deliveryInstructions', $deliveryInstructions);
    }

    /**
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->getProperty('isDefault');
    }

    /**
     * @param bool $isDefault
     */
    public function setIsDefault(bool $isDefault = null)
    {
        $this->setProperty('isDefault', $isDefault);
    }

    /**
     * @return bool
     */
    public function getIsAddressForReuse()
    {
        return $this->getProperty('isAddressForReuse');
    }

    /**
     * @param bool $isAddressForReuse
     */
    public function setIsAddressForReuse(bool $isAddressForReuse = null)
    {
        $this->setProperty('isAddressForReuse', $isAddressForReuse);
    }
}
