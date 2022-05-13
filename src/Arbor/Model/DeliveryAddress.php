<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DeliveryAddress extends ModelBase
{
    const DELIVERY_ADDRESS_NAME = 'deliveryAddressName';

    const OWNER = 'owner';

    const POSTAL_ADDRESS = 'postalAddress';

    const DELIVERY_CONTACT_NAME = 'deliveryContactName';

    const DELIVERY_CONTACT_NUMBER = 'deliveryContactNumber';

    const DELIVERY_INSTRUCTIONS = 'deliveryInstructions';

    const IS_DEFAULT = 'isDefault';

    const IS_ADDRESS_FOR_REUSE = 'isAddressForReuse';

    protected $_resourceType = ResourceType::DELIVERY_ADDRESS;

    /**
     * @param Query $query
     * @return DeliveryAddress[] | Collection
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
    public function setDeliveryAddressName($deliveryAddressName = null)
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
    public function setOwner(ModelBase $owner = null)
    {
        $this->setProperty('owner', $owner);
    }

    /**
     * @return PostalAddress
     */
    public function getPostalAddress()
    {
        return $this->getProperty('postalAddress');
    }

    /**
     * @param PostalAddress $postalAddress
     */
    public function setPostalAddress(PostalAddress $postalAddress = null)
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
    public function setDeliveryContactName($deliveryContactName = null)
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
    public function setDeliveryContactNumber($deliveryContactNumber = null)
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
    public function setDeliveryInstructions($deliveryInstructions = null)
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
    public function setIsDefault($isDefault = null)
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
    public function setIsAddressForReuse($isAddressForReuse = null)
    {
        $this->setProperty('isAddressForReuse', $isAddressForReuse);
    }

}
