<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PupilPremiumRecipient extends ModelBase
{
    public const STUDENT = 'student';

    public const CURRICULUM_GRADE = 'curriculumGrade';

    public const FTE = 'fte';

    public const FTE_CASH_AMOUNT = 'fteCashAmount';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const LAST_FSM = 'lastFsm';

    protected $_resourceType = ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT;

    /**
     * @param Query $query
     * @return PupilPremiumRecipient[] | Collection
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
     * @return \Arbor\Model\CurriculumGrade
     */
    public function getCurriculumGrade()
    {
        return $this->getProperty('curriculumGrade');
    }

    /**
     * @param \Arbor\Model\CurriculumGrade $curriculumGrade
     */
    public function setCurriculumGrade(\Arbor\Model\CurriculumGrade $curriculumGrade = null)
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
    public function setFte(float $fte = null)
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
    public function setFteCashAmount(string $fteCashAmount = null)
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

    /**
     * @return string
     */
    public function getLastFsm()
    {
        return $this->getProperty('lastFsm');
    }

    /**
     * @param string $lastFsm
     */
    public function setLastFsm(string $lastFsm = null)
    {
        $this->setProperty('lastFsm', $lastFsm);
    }
}
