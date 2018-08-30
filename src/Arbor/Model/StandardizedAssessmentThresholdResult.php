<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\StandardizedAssessmentThreshold;
use \Arbor\Model\Grade;

class StandardizedAssessmentThresholdResult extends ModelBase
{

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_THRESHOLD_RESULT;

    /**
     * @param \Arbor\Query\Query $query
     * @return
     * \Arbor\Model\StandardizedAssessmentThresholdResult[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("StandardizedAssessmentThresholdResult");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\StandardizedAssessmentThresholdResult
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("StandardizedAssessmentThresholdResult", $id);
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
     * @return StandardizedAssessmentThreshold
     */
    public function getStandardizedAssessmentThreshold()
    {
        return $this->getProperty("standardizedAssessmentThreshold");
    }

    /**
     * @param StandardizedAssessmentThreshold $standardizedAssessmentThreshold
     */
    public function setStandardizedAssessmentThreshold(StandardizedAssessmentThreshold $standardizedAssessmentThreshold = null)
    {
        $this->setProperty("standardizedAssessmentThreshold", $standardizedAssessmentThreshold);
    }

    /**
     * @return float
     */
    public function getLowerResultValue()
    {
        return $this->getProperty("lowerResultValue");
    }

    /**
     * @param float $lowerResultValue
     */
    public function setLowerResultValue($lowerResultValue = null)
    {
        $this->setProperty("lowerResultValue", $lowerResultValue);
    }

    /**
     * @return float
     */
    public function getUpperResultValue()
    {
        return $this->getProperty("upperResultValue");
    }

    /**
     * @param float $upperResultValue
     */
    public function setUpperResultValue($upperResultValue = null)
    {
        $this->setProperty("upperResultValue", $upperResultValue);
    }

    /**
     * @return Grade
     */
    public function getGrade()
    {
        return $this->getProperty("grade");
    }

    /**
     * @param Grade $grade
     */
    public function setGrade(Grade $grade = null)
    {
        $this->setProperty("grade", $grade);
    }


}
