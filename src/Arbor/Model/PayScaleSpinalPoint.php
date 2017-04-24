<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\PayScale;

class PayScaleSpinalPoint extends ModelBase
{
    const PAY_SCALE = 'payScale';

    const SPINAL_POINT_CODE = 'spinalPointCode';

    const SPINAL_POINT_NAME = 'spinalPointName';

    const DATA_ORDER = 'dataOrder';

    protected $_resourceType = ResourceType::PAY_SCALE_SPINAL_POINT;

    /**
     * @param \Arbor\Query\Query $query
     * @return PayScaleSpinalPoint[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PayScaleSpinalPoint");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PayScaleSpinalPoint
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PAY_SCALE_SPINAL_POINT, $id);
    }

    /**
     * @return PayScale
     */
    public function getPayScale()
    {
        return $this->getProperty("payScale");
    }

    /**
     * @param PayScale $payScale
     */
    public function setPayScale(PayScale $payScale = null)
    {
        $this->setProperty("payScale", $payScale);
    }

    /**
     * @return string
     */
    public function getSpinalPointCode()
    {
        return $this->getProperty("spinalPointCode");
    }

    /**
     * @param string $spinalPointCode
     */
    public function setSpinalPointCode($spinalPointCode = null)
    {
        $this->setProperty("spinalPointCode", $spinalPointCode);
    }

    /**
     * @return string
     */
    public function getSpinalPointName()
    {
        return $this->getProperty("spinalPointName");
    }

    /**
     * @param string $spinalPointName
     */
    public function setSpinalPointName($spinalPointName = null)
    {
        $this->setProperty("spinalPointName", $spinalPointName);
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
}
