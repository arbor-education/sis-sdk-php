<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StandardizedAssessmentThresholdResult extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const STANDARDIZED_ASSESSMENT_THRESHOLD = 'standardizedAssessmentThreshold';

    const LOWER_RESULT_VALUE = 'lowerResultValue';

    const UPPER_RESULT_VALUE = 'upperResultValue';

    const GRADE = 'grade';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_THRESHOLD_RESULT;

    /**
     * @param Query $query
     * @return StandardizedAssessmentThresholdResult[] | Collection
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return StandardizedAssessmentThreshold
     */
    public function getStandardizedAssessmentThreshold()
    {
        return $this->getProperty('standardizedAssessmentThreshold');
    }

    /**
     * @param StandardizedAssessmentThreshold $standardizedAssessmentThreshold
     */
    public function setStandardizedAssessmentThreshold(StandardizedAssessmentThreshold $standardizedAssessmentThreshold = null)
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
    public function setLowerResultValue($lowerResultValue = null)
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
    public function setUpperResultValue($upperResultValue = null)
    {
        $this->setProperty('upperResultValue', $upperResultValue);
    }

    /**
     * @return Grade
     */
    public function getGrade()
    {
        return $this->getProperty('grade');
    }

    /**
     * @param Grade $grade
     */
    public function setGrade(Grade $grade = null)
    {
        $this->setProperty('grade', $grade);
    }
}
