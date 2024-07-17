<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmailPermittedSender extends ModelBase
{
    public const ACTION_TAKER = 'actionTaker';

    public const SENDER = 'sender';

    public const ALLOW = 'allow';

    protected $_resourceType = ResourceType::EMAIL_PERMITTED_SENDER;

    /**
     * @param Query $query
     * @return EmailPermittedSender[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_PERMITTED_SENDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailPermittedSender
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_PERMITTED_SENDER, $id);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getActionTaker()
    {
        return $this->getProperty('actionTaker');
    }

    /**
     * @param \Arbor\Model\Staff $actionTaker
     */
    public function setActionTaker(\Arbor\Model\Staff $actionTaker = null)
    {
        $this->setProperty('actionTaker', $actionTaker);
    }

    /**
     * @return ModelBase
     */
    public function getSender()
    {
        return $this->getProperty('sender');
    }

    /**
     * @param ModelBase $sender
     */
    public function setSender(\ModelBase $sender = null)
    {
        $this->setProperty('sender', $sender);
    }

    /**
     * @return bool
     */
    public function getAllow()
    {
        return $this->getProperty('allow');
    }

    /**
     * @param bool $allow
     */
    public function setAllow(bool $allow = null)
    {
        $this->setProperty('allow', $allow);
    }
}
