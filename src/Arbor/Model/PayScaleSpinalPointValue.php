<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PayScaleSpinalPointValue extends ModelBase
{
    public const PAY_SCALE_SPINAL_POINT = 'payScaleSpinalPoint';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const GROSS_SALARY = 'grossSalary';

    protected $_resourceType = ResourceType::PAY_SCALE_SPINAL_POINT_VALUE;

    /**
     * @param Query $query
     * @return PayScaleSpinalPointValue[] | Collection
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

        $query->setResourceType(ResourceType::PAY_SCALE_SPINAL_POINT_VALUE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PayScaleSpinalPointValue
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PAY_SCALE_SPINAL_POINT_VALUE, $id);
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

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getGrossSalary()
    {
        return $this->getProperty('grossSalary');
    }

    /**
     * @param string $grossSalary
     */
    public function setGrossSalary(string $grossSalary = null)
    {
        $this->setProperty('grossSalary', $grossSalary);
    }
}
