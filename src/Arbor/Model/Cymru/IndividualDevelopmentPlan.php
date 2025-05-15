<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class IndividualDevelopmentPlan extends ModelBase
{
    public const END_DATE = 'endDate';

    public const MAINTAINED_BY_CODE = 'maintainedByCode';

    public const SCHEDULED_REVIEW_DATE = 'scheduledReviewDate';

    public const START_DATE = 'startDate';

    public const STUDENT = 'student';

    protected $_resourceType = ResourceType::CYMRU_INDIVIDUAL_DEVELOPMENT_PLAN;

    /**
     * @param Query $query
     * @return IndividualDevelopmentPlan[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_INDIVIDUAL_DEVELOPMENT_PLAN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IndividualDevelopmentPlan
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_INDIVIDUAL_DEVELOPMENT_PLAN, $id);
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
    public function getMaintainedByCode()
    {
        return $this->getProperty('maintainedByCode');
    }

    /**
     * @param string $maintainedByCode
     */
    public function setMaintainedByCode(string $maintainedByCode = null)
    {
        $this->setProperty('maintainedByCode', $maintainedByCode);
    }

    /**
     * @return \DateTime
     */
    public function getScheduledReviewDate()
    {
        return $this->getProperty('scheduledReviewDate');
    }

    /**
     * @param \DateTime $scheduledReviewDate
     */
    public function setScheduledReviewDate(\DateTime $scheduledReviewDate = null)
    {
        $this->setProperty('scheduledReviewDate', $scheduledReviewDate);
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
}
