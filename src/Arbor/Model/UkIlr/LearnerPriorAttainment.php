<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;

class LearnerPriorAttainment extends \ModelBase
{
    public const STUDENT = 'student';

    public const PRIOR_LEVEL = 'priorLevel';

    public const EFFECTIVE_DATE = 'effectiveDate';

    protected $_resourceType = ResourceType::UK_ILR_LEARNER_PRIOR_ATTAINMENT;

    /**
     * @param Query $query
     * @return LearnerPriorAttainment[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::UK_ILR_LEARNER_PRIOR_ATTAINMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return LearnerPriorAttainment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_LEARNER_PRIOR_ATTAINMENT, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return string
     */
    public function getPriorLevel()
    {
        return $this->getProperty('priorLevel');
    }

    /**
     * @param string $priorLevel
     */
    public function setPriorLevel(string $priorLevel = null)
    {
        $this->setProperty('priorLevel', $priorLevel);
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
}
