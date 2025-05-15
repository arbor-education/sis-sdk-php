<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TransportationMethod extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const TRANSPORTATION_METHOD_NAME = 'transportationMethodName';

    public const ROUTE_NUMBER = 'routeNumber';

    public const HIDDEN_DATETIME = 'hiddenDatetime';

    protected $_resourceType = ResourceType::TRANSPORTATION_METHOD;

    /**
     * @param Query $query
     * @return TransportationMethod[] | Collection
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

        $query->setResourceType(ResourceType::TRANSPORTATION_METHOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TransportationMethod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TRANSPORTATION_METHOD, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getTransportationMethodName()
    {
        return $this->getProperty('transportationMethodName');
    }

    /**
     * @param string $transportationMethodName
     */
    public function setTransportationMethodName(string $transportationMethodName = null)
    {
        $this->setProperty('transportationMethodName', $transportationMethodName);
    }

    /**
     * @return string
     */
    public function getRouteNumber()
    {
        return $this->getProperty('routeNumber');
    }

    /**
     * @param string $routeNumber
     */
    public function setRouteNumber(string $routeNumber = null)
    {
        $this->setProperty('routeNumber', $routeNumber);
    }

    /**
     * @return \DateTime
     */
    public function getHiddenDatetime()
    {
        return $this->getProperty('hiddenDatetime');
    }

    /**
     * @param \DateTime $hiddenDatetime
     */
    public function setHiddenDatetime(\DateTime $hiddenDatetime = null)
    {
        $this->setProperty('hiddenDatetime', $hiddenDatetime);
    }
}
