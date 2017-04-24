<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Programme extends ModelBase
{
    const IS_TRAINEESHIP = 'isTraineeship';

    protected $_resourceType = ResourceType::UK_DFE_PROGRAMME;

    /**
     * @param \Arbor\Query\Query $query
     * @return Programme[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_Programme");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Programme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_PROGRAMME, $id);
    }

    /**
     * @return bool
     */
    public function getIsTraineeship()
    {
        return $this->getProperty("isTraineeship");
    }

    /**
     * @param bool $isTraineeship
     */
    public function setIsTraineeship($isTraineeship = null)
    {
        $this->setProperty("isTraineeship", $isTraineeship);
    }
}
