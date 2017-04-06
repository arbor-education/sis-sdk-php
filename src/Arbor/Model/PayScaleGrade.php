<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\PayScale;

class PayScaleGrade extends ModelBase
{

    const PAY_SCALE = 'payScale';

    const GRADE_NAME = 'gradeName';

    const DATA_ORDER = 'dataOrder';

    protected $_resourceType = ResourceType::PAY_SCALE_GRADE;

    /**
     * @param \Arbor\Query\Query $query
     * @return PayScaleGrade[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("PayScaleGrade");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PayScaleGrade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::PAY_SCALE_GRADE, $id);
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
    public function getGradeName()
    {
        return $this->getProperty("gradeName");
    }

    /**
     * @param string $gradeName
     */
    public function setGradeName($gradeName = null)
    {
        $this->setProperty("gradeName", $gradeName);
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
