<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PushNotificationToken extends ModelBase
{
    public const USER = 'user';

    public const TOKEN = 'token';

    public const UNIQUE_IDENTIFIER = 'uniqueIdentifier';

    public const DEVICE_OS = 'deviceOs';

    public const REAL_PUSH_TOKEN = 'realPushToken';

    public const DEVICE_ID = 'deviceId';

    protected $_resourceType = ResourceType::PUSH_NOTIFICATION_TOKEN;

    /**
     * @param Query $query
     * @return PushNotificationToken[] | Collection
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

        $query->setResourceType(ResourceType::PUSH_NOTIFICATION_TOKEN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PushNotificationToken
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PUSH_NOTIFICATION_TOKEN, $id);
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
    public function getToken()
    {
        return $this->getProperty('token');
    }

    /**
     * @param string $token
     */
    public function setToken(string $token = null)
    {
        $this->setProperty('token', $token);
    }

    /**
     * @return string
     */
    public function getUniqueIdentifier()
    {
        return $this->getProperty('uniqueIdentifier');
    }

    /**
     * @param string $uniqueIdentifier
     */
    public function setUniqueIdentifier(string $uniqueIdentifier = null)
    {
        $this->setProperty('uniqueIdentifier', $uniqueIdentifier);
    }

    /**
     * @return string
     */
    public function getDeviceOs()
    {
        return $this->getProperty('deviceOs');
    }

    /**
     * @param string $deviceOs
     */
    public function setDeviceOs(string $deviceOs = null)
    {
        $this->setProperty('deviceOs', $deviceOs);
    }

    /**
     * @return string
     */
    public function getRealPushToken()
    {
        return $this->getProperty('realPushToken');
    }

    /**
     * @param string $realPushToken
     */
    public function setRealPushToken(string $realPushToken = null)
    {
        $this->setProperty('realPushToken', $realPushToken);
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->getProperty('deviceId');
    }

    /**
     * @param string $deviceId
     */
    public function setDeviceId(string $deviceId = null)
    {
        $this->setProperty('deviceId', $deviceId);
    }
}
