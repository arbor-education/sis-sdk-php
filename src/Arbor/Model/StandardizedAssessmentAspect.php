<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StandardizedAssessmentAspect extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const STANDARDIZED_ASSESSMENT_ASPECT_CATEGORY = 'standardizedAssessmentAspectCategory';

    const STANDARDIZED_ASSESSMENT_COMPONENT = 'standardizedAssessmentComponent';

    const MARK_TYPE = 'markType';

    const MARK_MIN_VALUE = 'markMinValue';

    const MARK_MAX_VALUE = 'markMaxValue';

    const GRADE_SET = 'gradeSet';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_ASPECT;

    /**
     * @param Query $query
     * @return StandardizedAssessmentAspect[] | Collection
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
     * @return StandardizedAssessmentAspectCategory
     */
    public function getStandardizedAssessmentAspectCategory()
    {
        return $this->getProperty('standardizedAssessmentAspectCategory');
    }

    /**
     * @param StandardizedAssessmentAspectCategory
     * $standardizedAssessmentAspectCategory
     */
    public function setStandardizedAssessmentAspectCategory(StandardizedAssessmentAspectCategory $standardizedAssessmentAspectCategory = null)
    {
        $this->setProperty('standardizedAssessmentAspectCategory', $standardizedAssessmentAspectCategory);
    }

    /**
     * @return StandardizedAssessmentComponent
     */
    public function getStandardizedAssessmentComponent()
    {
        return $this->getProperty('standardizedAssessmentComponent');
    }

    /**
     * @param StandardizedAssessmentComponent $standardizedAssessmentComponent
     */
    public function setStandardizedAssessmentComponent(StandardizedAssessmentComponent $standardizedAssessmentComponent = null)
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
    public function setMarkType($markType = null)
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
    public function setMarkMinValue($markMinValue = null)
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
    public function setMarkMaxValue($markMaxValue = null)
    {
        $this->setProperty('markMaxValue', $markMaxValue);
    }

    /**
     * @return GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty('gradeSet');
    }

    /**
     * @param GradeSet $gradeSet
     */
    public function setGradeSet(GradeSet $gradeSet = null)
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
