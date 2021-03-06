<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmailAddress extends ModelBase
{
    const EMAIL_ADDRESS_OWNER = 'emailAddressOwner';

    const EMAIL_ADDRESS_TYPE = 'emailAddressType';

    const EMAIL_ADDRESS = 'emailAddress';

    const DATA_ORDER = 'dataOrder';

    const ROLE = 'role';

    const FREE = 'free';

    const DISPOSABLE = 'disposable';

    protected $_resourceType = ResourceType::EMAIL_ADDRESS;

    /**
     * @param Query $query
     * @return EmailAddress[] | Collection
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
    public function setEmailAddressOwner(ModelBase $emailAddressOwner = null)
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
    public function setEmailAddressType($emailAddressType = null)
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
    public function setEmailAddress($emailAddress = null)
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
    public function setDataOrder($dataOrder = null)
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
    public function setRole($role = null)
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
    public function setFree($free = null)
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
    public function setDisposable($disposable = null)
    {
        $this->setProperty('disposable', $disposable);
    }
}
