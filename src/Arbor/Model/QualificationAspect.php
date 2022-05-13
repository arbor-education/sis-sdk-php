<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationAspect extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const QUALIFICATION_ELEMENT = 'qualificationElement';

    const GRADE_INDEX = 'gradeIndex';

    const NUMERIC_MARK_TYPE = 'numericMarkType';

    const DECIMAL_PLACES = 'decimalPlaces';

    const MINIMUM_NUMERIC_VALUE = 'minimumNumericValue';

    const MAXIMUM_NUMERIC_VALUE = 'maximumNumericValue';

    const RESULT_GRADE_SET = 'resultGradeSet';

    const FORECAST_GRADE_SET = 'forecastGradeSet';

    const ENDORSEMENT_GRADE_SET = 'endorsementGradeSet';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::QUALIFICATION_ASPECT;

    /**
     * @param Query $query
     * @return QualificationAspect[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_ASPECT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationAspect
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_ASPECT, $id);
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
     * @return ModelBase
     */
    public function getQualificationElement()
    {
        return $this->getProperty('qualificationElement');
    }

    /**
     * @param ModelBase $qualificationElement
     */
    public function setQualificationElement(ModelBase $qualificationElement = null)
    {
        $this->setProperty('qualificationElement', $qualificationElement);
    }

    /**
     * @return int
     */
    public function getGradeIndex()
    {
        return $this->getProperty('gradeIndex');
    }

    /**
     * @param int $gradeIndex
     */
    public function setGradeIndex($gradeIndex = null)
    {
        $this->setProperty('gradeIndex', $gradeIndex);
    }

    /**
     * @return string
     */
    public function getNumericMarkType()
    {
        return $this->getProperty('numericMarkType');
    }

    /**
     * @param string $numericMarkType
     */
    public function setNumericMarkType($numericMarkType = null)
    {
        $this->setProperty('numericMarkType', $numericMarkType);
    }

    /**
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->getProperty('decimalPlaces');
    }

    /**
     * @param int $decimalPlaces
     */
    public function setDecimalPlaces($decimalPlaces = null)
    {
        $this->setProperty('decimalPlaces', $decimalPlaces);
    }

    /**
     * @return float
     */
    public function getMinimumNumericValue()
    {
        return $this->getProperty('minimumNumericValue');
    }

    /**
     * @param float $minimumNumericValue
     */
    public function setMinimumNumericValue($minimumNumericValue = null)
    {
        $this->setProperty('minimumNumericValue', $minimumNumericValue);
    }

    /**
     * @return float
     */
    public function getMaximumNumericValue()
    {
        return $this->getProperty('maximumNumericValue');
    }

    /**
     * @param float $maximumNumericValue
     */
    public function setMaximumNumericValue($maximumNumericValue = null)
    {
        $this->setProperty('maximumNumericValue', $maximumNumericValue);
    }

    /**
     * @return QualificationGradeSet
     */
    public function getResultGradeSet()
    {
        return $this->getProperty('resultGradeSet');
    }

    /**
     * @param QualificationGradeSet $resultGradeSet
     */
    public function setResultGradeSet(QualificationGradeSet $resultGradeSet = null)
    {
        $this->setProperty('resultGradeSet', $resultGradeSet);
    }

    /**
     * @return QualificationGradeSet
     */
    public function getForecastGradeSet()
    {
        return $this->getProperty('forecastGradeSet');
    }

    /**
     * @param QualificationGradeSet $forecastGradeSet
     */
    public function setForecastGradeSet(QualificationGradeSet $forecastGradeSet = null)
    {
        $this->setProperty('forecastGradeSet', $forecastGradeSet);
    }

    /**
     * @return QualificationGradeSet
     */
    public function getEndorsementGradeSet()
    {
        return $this->getProperty('endorsementGradeSet');
    }

    /**
     * @param QualificationGradeSet $endorsementGradeSet
     */
    public function setEndorsementGradeSet(QualificationGradeSet $endorsementGradeSet = null)
    {
        $this->setProperty('endorsementGradeSet', $endorsementGradeSet);
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

}
