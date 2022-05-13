<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BursaryPaymentManualCriterionStatus extends ModelBase
{

    const BURSARY_PAYMENT = 'bursaryPayment';

    const BURSARY_PAYMENT_MANUAL_CRITERION = 'bursaryPaymentManualCriterion';

    const IS_MET = 'isMet';

    protected $_resourceType = ResourceType::BURSARY_PAYMENT_MANUAL_CRITERION_STATUS;

    /**
     * @param Query $query
     * @return BursaryPaymentManualCriterionStatus[] | Collection
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
     * @return BursaryPayment
     */
    public function getBursaryPayment()
    {
        return $this->getProperty('bursaryPayment');
    }

    /**
     * @param BursaryPayment $bursaryPayment
     */
    public function setBursaryPayment(BursaryPayment $bursaryPayment = null)
    {
        $this->setProperty('bursaryPayment', $bursaryPayment);
    }

    /**
     * @return BursaryPaymentManualCriterion
     */
    public function getBursaryPaymentManualCriterion()
    {
        return $this->getProperty('bursaryPaymentManualCriterion');
    }

    /**
     * @param BursaryPaymentManualCriterion $bursaryPaymentManualCriterion
     */
    public function setBursaryPaymentManualCriterion(BursaryPaymentManualCriterion $bursaryPaymentManualCriterion = null)
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
    public function setIsMet($isMet = null)
    {
        $this->setProperty('isMet', $isMet);
    }


}
