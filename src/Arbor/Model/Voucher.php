<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Voucher extends ModelBase
{
    public const BILL_PAYER = 'billPayer';

    public const PAYMENT_RECEIVED_DATE = 'paymentReceivedDate';

    public const NARRATIVE = 'narrative';

    public const PAYMENT_AMOUNT = 'paymentAmount';

    public const CANCELLED_DATETIME = 'cancelledDatetime';

    protected $_resourceType = ResourceType::VOUCHER;

    /**
     * @param Query $query
     * @return Voucher[] | Collection
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

        $query->setResourceType(ResourceType::VOUCHER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Voucher
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::VOUCHER, $id);
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
     * @return \DateTime
     */
    public function getPaymentReceivedDate()
    {
        return $this->getProperty('paymentReceivedDate');
    }

    /**
     * @param \DateTime $paymentReceivedDate
     */
    public function setPaymentReceivedDate(\DateTime $paymentReceivedDate = null)
    {
        $this->setProperty('paymentReceivedDate', $paymentReceivedDate);
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

    /**
     * @return string
     */
    public function getPaymentAmount()
    {
        return $this->getProperty('paymentAmount');
    }

    /**
     * @param string $paymentAmount
     */
    public function setPaymentAmount(string $paymentAmount = null)
    {
        $this->setProperty('paymentAmount', $paymentAmount);
    }

    /**
     * @return \DateTime
     */
    public function getCancelledDatetime()
    {
        return $this->getProperty('cancelledDatetime');
    }

    /**
     * @param \DateTime $cancelledDatetime
     */
    public function setCancelledDatetime(\DateTime $cancelledDatetime = null)
    {
        $this->setProperty('cancelledDatetime', $cancelledDatetime);
    }
}
