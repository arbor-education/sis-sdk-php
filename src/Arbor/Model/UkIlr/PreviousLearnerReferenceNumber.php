<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PreviousLearnerReferenceNumber extends ModelBase
{
    public const STUDENT = 'student';

    public const PREVIOUS_LEARNER_REFERENCE_NUMBER = 'previousLearnerReferenceNumber';

    public const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::UK_ILR_PREVIOUS_LEARNER_REFERENCE_NUMBER;

    /**
     * @param Query $query
     * @return PreviousLearnerReferenceNumber[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_PREVIOUS_LEARNER_REFERENCE_NUMBER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PreviousLearnerReferenceNumber
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_PREVIOUS_LEARNER_REFERENCE_NUMBER, $id);
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
     * @return string
     */
    public function getPreviousLearnerReferenceNumber()
    {
        return $this->getProperty('previousLearnerReferenceNumber');
    }

    /**
     * @param string $previousLearnerReferenceNumber
     */
    public function setPreviousLearnerReferenceNumber(string $previousLearnerReferenceNumber = null)
    {
        $this->setProperty('previousLearnerReferenceNumber', $previousLearnerReferenceNumber);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }
}
