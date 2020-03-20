<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;
use Arbor\Model\CurriculumGrade;

class PupilPremiumRecipient extends ModelBase
{

    const STUDENT = 'student';

    const CURRICULUM_GRADE = 'curriculumGrade';

    const FTE = 'fte';

    const FTE_CASH_AMOUNT = 'fteCashAmount';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT;

    /**
     * @param Query $query
     * @return PupilPremiumRecipient[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PupilPremiumRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT, $id);
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
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return CurriculumGrade
     */
    public function getCurriculumGrade()
    {
        return $this->getProperty('curriculumGrade');
    }

    /**
     * @param CurriculumGrade $curriculumGrade
     */
    public function setCurriculumGrade(CurriculumGrade $curriculumGrade = null)
    {
        $this->setProperty('curriculumGrade', $curriculumGrade);
    }

    /**
     * @return float
     */
    public function getFte()
    {
        return $this->getProperty('fte');
    }

    /**
     * @param float $fte
     */
    public function setFte($fte = null)
    {
        $this->setProperty('fte', $fte);
    }

    /**
     * @return string
     */
    public function getFteCashAmount()
    {
        return $this->getProperty('fteCashAmount');
    }

    /**
     * @param string $fteCashAmount
     */
    public function setFteCashAmount($fteCashAmount = null)
    {
        $this->setProperty('fteCashAmount', $fteCashAmount);
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


}
