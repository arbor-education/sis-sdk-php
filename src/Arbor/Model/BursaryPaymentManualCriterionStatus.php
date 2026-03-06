<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BursaryPaymentManualCriterionStatus extends ModelBase
{
    public const BURSARY_PAYMENT = 'bursaryPayment';

    public const BURSARY_PAYMENT_MANUAL_CRITERION = 'bursaryPaymentManualCriterion';

    public const IS_MET = 'isMet';

    protected $_resourceType = ResourceType::BURSARY_PAYMENT_MANUAL_CRITERION_STATUS;

    /**
     * @param Query $query
     * @return BursaryPaymentManualCriterionStatus[] | Collection
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

        $query->setResourceType(ResourceType::BURSARY_PAYMENT_MANUAL_CRITERION_STATUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BursaryPaymentManualCriterionStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BURSARY_PAYMENT_MANUAL_CRITERION_STATUS, $id);
    }

    /**
     * @return \Arbor\Model\BursaryPayment
     */
    public function getBursaryPayment()
    {
        return $this->getProperty('bursaryPayment');
    }

    /**
     * @param \Arbor\Model\BursaryPayment $bursaryPayment
     */
    public function setBursaryPayment(\Arbor\Model\BursaryPayment $bursaryPayment = null)
    {
        $this->setProperty('bursaryPayment', $bursaryPayment);
    }

    /**
     * @return \Arbor\Model\BursaryPaymentManualCriterion
     */
    public function getBursaryPaymentManualCriterion()
    {
        return $this->getProperty('bursaryPaymentManualCriterion');
    }

    /**
     * @param \Arbor\Model\BursaryPaymentManualCriterion $bursaryPaymentManualCriterion
     */
    public function setBursaryPaymentManualCriterion(\Arbor\Model\BursaryPaymentManualCriterion $bursaryPaymentManualCriterion = null)
    {
        $this->setProperty('bursaryPaymentManualCriterion', $bursaryPaymentManualCriterion);
    }

    /**
     * @return bool
     */
    public function getIsMet()
    {
        return $this->getProperty('isMet');
    }

    /**
     * @param bool $isMet
     */
    public function setIsMet(bool $isMet = null)
    {
        $this->setProperty('isMet', $isMet);
    }
}
