<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Demographic;

class InverseDemographic extends ModelBase
{
    const DEMOGRAPHIC = 'demographic';

    protected $_resourceType = ResourceType::INVERSE_DEMOGRAPHIC;

    /**
     * @param \Arbor\Query\Query $query
     * @return InverseDemographic[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("InverseDemographic");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return InverseDemographic
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::INVERSE_DEMOGRAPHIC, $id);
    }

    /**
     * @return Demographic
     */
    public function getDemographic()
    {
        return $this->getProperty("demographic");
    }

    /**
     * @param Demographic $demographic
     */
    public function setDemographic(Demographic $demographic = null)
    {
        $this->setProperty("demographic", $demographic);
    }
}
