<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StandardizedAssessmentThresholdResult extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const STANDARDIZED_ASSESSMENT_THRESHOLD = 'standardizedAssessmentThreshold';

    public const LOWER_RESULT_VALUE = 'lowerResultValue';

    public const UPPER_RESULT_VALUE = 'upperResultValue';

    public const GRADE = 'grade';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_THRESHOLD_RESULT;

    /**
     * @param Query $query
     * @return StandardizedAssessmentThresholdResult[] | Collection
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

        $query->setResourceType(ResourceType::STANDARDIZED_ASSESSMENT_THRESHOLD_RESULT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StandardizedAssessmentThresholdResult
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_THRESHOLD_RESULT, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return \Arbor\Model\StandardizedAssessmentThreshold
     */
    public function getStandardizedAssessmentThreshold()
    {
        return $this->getProperty('standardizedAssessmentThreshold');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessmentThreshold
     * $standardizedAssessmentThreshold
     */
    public function setStandardizedAssessmentThreshold(\Arbor\Model\StandardizedAssessmentThreshold $standardizedAssessmentThreshold = null)
    {
        $this->setProperty('standardizedAssessmentThreshold', $standardizedAssessmentThreshold);
    }

    /**
     * @return float
     */
    public function getLowerResultValue()
    {
        return $this->getProperty('lowerResultValue');
    }

    /**
     * @param float $lowerResultValue
     */
    public function setLowerResultValue(float $lowerResultValue = null)
    {
        $this->setProperty('lowerResultValue', $lowerResultValue);
    }

    /**
     * @return float
     */
    public function getUpperResultValue()
    {
        return $this->getProperty('upperResultValue');
    }

    /**
     * @param float $upperResultValue
     */
    public function setUpperResultValue(float $upperResultValue = null)
    {
        $this->setProperty('upperResultValue', $upperResultValue);
    }

    /**
     * @return \Arbor\Model\Grade
     */
    public function getGrade()
    {
        return $this->getProperty('grade');
    }

    /**
     * @param \Arbor\Model\Grade $grade
     */
    public function setGrade(\Arbor\Model\Grade $grade = null)
    {
        $this->setProperty('grade', $grade);
    }
}
