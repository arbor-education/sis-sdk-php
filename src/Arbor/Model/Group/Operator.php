<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Operator extends ModelBase
{

    const NAME = 'name';

    const ARBOR_IDENTIFIER = 'arborIdentifier';

    protected $_resourceType = ResourceType::GROUP_OPERATOR;

    /**
     * @param \Arbor\Query\Query $query
     * @return Operator[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Group_Operator");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Operator
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::GROUP_OPERATOR, $id);
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

    /**
     * @return string
     */
    public function getArborIdentifier()
    {
        return $this->getProperty("arborIdentifier");
    }

    /**
     * @param string $arborIdentifier
     */
    public function setArborIdentifier($arborIdentifier = null)
    {
        $this->setProperty("arborIdentifier", $arborIdentifier);
    }


}
