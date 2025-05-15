<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SchoolProgressTargetRule extends ModelBase
{
    public const RULE_NAME = 'ruleName';

    public const ASSESSMENT = 'assessment';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const CURRICULUM_GRADE = 'curriculumGrade';

    public const TERM_NUMBER = 'termNumber';

    public const PROGRESS_AMOUNT = 'progressAmount';

    public const PROGRESS_AMOUNT_UNIT = 'progressAmountUnit';

    public const PROGRESS_REFERENCE_MARK_TYPE = 'progressReferenceMarkType';

    public const ACADEMIC_YEARS_OFFSET = 'academicYearsOffset';

    public const HAS_SAME_ATTAINMENT_TARGET_FOR_EACH_PERIOD = 'hasSameAttainmentTargetForEachPeriod';

    protected $_resourceType = ResourceType::SCHOOL_PROGRESS_TARGET_RULE;

    /**
     * @param Query $query
     * @return SchoolProgressTargetRule[] | Collection
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
    public function setRuleName(string $ruleName = null)
    {
        $this->setProperty('ruleName', $ruleName);
    }

    /**
     * @return \Arbor\Model\Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param \Arbor\Model\Assessment $assessment
     */
    public function setAssessment(\Arbor\Model\Assessment $assessment = null)
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
     * @return int
     */
    public function getTermNumber()
    {
        return $this->getProperty('termNumber');
    }

    /**
     * @param int $termNumber
     */
    public function setTermNumber(int $termNumber = null)
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
    public function setProgressAmount(float $progressAmount = null)
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
    public function setProgressAmountUnit(string $progressAmountUnit = null)
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
    public function setProgressReferenceMarkType(string $progressReferenceMarkType = null)
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
    public function setAcademicYearsOffset(int $academicYearsOffset = null)
    {
        $this->setProperty('academicYearsOffset', $academicYearsOffset);
    }

    /**
     * @return bool
     */
    public function getHasSameAttainmentTargetForEachPeriod()
    {
        return $this->getProperty('hasSameAttainmentTargetForEachPeriod');
    }

    /**
     * @param bool $hasSameAttainmentTargetForEachPeriod
     */
    public function setHasSameAttainmentTargetForEachPeriod(bool $hasSameAttainmentTargetForEachPeriod = null)
    {
        $this->setProperty('hasSameAttainmentTargetForEachPeriod', $hasSameAttainmentTargetForEachPeriod);
    }
}
