<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffContractPostAdditionalPayment extends ModelBase
{
    public const STAFF_CONTRACT_POST = 'staffContractPost';

    public const ADDITIONAL_PAYMENT = 'additionalPayment';

    public const PAYMENT_DATE = 'paymentDate';

    public const ADDITIONAL_PAYMENT_REASON = 'additionalPaymentReason';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STAFF_CONTRACT_POST_ADDITIONAL_PAYMENT;

    /**
     * @param Query $query
     * @return StaffContractPostAdditionalPayment[] | Collection
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
     * @return \Arbor\Model\StaffContractPost
     */
    public function getStaffContractPost()
    {
        return $this->getProperty('staffContractPost');
    }

    /**
     * @param \Arbor\Model\StaffContractPost $staffContractPost
     */
    public function setStaffContractPost(\Arbor\Model\StaffContractPost $staffContractPost = null)
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
    public function setAdditionalPayment(string $additionalPayment = null)
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
     * @return \Arbor\Model\AdditionalPaymentReason
     */
    public function getAdditionalPaymentReason()
    {
        return $this->getProperty('additionalPaymentReason');
    }

    /**
     * @param \Arbor\Model\AdditionalPaymentReason $additionalPaymentReason
     */
    public function setAdditionalPaymentReason(\Arbor\Model\AdditionalPaymentReason $additionalPaymentReason = null)
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
