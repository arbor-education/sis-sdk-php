<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InterventionFunding extends ModelBase
{
    public const INTERVENTION = 'intervention';

    public const STUDENT = 'student';

    public const INTERVENTION_FUNDING_SOURCE = 'interventionFundingSource';

    public const FUNDING_AMOUNT = 'fundingAmount';

    public const FUNDING_PERCENTAGE = 'fundingPercentage';

    protected $_resourceType = ResourceType::INTERVENTION_FUNDING;

    /**
     * @param Query $query
     * @return InterventionFunding[] | Collection
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

        $query->setResourceType(ResourceType::INTERVENTION_FUNDING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InterventionFunding
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERVENTION_FUNDING, $id);
    }

    /**
     * @return \Arbor\Model\Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param \Arbor\Model\Intervention $intervention
     */
    public function setIntervention(\Arbor\Model\Intervention $intervention = null)
    {
        $this->setProperty('intervention', $intervention);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \Arbor\Model\InterventionFundingSource
     */
    public function getInterventionFundingSource()
    {
        return $this->getProperty('interventionFundingSource');
    }

    /**
     * @param \Arbor\Model\InterventionFundingSource $interventionFundingSource
     */
    public function setInterventionFundingSource(\Arbor\Model\InterventionFundingSource $interventionFundingSource = null)
    {
        $this->setProperty('interventionFundingSource', $interventionFundingSource);
    }

    /**
     * @return string
     */
    public function getFundingAmount()
    {
        return $this->getProperty('fundingAmount');
    }

    /**
     * @param string $fundingAmount
     */
    public function setFundingAmount(string $fundingAmount = null)
    {
        $this->setProperty('fundingAmount', $fundingAmount);
    }

    /**
     * @return float
     */
    public function getFundingPercentage()
    {
        return $this->getProperty('fundingPercentage');
    }

    /**
     * @param float $fundingPercentage
     */
    public function setFundingPercentage(float $fundingPercentage = null)
    {
        $this->setProperty('fundingPercentage', $fundingPercentage);
    }
}
