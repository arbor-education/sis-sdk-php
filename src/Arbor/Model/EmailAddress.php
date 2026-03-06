<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmailAddress extends ModelBase
{
    public const EMAIL_ADDRESS_OWNER = 'emailAddressOwner';

    public const EMAIL_ADDRESS_TYPE = 'emailAddressType';

    public const EMAIL_ADDRESS = 'emailAddress';

    public const DATA_ORDER = 'dataOrder';

    public const ROLE = 'role';

    public const FREE = 'free';

    public const DISPOSABLE = 'disposable';

    protected $_resourceType = ResourceType::EMAIL_ADDRESS;

    /**
     * @param Query $query
     * @return EmailAddress[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_ADDRESS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailAddress
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_ADDRESS, $id);
    }

    /**
     * @return ModelBase
     */
    public function getEmailAddressOwner()
    {
        return $this->getProperty('emailAddressOwner');
    }

    /**
     * @param ModelBase $emailAddressOwner
     */
    public function setEmailAddressOwner(\ModelBase $emailAddressOwner = null)
    {
        $this->setProperty('emailAddressOwner', $emailAddressOwner);
    }

    /**
     * @return string
     */
    public function getEmailAddressType()
    {
        return $this->getProperty('emailAddressType');
    }

    /**
     * @param string $emailAddressType
     */
    public function setEmailAddressType(string $emailAddressType = null)
    {
        $this->setProperty('emailAddressType', $emailAddressType);
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->getProperty('emailAddress');
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress(string $emailAddress = null)
    {
        $this->setProperty('emailAddress', $emailAddress);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return bool
     */
    public function getRole()
    {
        return $this->getProperty('role');
    }

    /**
     * @param bool $role
     */
    public function setRole(bool $role = null)
    {
        $this->setProperty('role', $role);
    }

    /**
     * @return bool
     */
    public function getFree()
    {
        return $this->getProperty('free');
    }

    /**
     * @param bool $free
     */
    public function setFree(bool $free = null)
    {
        $this->setProperty('free', $free);
    }

    /**
     * @return bool
     */
    public function getDisposable()
    {
        return $this->getProperty('disposable');
    }

    /**
     * @param bool $disposable
     */
    public function setDisposable(bool $disposable = null)
    {
        $this->setProperty('disposable', $disposable);
    }
}
