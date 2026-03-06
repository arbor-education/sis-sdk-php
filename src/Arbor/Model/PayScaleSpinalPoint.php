<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PayScaleSpinalPoint extends ModelBase
{
    public const PAY_SCALE = 'payScale';

    public const SPINAL_POINT_CODE = 'spinalPointCode';

    public const SPINAL_POINT_NAME = 'spinalPointName';

    public const DATA_ORDER = 'dataOrder';

    protected $_resourceType = ResourceType::PAY_SCALE_SPINAL_POINT;

    /**
     * @param Query $query
     * @return PayScaleSpinalPoint[] | Collection
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

        $query->setResourceType(ResourceType::PAY_SCALE_SPINAL_POINT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PayScaleSpinalPoint
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PAY_SCALE_SPINAL_POINT, $id);
    }

    /**
     * @return \Arbor\Model\PayScale
     */
    public function getPayScale()
    {
        return $this->getProperty('payScale');
    }

    /**
     * @param \Arbor\Model\PayScale $payScale
     */
    public function setPayScale(\Arbor\Model\PayScale $payScale = null)
    {
        $this->setProperty('payScale', $payScale);
    }

    /**
     * @return string
     */
    public function getSpinalPointCode()
    {
        return $this->getProperty('spinalPointCode');
    }

    /**
     * @param string $spinalPointCode
     */
    public function setSpinalPointCode(string $spinalPointCode = null)
    {
        $this->setProperty('spinalPointCode', $spinalPointCode);
    }

    /**
     * @return string
     */
    public function getSpinalPointName()
    {
        return $this->getProperty('spinalPointName');
    }

    /**
     * @param string $spinalPointName
     */
    public function setSpinalPointName(string $spinalPointName = null)
    {
        $this->setProperty('spinalPointName', $spinalPointName);
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
}
