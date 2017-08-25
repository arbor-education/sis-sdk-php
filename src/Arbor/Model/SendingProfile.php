<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SendingProfile extends ModelBase
{
    const OWNER = 'owner';

    const EMAIL_ADDRESS = 'emailAddress';

    const MOBILE_TELEPHONE_NUMBER = 'mobileTelephoneNumber';

    const PERMITTED_SENDER = 'permittedSender';

    protected $_resourceType = ResourceType::SENDING_PROFILE;

    /**
     * @param Query $query
     * @return SendingProfile[] | Collection
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

        $query->setResourceType(ResourceType::SENDING_PROFILE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SendingProfile
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SENDING_PROFILE, $id);
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
     * @return EmailAddress
     */
    public function getEmailAddress()
    {
        return $this->getProperty('emailAddress');
    }

    /**
     * @param EmailAddress $emailAddress
     */
    public function setEmailAddress(EmailAddress $emailAddress = null)
    {
        $this->setProperty('emailAddress', $emailAddress);
    }

    /**
     * @return TelephoneNumber
     */
    public function getMobileTelephoneNumber()
    {
        return $this->getProperty('mobileTelephoneNumber');
    }

    /**
     * @param TelephoneNumber $mobileTelephoneNumber
     */
    public function setMobileTelephoneNumber(TelephoneNumber $mobileTelephoneNumber = null)
    {
        $this->setProperty('mobileTelephoneNumber', $mobileTelephoneNumber);
    }

    /**
     * @return ModelBase
     */
    public function getPermittedSender()
    {
        return $this->getProperty('permittedSender');
    }

    /**
     * @param ModelBase $permittedSender
     */
    public function setPermittedSender(ModelBase $permittedSender = null)
    {
        $this->setProperty('permittedSender', $permittedSender);
    }
}
