<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Region extends ModelBase
{
    const NAME = 'name';

    protected $_resourceType = ResourceType::GROUP_REGION;

    /**
     * @param \Arbor\Query\Query $query
     * @return Region[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Group_Region");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Region
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GROUP_REGION, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("name");
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty("name", $name);
    }
}
