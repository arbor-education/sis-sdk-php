<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class KickboxResult extends ModelBase
{

    const RAW_EMAIL_ADDRESS = 'rawEmailAddress';

    const RESULT = 'result';

    const REASON = 'reason';

    const ROLE = 'role';

    const FREE = 'free';

    const DISPOSABLE = 'disposable';

    const ACCEPT_ALL = 'acceptAll';

    const DID_YOU_MEAN = 'didYouMean';

    const SENDEX = 'sendex';

    const RESPONSE_CODE = 'responseCode';

    const LAST_CHECKED_DATETIME = 'lastCheckedDatetime';

    protected $_resourceType = ResourceType::KICKBOX_RESULT;

    /**
     * @param Query $query
     * @return KickboxResult[] | Collection
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

        $query->setResourceType(ResourceType::KICKBOX_RESULT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return KickboxResult
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::KICKBOX_RESULT, $id);
    }

    /**
     * @return string
     */
    public function getRawEmailAddress()
    {
        return $this->getProperty('rawEmailAddress');
    }

    /**
     * @param string $rawEmailAddress
     */
    public function setRawEmailAddress($rawEmailAddress = null)
    {
        $this->setProperty('rawEmailAddress', $rawEmailAddress);
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->getProperty('result');
    }

    /**
     * @param string $result
     */
    public function setResult($result = null)
    {
        $this->setProperty('result', $result);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->getProperty('reason');
    }

    /**
     * @param string $reason
     */
    public function setReason($reason = null)
    {
        $this->setProperty('reason', $reason);
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

    /**
     * @return bool
     */
    public function getAcceptAll()
    {
        return $this->getProperty('acceptAll');
    }

    /**
     * @param bool $acceptAll
     */
    public function setAcceptAll($acceptAll = null)
    {
        $this->setProperty('acceptAll', $acceptAll);
    }

    /**
     * @return string
     */
    public function getDidYouMean()
    {
        return $this->getProperty('didYouMean');
    }

    /**
     * @param string $didYouMean
     */
    public function setDidYouMean($didYouMean = null)
    {
        $this->setProperty('didYouMean', $didYouMean);
    }

    /**
     * @return float
     */
    public function getSendex()
    {
        return $this->getProperty('sendex');
    }

    /**
     * @param float $sendex
     */
    public function setSendex($sendex = null)
    {
        $this->setProperty('sendex', $sendex);
    }

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return $this->getProperty('responseCode');
    }

    /**
     * @param int $responseCode
     */
    public function setResponseCode($responseCode = null)
    {
        $this->setProperty('responseCode', $responseCode);
    }

    /**
     * @return \DateTime
     */
    public function getLastCheckedDatetime()
    {
        return $this->getProperty('lastCheckedDatetime');
    }

    /**
     * @param \DateTime $lastCheckedDatetime
     */
    public function setLastCheckedDatetime(\DateTime $lastCheckedDatetime = null)
    {
        $this->setProperty('lastCheckedDatetime', $lastCheckedDatetime);
    }


}
