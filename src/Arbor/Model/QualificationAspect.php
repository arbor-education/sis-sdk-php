<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationAspect extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const QUALIFICATION_ELEMENT = 'qualificationElement';

    public const GRADE_INDEX = 'gradeIndex';

    public const NUMERIC_MARK_TYPE = 'numericMarkType';

    public const DECIMAL_PLACES = 'decimalPlaces';

    public const MINIMUM_NUMERIC_VALUE = 'minimumNumericValue';

    public const MAXIMUM_NUMERIC_VALUE = 'maximumNumericValue';

    public const RESULT_GRADE_SET = 'resultGradeSet';

    public const FORECAST_GRADE_SET = 'forecastGradeSet';

    public const ENDORSEMENT_GRADE_SET = 'endorsementGradeSet';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::QUALIFICATION_ASPECT;

    /**
     * @param Query $query
     * @return QualificationAspect[] | Collection
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
     * @return ModelBase
     */
    public function getQualificationElement()
    {
        return $this->getProperty('qualificationElement');
    }

    /**
     * @param ModelBase $qualificationElement
     */
    public function setQualificationElement(\ModelBase $qualificationElement = null)
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
    public function setGradeIndex(int $gradeIndex = null)
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
    public function setNumericMarkType(string $numericMarkType = null)
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
    public function setDecimalPlaces(int $decimalPlaces = null)
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
    public function setMinimumNumericValue(float $minimumNumericValue = null)
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
    public function setMaximumNumericValue(float $maximumNumericValue = null)
    {
        $this->setProperty('maximumNumericValue', $maximumNumericValue);
    }

    /**
     * @return \Arbor\Model\QualificationGradeSet
     */
    public function getResultGradeSet()
    {
        return $this->getProperty('resultGradeSet');
    }

    /**
     * @param \Arbor\Model\QualificationGradeSet $resultGradeSet
     */
    public function setResultGradeSet(\Arbor\Model\QualificationGradeSet $resultGradeSet = null)
    {
        $this->setProperty('resultGradeSet', $resultGradeSet);
    }

    /**
     * @return \Arbor\Model\QualificationGradeSet
     */
    public function getForecastGradeSet()
    {
        return $this->getProperty('forecastGradeSet');
    }

    /**
     * @param \Arbor\Model\QualificationGradeSet $forecastGradeSet
     */
    public function setForecastGradeSet(\Arbor\Model\QualificationGradeSet $forecastGradeSet = null)
    {
        $this->setProperty('forecastGradeSet', $forecastGradeSet);
    }

    /**
     * @return \Arbor\Model\QualificationGradeSet
     */
    public function getEndorsementGradeSet()
    {
        return $this->getProperty('endorsementGradeSet');
    }

    /**
     * @param \Arbor\Model\QualificationGradeSet $endorsementGradeSet
     */
    public function setEndorsementGradeSet(\Arbor\Model\QualificationGradeSet $endorsementGradeSet = null)
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
