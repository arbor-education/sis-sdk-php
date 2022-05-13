<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InterventionCost extends ModelBase
{
    const INTERVENTION = 'intervention';

    const AMOUNT = 'amount';

    const DESCRIPTION = 'description';

    protected $_resourceType = ResourceType::INTERVENTION_COST;

    /**
     * @param Query $query
     * @return InterventionCost[] | Collection
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

        $query->setResourceType(ResourceType::INTERVENTION_COST);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InterventionCost
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERVENTION_COST, $id);
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
    public function setIntervention(Intervention $intervention = null)
    {
        $this->setProperty('intervention', $intervention);
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->getProperty('amount');
    }

    /**
     * @param string $amount
     */
    public function setAmount($amount = null)
    {
        $this->setProperty('amount', $amount);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }

}
