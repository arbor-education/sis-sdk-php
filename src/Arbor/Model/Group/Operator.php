<?php
namespace Arbor\Model\Group;

use Arbor\Resource\Group\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Operator extends ModelBase
{

    const NAME = 'name';

    const ARBOR_IDENTIFIER = 'arborIdentifier';

    protected $_resourceType = ResourceType::GROUP_OPERATOR;

    /**
     * @param Query $query
     * @return Operator[] | Collection
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

        $query->setResourceType(ResourceType::GROUP_OPERATOR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Operator
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GROUP_OPERATOR, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getArborIdentifier()
    {
        return $this->getProperty('arborIdentifier');
    }

    /**
     * @param string $arborIdentifier
     */
    public function setArborIdentifier($arborIdentifier = null)
    {
        $this->setProperty('arborIdentifier', $arborIdentifier);
    }


}
