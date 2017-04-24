<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Email extends ModelBase
{
    const CONTEXT = 'context';

    protected $_resourceType = ResourceType::GROUP_EMAIL;

    /**
     * @param \Arbor\Query\Query $query
     * @return Email[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Group_Email");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Email
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GROUP_EMAIL, $id);
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->getProperty("context");
    }

    /**
     * @param string $context
     */
    public function setContext($context = null)
    {
        $this->setProperty("context", $context);
    }
}
