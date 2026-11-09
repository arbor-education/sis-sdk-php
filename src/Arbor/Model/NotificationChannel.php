<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class NotificationChannel extends ModelBase
{
    public const USER = 'user';

    public const METHOD = 'method';

    public const CHANNEL = 'channel';

    public const ENABLED = 'enabled';

    public const MODIFIED_DATETIME = 'modifiedDatetime';

    protected $_resourceType = ResourceType::NOTIFICATION_CHANNEL;

    /**
     * @param Query $query
     * @return NotificationChannel[] | Collection
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

        $query->setResourceType(ResourceType::NOTIFICATION_CHANNEL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return NotificationChannel
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::NOTIFICATION_CHANNEL, $id);
    }

    /**
     * @return \Arbor\Model\User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param \Arbor\Model\User $user
     */
    public function setUser(\Arbor\Model\User $user = null)
    {
        $this->setProperty('user', $user);
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->getProperty('method');
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method = null)
    {
        $this->setProperty('method', $method);
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->getProperty('channel');
    }

    /**
     * @param string $channel
     */
    public function setChannel(string $channel = null)
    {
        $this->setProperty('channel', $channel);
    }

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->getProperty('enabled');
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled = null)
    {
        $this->setProperty('enabled', $enabled);
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDatetime()
    {
        return $this->getProperty('modifiedDatetime');
    }

    /**
     * @param \DateTime $modifiedDatetime
     */
    public function setModifiedDatetime(\DateTime $modifiedDatetime = null)
    {
        $this->setProperty('modifiedDatetime', $modifiedDatetime);
    }
}
