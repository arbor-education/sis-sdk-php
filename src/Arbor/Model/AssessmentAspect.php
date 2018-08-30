<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\GradeSet;

class AssessmentAspect extends ModelBase
{

    protected $_resourceType = ResourceType::ASSESSMENT_ASPECT;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\AssessmentAspect[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("AssessmentAspect");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\AssessmentAspect
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("AssessmentAspect", $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return ModelBase
     */
    public function getAssessment()
    {
        return $this->getProperty("assessment");
    }

    /**
     * @param ModelBase $assessment
     */
    public function setAssessment(ModelBase $assessment = null)
    {
        $this->setProperty("assessment", $assessment);
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
     * @return GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty("gradeSet");
    }

    /**
     * @param GradeSet $gradeSet
     */
    public function setGradeSet(GradeSet $gradeSet = null)
    {
        $this->setProperty("gradeSet", $gradeSet);
    }

    /**
     * @return GradeSet
     */
    public function getDefaultGradeSet()
    {
        return $this->getProperty("defaultGradeSet");
    }

    /**
     * @param GradeSet $defaultGradeSet
     */
    public function setDefaultGradeSet(GradeSet $defaultGradeSet = null)
    {
        $this->setProperty("defaultGradeSet", $defaultGradeSet);
    }


}
