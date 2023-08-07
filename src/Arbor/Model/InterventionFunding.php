<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InterventionFunding extends \ModelBase
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
    public static function query(\Query $query = null)
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
     * @return Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param Intervention $intervention
     */
    public function setIntervention(\Intervention $intervention = null)
    {
        $this->setProperty('intervention', $intervention);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return InterventionFundingSource
     */
    public function getInterventionFundingSource()
    {
        return $this->getProperty('interventionFundingSource');
    }

    /**
     * @param InterventionFundingSource $interventionFundingSource
     */
    public function setInterventionFundingSource(\InterventionFundingSource $interventionFundingSource = null)
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
