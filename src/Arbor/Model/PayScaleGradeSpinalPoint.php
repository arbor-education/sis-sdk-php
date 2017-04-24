<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\PayScaleGrade;
use \Arbor\Model\PayScaleSpinalPoint;

class PayScaleGradeSpinalPoint extends ModelBase
{
    const PAY_SCALE_GRADE = 'payScaleGrade';

    const PAY_SCALE_SPINAL_POINT = 'payScaleSpinalPoint';

    protected $_resourceType = ResourceType::PAY_SCALE_GRADE_SPINAL_POINT;

    /**
     * @param \Arbor\Query\Query $query
     * @return PayScaleGradeSpinalPoint[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PayScaleGradeSpinalPoint");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PayScaleGradeSpinalPoint
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PAY_SCALE_GRADE_SPINAL_POINT, $id);
    }

    /**
     * @return PayScaleGrade
     */
    public function getPayScaleGrade()
    {
        return $this->getProperty("payScaleGrade");
    }

    /**
     * @param PayScaleGrade $payScaleGrade
     */
    public function setPayScaleGrade(PayScaleGrade $payScaleGrade = null)
    {
        $this->setProperty("payScaleGrade", $payScaleGrade);
    }

    /**
     * @return PayScaleSpinalPoint
     */
    public function getPayScaleSpinalPoint()
    {
        return $this->getProperty("payScaleSpinalPoint");
    }

    /**
     * @param PayScaleSpinalPoint $payScaleSpinalPoint
     */
    public function setPayScaleSpinalPoint(PayScaleSpinalPoint $payScaleSpinalPoint = null)
    {
        $this->setProperty("payScaleSpinalPoint", $payScaleSpinalPoint);
    }
}
