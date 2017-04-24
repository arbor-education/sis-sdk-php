<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\BehaviouralContract;

class BehaviouralContractParty extends ModelBase
{
    const BEHAVIOURAL_CONTRACT = 'behaviouralContract';

    const PARTY = 'party';

    const RESPONSIBLE = 'responsible';

    protected $_resourceType = ResourceType::BEHAVIOURAL_CONTRACT_PARTY;

    /**
     * @param \Arbor\Query\Query $query
     * @return BehaviouralContractParty[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("BehaviouralContractParty");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BehaviouralContractParty
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::BEHAVIOURAL_CONTRACT_PARTY, $id);
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
     * @return ModelBase
     */
    public function getParty()
    {
        return $this->getProperty("party");
    }

    /**
     * @param ModelBase $party
     */
    public function setParty(ModelBase $party = null)
    {
        $this->setProperty("party", $party);
    }

    /**
     * @return bool
     */
    public function getResponsible()
    {
        return $this->getProperty("responsible");
    }

    /**
     * @param bool $responsible
     */
    public function setResponsible($responsible = null)
    {
        $this->setProperty("responsible", $responsible);
    }
}
