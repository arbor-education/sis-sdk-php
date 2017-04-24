<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class TransportationMethod extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const TRANSPORTATION_METHOD_NAME = 'transportationMethodName';

    const ROUTE_NUMBER = 'routeNumber';

    protected $_resourceType = ResourceType::TRANSPORTATION_METHOD;

    /**
     * @param \Arbor\Query\Query $query
     * @return TransportationMethod[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("TransportationMethod");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TransportationMethod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::TRANSPORTATION_METHOD, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getTransportationMethodName()
    {
        return $this->getProperty("transportationMethodName");
    }

    /**
     * @param string $transportationMethodName
     */
    public function setTransportationMethodName($transportationMethodName = null)
    {
        $this->setProperty("transportationMethodName", $transportationMethodName);
    }

    /**
     * @return string
     */
    public function getRouteNumber()
    {
        return $this->getProperty("routeNumber");
    }

    /**
     * @param string $routeNumber
     */
    public function setRouteNumber($routeNumber = null)
    {
        $this->setProperty("routeNumber", $routeNumber);
    }
}
