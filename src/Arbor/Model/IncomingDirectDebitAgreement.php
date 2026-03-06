<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IncomingDirectDebitAgreement extends ModelBase
{
    public const BILL_PAYER = 'billPayer';

    public const PAYMENT_PROVIDER = 'paymentProvider';

    public const PAYMENT_PROVIDER_AGREEMENT_IDENTIFIER = 'paymentProviderAgreementIdentifier';

    public const AGREEMENT_START_DATE = 'agreementStartDate';

    public const AGREEMENT_END_DATE = 'agreementEndDate';

    public const AGREEMENT_REFERENCE = 'agreementReference';

    public const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::INCOMING_DIRECT_DEBIT_AGREEMENT;

    /**
     * @param Query $query
     * @return IncomingDirectDebitAgreement[] | Collection
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

        $query->setResourceType(ResourceType::INCOMING_DIRECT_DEBIT_AGREEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IncomingDirectDebitAgreement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INCOMING_DIRECT_DEBIT_AGREEMENT, $id);
    }

    /**
     * @return \Arbor\Model\BillPayer
     */
    public function getBillPayer()
    {
        return $this->getProperty('billPayer');
    }

    /**
     * @param \Arbor\Model\BillPayer $billPayer
     */
    public function setBillPayer(\Arbor\Model\BillPayer $billPayer = null)
    {
        $this->setProperty('billPayer', $billPayer);
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
    public function getPaymentProviderAgreementIdentifier()
    {
        return $this->getProperty('paymentProviderAgreementIdentifier');
    }

    /**
     * @param string $paymentProviderAgreementIdentifier
     */
    public function setPaymentProviderAgreementIdentifier(string $paymentProviderAgreementIdentifier = null)
    {
        $this->setProperty('paymentProviderAgreementIdentifier', $paymentProviderAgreementIdentifier);
    }

    /**
     * @return \DateTime
     */
    public function getAgreementStartDate()
    {
        return $this->getProperty('agreementStartDate');
    }

    /**
     * @param \DateTime $agreementStartDate
     */
    public function setAgreementStartDate(\DateTime $agreementStartDate = null)
    {
        $this->setProperty('agreementStartDate', $agreementStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getAgreementEndDate()
    {
        return $this->getProperty('agreementEndDate');
    }

    /**
     * @param \DateTime $agreementEndDate
     */
    public function setAgreementEndDate(\DateTime $agreementEndDate = null)
    {
        $this->setProperty('agreementEndDate', $agreementEndDate);
    }

    /**
     * @return string
     */
    public function getAgreementReference()
    {
        return $this->getProperty('agreementReference');
    }

    /**
     * @param string $agreementReference
     */
    public function setAgreementReference(string $agreementReference = null)
    {
        $this->setProperty('agreementReference', $agreementReference);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }
}
