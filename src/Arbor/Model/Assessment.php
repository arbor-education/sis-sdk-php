<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Subject;
use \Arbor\Model\GradePointScale;

class Assessment extends ModelBase
{

    const ASSESSMENT_NAME = 'assessmentName';

    const ASSESSMENT_SHORT_NAME = 'assessmentShortName';

    const PARENT_ASSESSMENT = 'parentAssessment';

    const ASSESSMENT_CODE = 'assessmentCode';

    const STUDENT_PROGRESS_BASELINE_CALCULATOR_CLASS_NAME = 'studentProgressBaselineCalculatorClassName';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const MARK_TYPE = 'markType';

    const SUBJECT = 'subject';

    const GRADE_POINT_SCALE = 'gradePointScale';

    const MARK_MIN_VALUE = 'markMinValue';

    const MARK_MAX_VALUE = 'markMaxValue';

    const ORDER = 'order';

    protected $_resourceType = ResourceType::ASSESSMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return Assessment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Assessment");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Assessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ASSESSMENT, $id);
    }

    /**
     * @return string
     */
    public function getAssessmentName()
    {
        return $this->getProperty("assessmentName");
    }

    /**
     * @param string $assessmentName
     */
    public function setAssessmentName($assessmentName = null)
    {
        $this->setProperty("assessmentName", $assessmentName);
    }

    /**
     * @return string
     */
    public function getAssessmentShortName()
    {
        return $this->getProperty("assessmentShortName");
    }

    /**
     * @param string $assessmentShortName
     */
    public function setAssessmentShortName($assessmentShortName = null)
    {
        $this->setProperty("assessmentShortName", $assessmentShortName);
    }

    /**
     * @return Assessment
     */
    public function getParentAssessment()
    {
        return $this->getProperty("parentAssessment");
    }

    /**
     * @param Assessment $parentAssessment
     */
    public function setParentAssessment(Assessment $parentAssessment = null)
    {
        $this->setProperty("parentAssessment", $parentAssessment);
    }

    /**
     * @return string
     */
    public function getAssessmentCode()
    {
        return $this->getProperty("assessmentCode");
    }

    /**
     * @param string $assessmentCode
     */
    public function setAssessmentCode($assessmentCode = null)
    {
        $this->setProperty("assessmentCode", $assessmentCode);
    }

    /**
     * @return string
     */
    public function getStudentProgressBaselineCalculatorClassName()
    {
        return $this->getProperty("studentProgressBaselineCalculatorClassName");
    }

    /**
     * @param string $studentProgressBaselineCalculatorClassName
     */
    public function setStudentProgressBaselineCalculatorClassName($studentProgressBaselineCalculatorClassName = null)
    {
        $this->setProperty("studentProgressBaselineCalculatorClassName", $studentProgressBaselineCalculatorClassName);
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
     * @return string
     */
    public function getMarkType()
    {
        return $this->getProperty("markType");
    }

    /**
     * @param string $markType
     */
    public function setMarkType($markType = null)
    {
        $this->setProperty("markType", $markType);
    }

    /**
     * @return Subject
     */
    public function getSubject()
    {
        return $this->getProperty("subject");
    }

    /**
     * @param Subject $subject
     */
    public function setSubject(Subject $subject = null)
    {
        $this->setProperty("subject", $subject);
    }

    /**
     * @return GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty("gradePointScale");
    }

    /**
     * @param GradePointScale $gradePointScale
     */
    public function setGradePointScale(GradePointScale $gradePointScale = null)
    {
        $this->setProperty("gradePointScale", $gradePointScale);
    }

    /**
     * @return float
     */
    public function getMarkMinValue()
    {
        return $this->getProperty("markMinValue");
    }

    /**
     * @param float $markMinValue
     */
    public function setMarkMinValue($markMinValue = null)
    {
        $this->setProperty("markMinValue", $markMinValue);
    }

    /**
     * @return float
     */
    public function getMarkMaxValue()
    {
        return $this->getProperty("markMaxValue");
    }

    /**
     * @param float $markMaxValue
     */
    public function setMarkMaxValue($markMaxValue = null)
    {
        $this->setProperty("markMaxValue", $markMaxValue);
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->getProperty("order");
    }

    /**
     * @param int $order
     */
    public function setOrder($order = null)
    {
        $this->setProperty("order", $order);
    }


}
