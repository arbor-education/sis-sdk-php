<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;

class EducationPlan extends ModelBase
{
    const STUDENT = 'student';

    const EDUCATION_PLAN_TYPE = 'educationPlanType';

    const SUMMARY = 'summary';

    const CONTENT = 'content';

    const START_DATE = 'startDate';

    const SCHEDULED_REVIEW_DATE = 'scheduledReviewDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::EDUCATION_PLAN;

    /**
     * @param \Arbor\Query\Query $query
     * @return EducationPlan[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("EducationPlan");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EducationPlan
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::EDUCATION_PLAN, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return string
     */
    public function getEducationPlanType()
    {
        return $this->getProperty("educationPlanType");
    }

    /**
     * @param string $educationPlanType
     */
    public function setEducationPlanType($educationPlanType = null)
    {
        $this->setProperty("educationPlanType", $educationPlanType);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty("summary");
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary = null)
    {
        $this->setProperty("summary", $summary);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getProperty("content");
    }

    /**
     * @param string $content
     */
    public function setContent($content = null)
    {
        $this->setProperty("content", $content);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getScheduledReviewDate()
    {
        return $this->getProperty("scheduledReviewDate");
    }

    /**
     * @param \DateTime $scheduledReviewDate
     */
    public function setScheduledReviewDate(\DateTime $scheduledReviewDate = null)
    {
        $this->setProperty("scheduledReviewDate", $scheduledReviewDate);
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
}
