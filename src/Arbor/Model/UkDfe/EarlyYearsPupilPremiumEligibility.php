<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EarlyYearsPupilPremiumEligibility extends ModelBase
{
    public const STUDENT = 'student';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const ELIGIBLE_FOR_ECONOMIC_REASONS = 'eligibleForEconomicReasons';

    public const ELIGIBLE_FOR_OTHER_REASONS = 'eligibleForOtherReasons';

    protected $_resourceType = ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_ELIGIBILITY;

    /**
     * @param Query $query
     * @return EarlyYearsPupilPremiumEligibility[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_ELIGIBILITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EarlyYearsPupilPremiumEligibility
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_ELIGIBILITY, $id);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
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
     * @return bool
     */
    public function getEligibleForEconomicReasons()
    {
        return $this->getProperty('eligibleForEconomicReasons');
    }

    /**
     * @param bool $eligibleForEconomicReasons
     */
    public function setEligibleForEconomicReasons(bool $eligibleForEconomicReasons = null)
    {
        $this->setProperty('eligibleForEconomicReasons', $eligibleForEconomicReasons);
    }

    /**
     * @return bool
     */
    public function getEligibleForOtherReasons()
    {
        return $this->getProperty('eligibleForOtherReasons');
    }

    /**
     * @param bool $eligibleForOtherReasons
     */
    public function setEligibleForOtherReasons(bool $eligibleForOtherReasons = null)
    {
        $this->setProperty('eligibleForOtherReasons', $eligibleForOtherReasons);
    }
}
