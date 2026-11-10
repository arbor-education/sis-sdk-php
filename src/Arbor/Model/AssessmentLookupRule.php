<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentLookupRule extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ASSESSMENT_LOOKUP = 'assessmentLookup';

    public const NAME = 'name';

    public const SHORT_NAME = 'shortName';

    public const ASSESSMENT_GRADE = 'assessmentGrade';

    public const LOWER_LIMIT = 'lowerLimit';

    public const UPPER_LIMIT = 'upperLimit';

    public const STATISTICAL_VALUE = 'statisticalValue';

    protected $_resourceType = ResourceType::ASSESSMENT_LOOKUP_RULE;

    /**
     * @param Query $query
     * @return AssessmentLookupRule[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_LOOKUP_RULE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentLookupRule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_LOOKUP_RULE, $id);
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
     * @return \Arbor\Model\AssessmentLookup
     */
    public function getAssessmentLookup()
    {
        return $this->getProperty('assessmentLookup');
    }

    /**
     * @param \Arbor\Model\AssessmentLookup $assessmentLookup
     */
    public function setAssessmentLookup(\Arbor\Model\AssessmentLookup $assessmentLookup = null)
    {
        $this->setProperty('assessmentLookup', $assessmentLookup);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return \Arbor\Model\AssessmentGrade
     */
    public function getAssessmentGrade()
    {
        return $this->getProperty('assessmentGrade');
    }

    /**
     * @param \Arbor\Model\AssessmentGrade $assessmentGrade
     */
    public function setAssessmentGrade(\Arbor\Model\AssessmentGrade $assessmentGrade = null)
    {
        $this->setProperty('assessmentGrade', $assessmentGrade);
    }

    /**
     * @return int
     */
    public function getLowerLimit()
    {
        return $this->getProperty('lowerLimit');
    }

    /**
     * @param int $lowerLimit
     */
    public function setLowerLimit(int $lowerLimit = null)
    {
        $this->setProperty('lowerLimit', $lowerLimit);
    }

    /**
     * @return int
     */
    public function getUpperLimit()
    {
        return $this->getProperty('upperLimit');
    }

    /**
     * @param int $upperLimit
     */
    public function setUpperLimit(int $upperLimit = null)
    {
        $this->setProperty('upperLimit', $upperLimit);
    }

    /**
     * @return float
     */
    public function getStatisticalValue()
    {
        return $this->getProperty('statisticalValue');
    }

    /**
     * @param float $statisticalValue
     */
    public function setStatisticalValue(float $statisticalValue = null)
    {
        $this->setProperty('statisticalValue', $statisticalValue);
    }
}
