<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\Subject;
use \Arbor\Model\GradePointScale;

class StandardizedAssessment extends ModelBase
{

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\StandardizedAssessment[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("StandardizedAssessment");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\StandardizedAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("StandardizedAssessment", $id);
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


}
