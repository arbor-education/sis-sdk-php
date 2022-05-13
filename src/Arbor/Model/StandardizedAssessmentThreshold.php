<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StandardizedAssessmentThreshold extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const NAME = 'name';

    const MARK_STANDARDIZED_ASSESSMENT = 'markStandardizedAssessment';

    const OUTCOME_STANDARDIZED_ASSESSMENT = 'outcomeStandardizedAssessment';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_THRESHOLD;

    /**
     * @param Query $query
     * @return StandardizedAssessmentThreshold[] | Collection
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

        $query->setResourceType(ResourceType::STANDARDIZED_ASSESSMENT_THRESHOLD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StandardizedAssessmentThreshold
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_THRESHOLD, $id);
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
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return StandardizedAssessment
     */
    public function getMarkStandardizedAssessment()
    {
        return $this->getProperty('markStandardizedAssessment');
    }

    /**
     * @param StandardizedAssessment $markStandardizedAssessment
     */
    public function setMarkStandardizedAssessment(StandardizedAssessment $markStandardizedAssessment = null)
    {
        $this->setProperty('markStandardizedAssessment', $markStandardizedAssessment);
    }

    /**
     * @return StandardizedAssessment
     */
    public function getOutcomeStandardizedAssessment()
    {
        return $this->getProperty('outcomeStandardizedAssessment');
    }

    /**
     * @param StandardizedAssessment $outcomeStandardizedAssessment
     */
    public function setOutcomeStandardizedAssessment(StandardizedAssessment $outcomeStandardizedAssessment = null)
    {
        $this->setProperty('outcomeStandardizedAssessment', $outcomeStandardizedAssessment);
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
