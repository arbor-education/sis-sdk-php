<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PhantomModel extends ModelBase
{
    public const ENTITY_TYPE = 'entityType';

    public const USER = 'user';

    public const MODEL_CREATED_DATETIME = 'modelCreatedDatetime';

    protected $_resourceType = ResourceType::PHANTOM_MODEL;

    /**
     * @param Query $query
     * @return PhantomModel[] | Collection
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

        $query->setResourceType(ResourceType::PHANTOM_MODEL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PhantomModel
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PHANTOM_MODEL, $id);
    }

    /**
     * @return int
     */
    public function getEntityType()
    {
        return $this->getProperty('entityType');
    }

    /**
     * @param int $entityType
     */
    public function setEntityType(int $entityType = null)
    {
        $this->setProperty('entityType', $entityType);
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
     * @return \DateTime
     */
    public function getModelCreatedDatetime()
    {
        return $this->getProperty('modelCreatedDatetime');
    }

    /**
     * @param \DateTime $modelCreatedDatetime
     */
    public function setModelCreatedDatetime(\DateTime $modelCreatedDatetime = null)
    {
        $this->setProperty('modelCreatedDatetime', $modelCreatedDatetime);
    }
}
