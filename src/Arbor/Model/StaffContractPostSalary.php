<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffContractPostSalary extends ModelBase
{
    public const STAFF_CONTRACT_POST = 'staffContractPost';

    public const GROSS_SALARY = 'grossSalary';

    public const PAY_SCALE = 'payScale';

    public const PAY_SCALE_GRADE = 'payScaleGrade';

    public const PAY_SCALE_SPINAL_POINT = 'payScaleSpinalPoint';

    public const HOURS_PER_WEEK = 'hoursPerWeek';

    public const WEEKS_PER_YEAR = 'weeksPerYear';

    public const FTE_HOURS_PER_WEEK = 'fteHoursPerWeek';

    public const FTE_WEEKS_PER_YEAR = 'fteWeeksPerYear';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const SAFEGUARDED_PERIOD_START_DATE = 'safeguardedPeriodStartDate';

    public const SAFEGUARDED_PERIOD_END_DATE = 'safeguardedPeriodEndDate';

    protected $_resourceType = ResourceType::STAFF_CONTRACT_POST_SALARY;

    /**
     * @param Query $query
     * @return StaffContractPostSalary[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_CONTRACT_POST_SALARY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffContractPostSalary
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_CONTRACT_POST_SALARY, $id);
    }

    /**
     * @return \Arbor\Model\StaffContractPost
     */
    public function getStaffContractPost()
    {
        return $this->getProperty('staffContractPost');
    }

    /**
     * @param \Arbor\Model\StaffContractPost $staffContractPost
     */
    public function setStaffContractPost(\Arbor\Model\StaffContractPost $staffContractPost = null)
    {
        $this->setProperty('staffContractPost', $staffContractPost);
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

    /**
     * @return string
     */
    public function getHoursPerWeek()
    {
        return $this->getProperty('hoursPerWeek');
    }

    /**
     * @param string $hoursPerWeek
     */
    public function setHoursPerWeek(string $hoursPerWeek = null)
    {
        $this->setProperty('hoursPerWeek', $hoursPerWeek);
    }

    /**
     * @return float
     */
    public function getWeeksPerYear()
    {
        return $this->getProperty('weeksPerYear');
    }

    /**
     * @param float $weeksPerYear
     */
    public function setWeeksPerYear(float $weeksPerYear = null)
    {
        $this->setProperty('weeksPerYear', $weeksPerYear);
    }

    /**
     * @return string
     */
    public function getFteHoursPerWeek()
    {
        return $this->getProperty('fteHoursPerWeek');
    }

    /**
     * @param string $fteHoursPerWeek
     */
    public function setFteHoursPerWeek(string $fteHoursPerWeek = null)
    {
        $this->setProperty('fteHoursPerWeek', $fteHoursPerWeek);
    }

    /**
     * @return float
     */
    public function getFteWeeksPerYear()
    {
        return $this->getProperty('fteWeeksPerYear');
    }

    /**
     * @param float $fteWeeksPerYear
     */
    public function setFteWeeksPerYear(float $fteWeeksPerYear = null)
    {
        $this->setProperty('fteWeeksPerYear', $fteWeeksPerYear);
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
     * @return \DateTime
     */
    public function getSafeguardedPeriodStartDate()
    {
        return $this->getProperty('safeguardedPeriodStartDate');
    }

    /**
     * @param \DateTime $safeguardedPeriodStartDate
     */
    public function setSafeguardedPeriodStartDate(\DateTime $safeguardedPeriodStartDate = null)
    {
        $this->setProperty('safeguardedPeriodStartDate', $safeguardedPeriodStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getSafeguardedPeriodEndDate()
    {
        return $this->getProperty('safeguardedPeriodEndDate');
    }

    /**
     * @param \DateTime $safeguardedPeriodEndDate
     */
    public function setSafeguardedPeriodEndDate(\DateTime $safeguardedPeriodEndDate = null)
    {
        $this->setProperty('safeguardedPeriodEndDate', $safeguardedPeriodEndDate);
    }
}
