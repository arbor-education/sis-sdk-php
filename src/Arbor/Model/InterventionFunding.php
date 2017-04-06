<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Intervention;
use \Arbor\Model\Student;
use \Arbor\Model\InterventionFundingSource;

class InterventionFunding extends ModelBase
{

    const INTERVENTION = 'intervention';

    const STUDENT = 'student';

    const INTERVENTION_FUNDING_SOURCE = 'interventionFundingSource';

    const FUNDING_AMOUNT = 'fundingAmount';

    const FUNDING_PERCENTAGE = 'fundingPercentage';

    protected $_resourceType = ResourceType::INTERVENTION_FUNDING;

    /**
     * @param \Arbor\Query\Query $query
     * @return InterventionFunding[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("InterventionFunding");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return InterventionFunding
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::INTERVENTION_FUNDING, $id);
    }

    /**
     * @return Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty("intervention");
    }

    /**
     * @param Intervention $intervention
     */
    public function setIntervention(Intervention $intervention = null)
    {
        $this->setProperty("intervention", $intervention);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return InterventionFundingSource
     */
    public function getInterventionFundingSource()
    {
        return $this->getProperty("interventionFundingSource");
    }

    /**
     * @param InterventionFundingSource $interventionFundingSource
     */
    public function setInterventionFundingSource(InterventionFundingSource $interventionFundingSource = null)
    {
        $this->setProperty("interventionFundingSource", $interventionFundingSource);
    }

    /**
     * @return string
     */
    public function getFundingAmount()
    {
        return $this->getProperty("fundingAmount");
    }

    /**
     * @param string $fundingAmount
     */
    public function setFundingAmount($fundingAmount = null)
    {
        $this->setProperty("fundingAmount", $fundingAmount);
    }

    /**
     * @return float
     */
    public function getFundingPercentage()
    {
        return $this->getProperty("fundingPercentage");
    }

    /**
     * @param float $fundingPercentage
     */
    public function setFundingPercentage($fundingPercentage = null)
    {
        $this->setProperty("fundingPercentage", $fundingPercentage);
    }


}
