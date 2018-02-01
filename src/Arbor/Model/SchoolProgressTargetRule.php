<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SchoolProgressTargetRule extends ModelBase
{

    const RULE_NAME = 'ruleName';

    const ASSESSMENT = 'assessment';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const CURRICULUM_GRADE = 'curriculumGrade';

    const TERM_NUMBER = 'termNumber';

    const PROGRESS_AMOUNT = 'progressAmount';

    const PROGRESS_AMOUNT_UNIT = 'progressAmountUnit';

    const PROGRESS_REFERENCE_MARK_TYPE = 'progressReferenceMarkType';

    const ACADEMIC_YEARS_OFFSET = 'academicYearsOffset';

    protected $_resourceType = ResourceType::SCHOOL_PROGRESS_TARGET_RULE;

    /**
     * @param Query $query
     * @return SchoolProgressTargetRule[] | Collection
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

        $query->setResourceType(ResourceType::SCHOOL_PROGRESS_TARGET_RULE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolProgressTargetRule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SCHOOL_PROGRESS_TARGET_RULE, $id);
    }

    /**
     * @return string
     */
    public function getRuleName()
    {
        return $this->getProperty('ruleName');
    }

    /**
     * @param string $ruleName
     */
    public function setRuleName($ruleName = null)
    {
        $this->setProperty('ruleName', $ruleName);
    }

    /**
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
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
     * @return int
     */
    public function getTermNumber()
    {
        return $this->getProperty('termNumber');
    }

    /**
     * @param int $termNumber
     */
    public function setTermNumber($termNumber = null)
    {
        $this->setProperty('termNumber', $termNumber);
    }

    /**
     * @return float
     */
    public function getProgressAmount()
    {
        return $this->getProperty('progressAmount');
    }

    /**
     * @param float $progressAmount
     */
    public function setProgressAmount($progressAmount = null)
    {
        $this->setProperty('progressAmount', $progressAmount);
    }

    /**
     * @return string
     */
    public function getProgressAmountUnit()
    {
        return $this->getProperty('progressAmountUnit');
    }

    /**
     * @param string $progressAmountUnit
     */
    public function setProgressAmountUnit($progressAmountUnit = null)
    {
        $this->setProperty('progressAmountUnit', $progressAmountUnit);
    }

    /**
     * @return string
     */
    public function getProgressReferenceMarkType()
    {
        return $this->getProperty('progressReferenceMarkType');
    }

    /**
     * @param string $progressReferenceMarkType
     */
    public function setProgressReferenceMarkType($progressReferenceMarkType = null)
    {
        $this->setProperty('progressReferenceMarkType', $progressReferenceMarkType);
    }

    /**
     * @return int
     */
    public function getAcademicYearsOffset()
    {
        return $this->getProperty('academicYearsOffset');
    }

    /**
     * @param int $academicYearsOffset
     */
    public function setAcademicYearsOffset($academicYearsOffset = null)
    {
        $this->setProperty('academicYearsOffset', $academicYearsOffset);
    }


}
