<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SendingProfile extends ModelBase
{
    public const OWNER = 'owner';

    public const EMAIL_ADDRESS = 'emailAddress';

    public const MOBILE_TELEPHONE_NUMBER = 'mobileTelephoneNumber';

    public const PERMITTED_SENDER = 'permittedSender';

    protected $_resourceType = ResourceType::SENDING_PROFILE;

    /**
     * @param Query $query
     * @return SendingProfile[] | Collection
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
    public function setOwner(\ModelBase $owner = null)
    {
        $this->setProperty('owner', $owner);
    }

    /**
     * @return \Arbor\Model\EmailAddress
     */
    public function getEmailAddress()
    {
        return $this->getProperty('emailAddress');
    }

    /**
     * @param \Arbor\Model\EmailAddress $emailAddress
     */
    public function setEmailAddress(\Arbor\Model\EmailAddress $emailAddress = null)
    {
        $this->setProperty('emailAddress', $emailAddress);
    }

    /**
     * @return \Arbor\Model\TelephoneNumber
     */
    public function getMobileTelephoneNumber()
    {
        return $this->getProperty('mobileTelephoneNumber');
    }

    /**
     * @param \Arbor\Model\TelephoneNumber $mobileTelephoneNumber
     */
    public function setMobileTelephoneNumber(\Arbor\Model\TelephoneNumber $mobileTelephoneNumber = null)
    {
        $this->setProperty('mobileTelephoneNumber', $mobileTelephoneNumber);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getPermittedSender()
    {
        return $this->getProperty('permittedSender');
    }

    /**
     * @param \Arbor\Model\Staff $permittedSender
     */
    public function setPermittedSender(\Arbor\Model\Staff $permittedSender = null)
    {
        $this->setProperty('permittedSender', $permittedSender);
    }
}
