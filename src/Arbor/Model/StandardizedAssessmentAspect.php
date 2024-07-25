<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StandardizedAssessmentAspect extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const STANDARDIZED_ASSESSMENT_ASPECT_CATEGORY = 'standardizedAssessmentAspectCategory';

    public const STANDARDIZED_ASSESSMENT_COMPONENT = 'standardizedAssessmentComponent';

    public const MARK_TYPE = 'markType';

    public const MARK_MIN_VALUE = 'markMinValue';

    public const MARK_MAX_VALUE = 'markMaxValue';

    public const GRADE_SET = 'gradeSet';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_ASPECT;

    /**
     * @param Query $query
     * @return StandardizedAssessmentAspect[] | Collection
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

        $query->setResourceType(ResourceType::STANDARDIZED_ASSESSMENT_ASPECT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StandardizedAssessmentAspect
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_ASPECT, $id);
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
     * @return \Arbor\Model\StandardizedAssessmentAspectCategory
     */
    public function getStandardizedAssessmentAspectCategory()
    {
        return $this->getProperty('standardizedAssessmentAspectCategory');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessmentAspectCategory
     * $standardizedAssessmentAspectCategory
     */
    public function setStandardizedAssessmentAspectCategory(\Arbor\Model\StandardizedAssessmentAspectCategory $standardizedAssessmentAspectCategory = null)
    {
        $this->setProperty('standardizedAssessmentAspectCategory', $standardizedAssessmentAspectCategory);
    }

    /**
     * @return \Arbor\Model\StandardizedAssessmentComponent
     */
    public function getStandardizedAssessmentComponent()
    {
        return $this->getProperty('standardizedAssessmentComponent');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessmentComponent
     * $standardizedAssessmentComponent
     */
    public function setStandardizedAssessmentComponent(\Arbor\Model\StandardizedAssessmentComponent $standardizedAssessmentComponent = null)
    {
        $this->setProperty('standardizedAssessmentComponent', $standardizedAssessmentComponent);
    }

    /**
     * @return string
     */
    public function getMarkType()
    {
        return $this->getProperty('markType');
    }

    /**
     * @param string $markType
     */
    public function setMarkType(string $markType = null)
    {
        $this->setProperty('markType', $markType);
    }

    /**
     * @return float
     */
    public function getMarkMinValue()
    {
        return $this->getProperty('markMinValue');
    }

    /**
     * @param float $markMinValue
     */
    public function setMarkMinValue(float $markMinValue = null)
    {
        $this->setProperty('markMinValue', $markMinValue);
    }

    /**
     * @return float
     */
    public function getMarkMaxValue()
    {
        return $this->getProperty('markMaxValue');
    }

    /**
     * @param float $markMaxValue
     */
    public function setMarkMaxValue(float $markMaxValue = null)
    {
        $this->setProperty('markMaxValue', $markMaxValue);
    }

    /**
     * @return \Arbor\Model\GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty('gradeSet');
    }

    /**
     * @param \Arbor\Model\GradeSet $gradeSet
     */
    public function setGradeSet(\Arbor\Model\GradeSet $gradeSet = null)
    {
        $this->setProperty('gradeSet', $gradeSet);
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
