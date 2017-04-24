<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\BehaviouralContract;
use \Arbor\Model\Behaviour;

class BehaviouralContractGoal extends ModelBase
{
    const BEHAVIOURAL_CONTRACT = 'behaviouralContract';

    const DESCRIPTION = 'description';

    const FREQUENCY = 'frequency';

    const BEHAVIOUR = 'behaviour';

    protected $_resourceType = ResourceType::BEHAVIOURAL_CONTRACT_GOAL;

    /**
     * @param \Arbor\Query\Query $query
     * @return BehaviouralContractGoal[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("BehaviouralContractGoal");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BehaviouralContractGoal
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::BEHAVIOURAL_CONTRACT_GOAL, $id);
    }

    /**
     * @return BehaviouralContract
     */
    public function getBehaviouralContract()
    {
        return $this->getProperty("behaviouralContract");
    }

    /**
     * @param BehaviouralContract $behaviouralContract
     */
    public function setBehaviouralContract(BehaviouralContract $behaviouralContract = null)
    {
        $this->setProperty("behaviouralContract", $behaviouralContract);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->getProperty("frequency");
    }

    /**
     * @param string $frequency
     */
    public function setFrequency($frequency = null)
    {
        $this->setProperty("frequency", $frequency);
    }

    /**
     * @return Behaviour
     */
    public function getBehaviour()
    {
        return $this->getProperty("behaviour");
    }

    /**
     * @param Behaviour $behaviour
     */
    public function setBehaviour(Behaviour $behaviour = null)
    {
        $this->setProperty("behaviour", $behaviour);
    }
}
