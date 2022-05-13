<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PayScaleGradeSpinalPoint extends ModelBase
{
    const PAY_SCALE_GRADE = 'payScaleGrade';

    const PAY_SCALE_SPINAL_POINT = 'payScaleSpinalPoint';

    protected $_resourceType = ResourceType::PAY_SCALE_GRADE_SPINAL_POINT;

    /**
     * @param Query $query
     * @return PayScaleGradeSpinalPoint[] | Collection
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

        $query->setResourceType(ResourceType::PAY_SCALE_GRADE_SPINAL_POINT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PayScaleGradeSpinalPoint
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PAY_SCALE_GRADE_SPINAL_POINT, $id);
    }

    /**
     * @return PayScaleGrade
     */
    public function getPayScaleGrade()
    {
        return $this->getProperty('payScaleGrade');
    }

    /**
     * @param PayScaleGrade $payScaleGrade
     */
    public function setPayScaleGrade(PayScaleGrade $payScaleGrade = null)
    {
        $this->setProperty('payScaleGrade', $payScaleGrade);
    }

    /**
     * @return PayScaleSpinalPoint
     */
    public function getPayScaleSpinalPoint()
    {
        return $this->getProperty('payScaleSpinalPoint');
    }

    /**
     * @param PayScaleSpinalPoint $payScaleSpinalPoint
     */
    public function setPayScaleSpinalPoint(PayScaleSpinalPoint $payScaleSpinalPoint = null)
    {
        $this->setProperty('payScaleSpinalPoint', $payScaleSpinalPoint);
    }
}
