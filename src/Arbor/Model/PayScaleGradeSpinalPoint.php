<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PayScaleGradeSpinalPoint extends ModelBase
{
    public const PAY_SCALE_GRADE = 'payScaleGrade';

    public const PAY_SCALE_SPINAL_POINT = 'payScaleSpinalPoint';

    protected $_resourceType = ResourceType::PAY_SCALE_GRADE_SPINAL_POINT;

    /**
     * @param Query $query
     * @return PayScaleGradeSpinalPoint[] | Collection
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
     * @return \Arbor\Model\PayScaleGrade
     */
    public function getPayScaleGrade()
    {
        return $this->getProperty('payScaleGrade');
    }

    /**
     * @param \Arbor\Model\PayScaleGrade $payScaleGrade
     */
    public function setPayScaleGrade(\Arbor\Model\PayScaleGrade $payScaleGrade = null)
    {
        $this->setProperty('payScaleGrade', $payScaleGrade);
    }

    /**
     * @return \Arbor\Model\PayScaleSpinalPoint
     */
    public function getPayScaleSpinalPoint()
    {
        return $this->getProperty('payScaleSpinalPoint');
    }

    /**
     * @param \Arbor\Model\PayScaleSpinalPoint $payScaleSpinalPoint
     */
    public function setPayScaleSpinalPoint(\Arbor\Model\PayScaleSpinalPoint $payScaleSpinalPoint = null)
    {
        $this->setProperty('payScaleSpinalPoint', $payScaleSpinalPoint);
    }
}
