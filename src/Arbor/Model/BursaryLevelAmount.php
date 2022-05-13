<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BursaryLevelAmount extends ModelBase
{
    const BURSARY_LEVEL = 'bursaryLevel';

    const AMOUNT = 'amount';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::BURSARY_LEVEL_AMOUNT;

    /**
     * @param Query $query
     * @return BursaryLevelAmount[] | Collection
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

        $query->setResourceType(ResourceType::BURSARY_LEVEL_AMOUNT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BursaryLevelAmount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BURSARY_LEVEL_AMOUNT, $id);
    }

    /**
     * @return BursaryLevel
     */
    public function getBursaryLevel()
    {
        return $this->getProperty('bursaryLevel');
    }

    /**
     * @param BursaryLevel $bursaryLevel
     */
    public function setBursaryLevel(BursaryLevel $bursaryLevel = null)
    {
        $this->setProperty('bursaryLevel', $bursaryLevel);
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
