<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmailMailbox extends ModelBase
{
    const EMAIL_ACCOUNT = 'emailAccount';

    const MAILBOX_TYPE = 'mailboxType';

    const MAILBOX_FOLDER = 'mailboxFolder';

    const LAST_RETRIEVED_DATETIME = 'lastRetrievedDatetime';

    const LAST_SEEN_UID = 'lastSeenUid';

    const UID_VALIDITY = 'uidValidity';

    const DEFAULT_ACTION_REQUIRED_BY_TIME = 'defaultActionRequiredByTime';

    const SHARED_BY_DEFAULT = 'sharedByDefault';

    const FIRST_ERROR_DATETIME = 'firstErrorDatetime';

    const LAST_ERROR_DATETIME = 'lastErrorDatetime';

    const DISABLED = 'disabled';

    protected $_resourceType = ResourceType::EMAIL_MAILBOX;

    /**
     * @param Query $query
     * @return EmailMailbox[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_MAILBOX);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailMailbox
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_MAILBOX, $id);
    }

    /**
     * @return EmailAccount
     */
    public function getEmailAccount()
    {
        return $this->getProperty('emailAccount');
    }

    /**
     * @param EmailAccount $emailAccount
     */
    public function setEmailAccount(EmailAccount $emailAccount = null)
    {
        $this->setProperty('emailAccount', $emailAccount);
    }

    /**
     * @return string
     */
    public function getMailboxType()
    {
        return $this->getProperty('mailboxType');
    }

    /**
     * @param string $mailboxType
     */
    public function setMailboxType($mailboxType = null)
    {
        $this->setProperty('mailboxType', $mailboxType);
    }

    /**
     * @return string
     */
    public function getMailboxFolder()
    {
        return $this->getProperty('mailboxFolder');
    }

    /**
     * @param string $mailboxFolder
     */
    public function setMailboxFolder($mailboxFolder = null)
    {
        $this->setProperty('mailboxFolder', $mailboxFolder);
    }

    /**
     * @return \DateTime
     */
    public function getLastRetrievedDatetime()
    {
        return $this->getProperty('lastRetrievedDatetime');
    }

    /**
     * @param \DateTime $lastRetrievedDatetime
     */
    public function setLastRetrievedDatetime(\DateTime $lastRetrievedDatetime = null)
    {
        $this->setProperty('lastRetrievedDatetime', $lastRetrievedDatetime);
    }

    /**
     * @return int
     */
    public function getLastSeenUid()
    {
        return $this->getProperty('lastSeenUid');
    }

    /**
     * @param int $lastSeenUid
     */
    public function setLastSeenUid($lastSeenUid = null)
    {
        $this->setProperty('lastSeenUid', $lastSeenUid);
    }

    /**
     * @return int
     */
    public function getUidValidity()
    {
        return $this->getProperty('uidValidity');
    }

    /**
     * @param int $uidValidity
     */
    public function setUidValidity($uidValidity = null)
    {
        $this->setProperty('uidValidity', $uidValidity);
    }

    /**
     * @return string
     */
    public function getDefaultActionRequiredByTime()
    {
        return $this->getProperty('defaultActionRequiredByTime');
    }

    /**
     * @param string $defaultActionRequiredByTime
     */
    public function setDefaultActionRequiredByTime($defaultActionRequiredByTime = null)
    {
        $this->setProperty('defaultActionRequiredByTime', $defaultActionRequiredByTime);
    }

    /**
     * @return bool
     */
    public function getSharedByDefault()
    {
        return $this->getProperty('sharedByDefault');
    }

    /**
     * @param bool $sharedByDefault
     */
    public function setSharedByDefault($sharedByDefault = null)
    {
        $this->setProperty('sharedByDefault', $sharedByDefault);
    }

    /**
     * @return \DateTime
     */
    public function getFirstErrorDatetime()
    {
        return $this->getProperty('firstErrorDatetime');
    }

    /**
     * @param \DateTime $firstErrorDatetime
     */
    public function setFirstErrorDatetime(\DateTime $firstErrorDatetime = null)
    {
        $this->setProperty('firstErrorDatetime', $firstErrorDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getLastErrorDatetime()
    {
        return $this->getProperty('lastErrorDatetime');
    }

    /**
     * @param \DateTime $lastErrorDatetime
     */
    public function setLastErrorDatetime(\DateTime $lastErrorDatetime = null)
    {
        $this->setProperty('lastErrorDatetime', $lastErrorDatetime);
    }

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->getProperty('disabled');
    }

    /**
     * @param bool $disabled
     */
    public function setDisabled($disabled = null)
    {
        $this->setProperty('disabled', $disabled);
    }
}
