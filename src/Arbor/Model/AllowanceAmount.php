<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AllowanceAmount extends ModelBase
{
    public const ALLOWANCE = 'allowance';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const ALLOWANCE_AMOUNT = 'allowanceAmount';

    protected $_resourceType = ResourceType::ALLOWANCE_AMOUNT;

    /**
     * @param Query $query
     * @return AllowanceAmount[] | Collection
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

        $query->setResourceType(ResourceType::ALLOWANCE_AMOUNT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AllowanceAmount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ALLOWANCE_AMOUNT, $id);
    }

    /**
     * @return \Arbor\Model\Allowance
     */
    public function getAllowance()
    {
        return $this->getProperty('allowance');
    }

    /**
     * @param \Arbor\Model\Allowance $allowance
     */
    public function setAllowance(\Arbor\Model\Allowance $allowance = null)
    {
        $this->setProperty('allowance', $allowance);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
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

    /**
     * @return string
     */
    public function getAllowanceAmount()
    {
        return $this->getProperty('allowanceAmount');
    }

    /**
     * @param string $allowanceAmount
     */
    public function setAllowanceAmount(string $allowanceAmount = null)
    {
        $this->setProperty('allowanceAmount', $allowanceAmount);
    }
}
