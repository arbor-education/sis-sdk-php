<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BursaryPaymentManualCriterion extends ModelBase
{
    public const BURSARY_TYPE = 'bursaryType';

    public const NAME = 'name';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::BURSARY_PAYMENT_MANUAL_CRITERION;

    /**
     * @param Query $query
     * @return BursaryPaymentManualCriterion[] | Collection
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

        $query->setResourceType(ResourceType::BURSARY_PAYMENT_MANUAL_CRITERION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BursaryPaymentManualCriterion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BURSARY_PAYMENT_MANUAL_CRITERION, $id);
    }

    /**
     * @return \Arbor\Model\BursaryType
     */
    public function getBursaryType()
    {
        return $this->getProperty('bursaryType');
    }

    /**
     * @param \Arbor\Model\BursaryType $bursaryType
     */
    public function setBursaryType(\Arbor\Model\BursaryType $bursaryType = null)
    {
        $this->setProperty('bursaryType', $bursaryType);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
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
}
