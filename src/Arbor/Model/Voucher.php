<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Voucher extends ModelBase
{
    const BILL_PAYER = 'billPayer';

    const PAYMENT_RECEIVED_DATE = 'paymentReceivedDate';

    const NARRATIVE = 'narrative';

    const PAYMENT_AMOUNT = 'paymentAmount';

    const CANCELLED_DATETIME = 'cancelledDatetime';

    protected $_resourceType = ResourceType::VOUCHER;

    /**
     * @param Query $query
     * @return Voucher[] | Collection
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
     * @return BillPayer
     */
    public function getBillPayer()
    {
        return $this->getProperty('billPayer');
    }

    /**
     * @param BillPayer $billPayer
     */
    public function setBillPayer(BillPayer $billPayer = null)
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
    public function setNarrative($narrative = null)
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
    public function setPaymentAmount($paymentAmount = null)
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
