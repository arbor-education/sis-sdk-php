<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BehaviouralContractParty extends ModelBase
{
    const BEHAVIOURAL_CONTRACT = 'behaviouralContract';

    const PARTY = 'party';

    const RESPONSIBLE = 'responsible';

    protected $_resourceType = ResourceType::BEHAVIOURAL_CONTRACT_PARTY;

    /**
     * @param Query $query
     * @return BehaviouralContractParty[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOURAL_CONTRACT_PARTY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviouralContractParty
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOURAL_CONTRACT_PARTY, $id);
    }

    /**
     * @return BehaviouralContract
     */
    public function getBehaviouralContract()
    {
        return $this->getProperty('behaviouralContract');
    }

    /**
     * @param BehaviouralContract $behaviouralContract
     */
    public function setBehaviouralContract(BehaviouralContract $behaviouralContract = null)
    {
        $this->setProperty('behaviouralContract', $behaviouralContract);
    }

    /**
     * @return ModelBase
     */
    public function getParty()
    {
        return $this->getProperty('party');
    }

    /**
     * @param ModelBase $party
     */
    public function setParty(ModelBase $party = null)
    {
        $this->setProperty('party', $party);
    }

    /**
     * @return bool
     */
    public function getResponsible()
    {
        return $this->getProperty('responsible');
    }

    /**
     * @param bool $responsible
     */
    public function setResponsible($responsible = null)
    {
        $this->setProperty('responsible', $responsible);
    }
}
