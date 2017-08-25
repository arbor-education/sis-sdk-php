<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StaffContractPostAdditionalPayment extends ModelBase
{
    const STAFF_CONTRACT_POST = 'staffContractPost';

    const ADDITIONAL_PAYMENT = 'additionalPayment';

    const PAYMENT_DATE = 'paymentDate';

    const ADDITIONAL_PAYMENT_REASON = 'additionalPaymentReason';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STAFF_CONTRACT_POST_ADDITIONAL_PAYMENT;

    /**
     * @param Query $query
     * @return StaffContractPostAdditionalPayment[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_CONTRACT_POST_ADDITIONAL_PAYMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffContractPostAdditionalPayment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_CONTRACT_POST_ADDITIONAL_PAYMENT, $id);
    }

    /**
     * @return StaffContractPost
     */
    public function getStaffContractPost()
    {
        return $this->getProperty('staffContractPost');
    }

    /**
     * @param StaffContractPost $staffContractPost
     */
    public function setStaffContractPost(StaffContractPost $staffContractPost = null)
    {
        $this->setProperty('staffContractPost', $staffContractPost);
    }

    /**
     * @return string
     */
    public function getAdditionalPayment()
    {
        return $this->getProperty('additionalPayment');
    }

    /**
     * @param string $additionalPayment
     */
    public function setAdditionalPayment($additionalPayment = null)
    {
        $this->setProperty('additionalPayment', $additionalPayment);
    }

    /**
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->getProperty('paymentDate');
    }

    /**
     * @param \DateTime $paymentDate
     */
    public function setPaymentDate(\DateTime $paymentDate = null)
    {
        $this->setProperty('paymentDate', $paymentDate);
    }

    /**
     * @return AdditionalPaymentReason
     */
    public function getAdditionalPaymentReason()
    {
        return $this->getProperty('additionalPaymentReason');
    }

    /**
     * @param AdditionalPaymentReason $additionalPaymentReason
     */
    public function setAdditionalPaymentReason(AdditionalPaymentReason $additionalPaymentReason = null)
    {
        $this->setProperty('additionalPaymentReason', $additionalPaymentReason);
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
