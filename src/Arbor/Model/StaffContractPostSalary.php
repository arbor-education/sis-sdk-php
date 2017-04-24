<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\StaffContractPost;
use \Arbor\Model\PayScale;
use \Arbor\Model\PayScaleGrade;
use \Arbor\Model\PayScaleSpinalPoint;

class StaffContractPostSalary extends ModelBase
{
    const STAFF_CONTRACT_POST = 'staffContractPost';

    const GROSS_SALARY = 'grossSalary';

    const PAY_SCALE = 'payScale';

    const PAY_SCALE_GRADE = 'payScaleGrade';

    const PAY_SCALE_SPINAL_POINT = 'payScaleSpinalPoint';

    const HOURS_PER_WEEK = 'hoursPerWeek';

    const WEEKS_PER_YEAR = 'weeksPerYear';

    const FTE_HOURS_PER_WEEK = 'fteHoursPerWeek';

    const FTE_WEEKS_PER_YEAR = 'fteWeeksPerYear';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const SAFEGUARDED_PERIOD_START_DATE = 'safeguardedPeriodStartDate';

    const SAFEGUARDED_PERIOD_END_DATE = 'safeguardedPeriodEndDate';

    protected $_resourceType = ResourceType::STAFF_CONTRACT_POST_SALARY;

    /**
     * @param \Arbor\Query\Query $query
     * @return StaffContractPostSalary[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StaffContractPostSalary");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StaffContractPostSalary
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STAFF_CONTRACT_POST_SALARY, $id);
    }

    /**
     * @return StaffContractPost
     */
    public function getStaffContractPost()
    {
        return $this->getProperty("staffContractPost");
    }

    /**
     * @param StaffContractPost $staffContractPost
     */
    public function setStaffContractPost(StaffContractPost $staffContractPost = null)
    {
        $this->setProperty("staffContractPost", $staffContractPost);
    }

    /**
     * @return string
     */
    public function getGrossSalary()
    {
        return $this->getProperty("grossSalary");
    }

    /**
     * @param string $grossSalary
     */
    public function setGrossSalary($grossSalary = null)
    {
        $this->setProperty("grossSalary", $grossSalary);
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

    /**
     * @return string
     */
    public function getHoursPerWeek()
    {
        return $this->getProperty("hoursPerWeek");
    }

    /**
     * @param string $hoursPerWeek
     */
    public function setHoursPerWeek($hoursPerWeek = null)
    {
        $this->setProperty("hoursPerWeek", $hoursPerWeek);
    }

    /**
     * @return float
     */
    public function getWeeksPerYear()
    {
        return $this->getProperty("weeksPerYear");
    }

    /**
     * @param float $weeksPerYear
     */
    public function setWeeksPerYear($weeksPerYear = null)
    {
        $this->setProperty("weeksPerYear", $weeksPerYear);
    }

    /**
     * @return string
     */
    public function getFteHoursPerWeek()
    {
        return $this->getProperty("fteHoursPerWeek");
    }

    /**
     * @param string $fteHoursPerWeek
     */
    public function setFteHoursPerWeek($fteHoursPerWeek = null)
    {
        $this->setProperty("fteHoursPerWeek", $fteHoursPerWeek);
    }

    /**
     * @return float
     */
    public function getFteWeeksPerYear()
    {
        return $this->getProperty("fteWeeksPerYear");
    }

    /**
     * @param float $fteWeeksPerYear
     */
    public function setFteWeeksPerYear($fteWeeksPerYear = null)
    {
        $this->setProperty("fteWeeksPerYear", $fteWeeksPerYear);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return \DateTime
     */
    public function getSafeguardedPeriodStartDate()
    {
        return $this->getProperty("safeguardedPeriodStartDate");
    }

    /**
     * @param \DateTime $safeguardedPeriodStartDate
     */
    public function setSafeguardedPeriodStartDate(\DateTime $safeguardedPeriodStartDate = null)
    {
        $this->setProperty("safeguardedPeriodStartDate", $safeguardedPeriodStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getSafeguardedPeriodEndDate()
    {
        return $this->getProperty("safeguardedPeriodEndDate");
    }

    /**
     * @param \DateTime $safeguardedPeriodEndDate
     */
    public function setSafeguardedPeriodEndDate(\DateTime $safeguardedPeriodEndDate = null)
    {
        $this->setProperty("safeguardedPeriodEndDate", $safeguardedPeriodEndDate);
    }
}
