<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InAppMessageNotification extends ModelBase
{

    const IN_APP_MESSAGE = 'inAppMessage';

    const NOTIFICATION_CHANNEL = 'notificationChannel';

    protected $_resourceType = ResourceType::IN_APP_MESSAGE_NOTIFICATION;

    /**
     * @param Query $query
     * @return InAppMessageNotification[] | Collection
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

        $query->setResourceType(ResourceType::IN_APP_MESSAGE_NOTIFICATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InAppMessageNotification
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_APP_MESSAGE_NOTIFICATION, $id);
    }

    /**
     * @return ModelBase
     */
    public function getInAppMessage()
    {
        return $this->getProperty('inAppMessage');
    }

    /**
     * @param ModelBase $inAppMessage
     */
    public function setInAppMessage(ModelBase $inAppMessage = null)
    {
        $this->setProperty('inAppMessage', $inAppMessage);
    }

    /**
     * @return ModelBase
     */
    public function getNotificationChannel()
    {
        return $this->getProperty('notificationChannel');
    }

    /**
     * @param ModelBase $notificationChannel
     */
    public function setNotificationChannel(ModelBase $notificationChannel = null)
    {
        $this->setProperty('notificationChannel', $notificationChannel);
    }


}
