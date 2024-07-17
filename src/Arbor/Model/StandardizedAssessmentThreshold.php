<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StandardizedAssessmentThreshold extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const NAME = 'name';

    public const MARK_STANDARDIZED_ASSESSMENT = 'markStandardizedAssessment';

    public const OUTCOME_STANDARDIZED_ASSESSMENT = 'outcomeStandardizedAssessment';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_THRESHOLD;

    /**
     * @param Query $query
     * @return StandardizedAssessmentThreshold[] | Collection
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
     * @return \Arbor\Model\StandardizedAssessment
     */
    public function getMarkStandardizedAssessment()
    {
        return $this->getProperty('markStandardizedAssessment');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessment $markStandardizedAssessment
     */
    public function setMarkStandardizedAssessment(\Arbor\Model\StandardizedAssessment $markStandardizedAssessment = null)
    {
        $this->setProperty('markStandardizedAssessment', $markStandardizedAssessment);
    }

    /**
     * @return \Arbor\Model\StandardizedAssessment
     */
    public function getOutcomeStandardizedAssessment()
    {
        return $this->getProperty('outcomeStandardizedAssessment');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessment $outcomeStandardizedAssessment
     */
    public function setOutcomeStandardizedAssessment(\Arbor\Model\StandardizedAssessment $outcomeStandardizedAssessment = null)
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
