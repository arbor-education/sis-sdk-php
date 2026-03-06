<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PaymentProviderPayout extends ModelBase
{
    public const BANK_ACCOUNT = 'bankAccount';

    public const PAYMENT_PROVIDER = 'paymentProvider';

    public const PAYMENT_PROVIDER_PAYOUT_IDENTIFIER = 'paymentProviderPayoutIdentifier';

    public const PAYOUT_AMOUNT = 'payoutAmount';

    public const PAYOUT_REFERENCE = 'payoutReference';

    public const PAYOUT_INITIATED_DATETIME = 'payoutInitiatedDatetime';

    public const PAYOUT_SUCCEEDED_DATETIME = 'payoutSucceededDatetime';

    public const PAYOUT_FAILED_DATETIME = 'payoutFailedDatetime';

    public const PAYOUT_SOURCE_TYPE = 'payoutSourceType';

    protected $_resourceType = ResourceType::PAYMENT_PROVIDER_PAYOUT;

    /**
     * @param Query $query
     * @return PaymentProviderPayout[] | Collection
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

        $query->setResourceType(ResourceType::PAYMENT_PROVIDER_PAYOUT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PaymentProviderPayout
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PAYMENT_PROVIDER_PAYOUT, $id);
    }

    /**
     * @return \Arbor\Model\BankAccount
     */
    public function getBankAccount()
    {
        return $this->getProperty('bankAccount');
    }

    /**
     * @param \Arbor\Model\BankAccount $bankAccount
     */
    public function setBankAccount(\Arbor\Model\BankAccount $bankAccount = null)
    {
        $this->setProperty('bankAccount', $bankAccount);
    }

    /**
     * @return \Arbor\Model\PaymentProvider
     */
    public function getPaymentProvider()
    {
        return $this->getProperty('paymentProvider');
    }

    /**
     * @param \Arbor\Model\PaymentProvider $paymentProvider
     */
    public function setPaymentProvider(\Arbor\Model\PaymentProvider $paymentProvider = null)
    {
        $this->setProperty('paymentProvider', $paymentProvider);
    }

    /**
     * @return string
     */
    public function getPaymentProviderPayoutIdentifier()
    {
        return $this->getProperty('paymentProviderPayoutIdentifier');
    }

    /**
     * @param string $paymentProviderPayoutIdentifier
     */
    public function setPaymentProviderPayoutIdentifier(string $paymentProviderPayoutIdentifier = null)
    {
        $this->setProperty('paymentProviderPayoutIdentifier', $paymentProviderPayoutIdentifier);
    }

    /**
     * @return string
     */
    public function getPayoutAmount()
    {
        return $this->getProperty('payoutAmount');
    }

    /**
     * @param string $payoutAmount
     */
    public function setPayoutAmount(string $payoutAmount = null)
    {
        $this->setProperty('payoutAmount', $payoutAmount);
    }

    /**
     * @return string
     */
    public function getPayoutReference()
    {
        return $this->getProperty('payoutReference');
    }

    /**
     * @param string $payoutReference
     */
    public function setPayoutReference(string $payoutReference = null)
    {
        $this->setProperty('payoutReference', $payoutReference);
    }

    /**
     * @return \DateTime
     */
    public function getPayoutInitiatedDatetime()
    {
        return $this->getProperty('payoutInitiatedDatetime');
    }

    /**
     * @param \DateTime $payoutInitiatedDatetime
     */
    public function setPayoutInitiatedDatetime(\DateTime $payoutInitiatedDatetime = null)
    {
        $this->setProperty('payoutInitiatedDatetime', $payoutInitiatedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPayoutSucceededDatetime()
    {
        return $this->getProperty('payoutSucceededDatetime');
    }

    /**
     * @param \DateTime $payoutSucceededDatetime
     */
    public function setPayoutSucceededDatetime(\DateTime $payoutSucceededDatetime = null)
    {
        $this->setProperty('payoutSucceededDatetime', $payoutSucceededDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPayoutFailedDatetime()
    {
        return $this->getProperty('payoutFailedDatetime');
    }

    /**
     * @param \DateTime $payoutFailedDatetime
     */
    public function setPayoutFailedDatetime(\DateTime $payoutFailedDatetime = null)
    {
        $this->setProperty('payoutFailedDatetime', $payoutFailedDatetime);
    }

    /**
     * @return string
     */
    public function getPayoutSourceType()
    {
        return $this->getProperty('payoutSourceType');
    }

    /**
     * @param string $payoutSourceType
     */
    public function setPayoutSourceType(string $payoutSourceType = null)
    {
        $this->setProperty('payoutSourceType', $payoutSourceType);
    }
}
