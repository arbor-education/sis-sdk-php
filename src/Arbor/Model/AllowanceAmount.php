<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Allowance;

class AllowanceAmount extends ModelBase
{
    const ALLOWANCE = 'allowance';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const ALLOWANCE_AMOUNT = 'allowanceAmount';

    protected $_resourceType = ResourceType::ALLOWANCE_AMOUNT;

    /**
     * @param \Arbor\Query\Query $query
     * @return AllowanceAmount[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("AllowanceAmount");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AllowanceAmount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ALLOWANCE_AMOUNT, $id);
    }

    /**
     * @return Allowance
     */
    public function getAllowance()
    {
        return $this->getProperty("allowance");
    }

    /**
     * @param Allowance $allowance
     */
    public function setAllowance(Allowance $allowance = null)
    {
        $this->setProperty("allowance", $allowance);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return string
     */
    public function getAllowanceAmount()
    {
        return $this->getProperty("allowanceAmount");
    }

    /**
     * @param string $allowanceAmount
     */
    public function setAllowanceAmount($allowanceAmount = null)
    {
        $this->setProperty("allowanceAmount", $allowanceAmount);
    }
}
