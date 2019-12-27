<?php
namespace Arbor\Model\Group;

use Arbor\Resource\Group\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Group_AssessmentAspect extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ASSESSMENT = 'assessment';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const MARK_TYPE = 'markType';

    const MARK_MIN_VALUE = 'markMinValue';

    const MARK_MAX_VALUE = 'markMaxValue';

    const GRADE_SET = 'gradeSet';

    const DEFAULT_GRADE_SET = 'defaultGradeSet';

    protected $_resourceType = ResourceType::GROUP_ASSESSMENT_ASPECT;

    /**
     * @param Query $query
     * @return Group_AssessmentAspect[] | Collection
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

        $query->setResourceType(ResourceType::GROUP_ASSESSMENT_ASPECT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Group_AssessmentAspect
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GROUP_ASSESSMENT_ASPECT, $id);
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
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param ModelBase $assessment
     */
    public function setAssessment(ModelBase $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
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
     * @return GradeSet
     */
    public function getDefaultGradeSet()
    {
        return $this->getProperty('defaultGradeSet');
    }

    /**
     * @param GradeSet $defaultGradeSet
     */
    public function setDefaultGradeSet(GradeSet $defaultGradeSet = null)
    {
        $this->setProperty('defaultGradeSet', $defaultGradeSet);
    }


}
