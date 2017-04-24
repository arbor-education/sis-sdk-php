<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\User;

class PhantomModel extends ModelBase
{
    const ENTITY_TYPE = 'entityType';

    const USER = 'user';

    const MODEL_CREATED_DATETIME = 'modelCreatedDatetime';

    protected $_resourceType = ResourceType::PHANTOM_MODEL;

    /**
     * @param \Arbor\Query\Query $query
     * @return PhantomModel[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PhantomModel");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PhantomModel
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PHANTOM_MODEL, $id);
    }

    /**
     * @return int
     */
    public function getEntityType()
    {
        return $this->getProperty("entityType");
    }

    /**
     * @param int $entityType
     */
    public function setEntityType($entityType = null)
    {
        $this->setProperty("entityType", $entityType);
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->getProperty("user");
    }

    /**
     * @param User $user
     */
    public function setUser(User $user = null)
    {
        $this->setProperty("user", $user);
    }

    /**
     * @return \DateTime
     */
    public function getModelCreatedDatetime()
    {
        return $this->getProperty("modelCreatedDatetime");
    }

    /**
     * @param \DateTime $modelCreatedDatetime
     */
    public function setModelCreatedDatetime(\DateTime $modelCreatedDatetime = null)
    {
        $this->setProperty("modelCreatedDatetime", $modelCreatedDatetime);
    }
}
