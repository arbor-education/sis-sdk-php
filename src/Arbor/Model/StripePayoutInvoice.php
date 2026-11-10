<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StripePayoutInvoice extends ModelBase
{
    public const STRIPE_PAYOUT_TRANSACTION = 'stripePayoutTransaction';

    public const STATUS = 'status';

    public const INVOICE_NUMBER = 'invoiceNumber';

    public const INVOICE_DATE = 'invoiceDate';

    public const CONTENT = 'content';

    protected $_resourceType = ResourceType::STRIPE_PAYOUT_INVOICE;

    /**
     * @param Query $query
     * @return StripePayoutInvoice[] | Collection
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

        $query->setResourceType(ResourceType::STRIPE_PAYOUT_INVOICE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StripePayoutInvoice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STRIPE_PAYOUT_INVOICE, $id);
    }

    /**
     * @return \Arbor\Model\StripePayoutTransaction
     */
    public function getStripePayoutTransaction()
    {
        return $this->getProperty('stripePayoutTransaction');
    }

    /**
     * @param \Arbor\Model\StripePayoutTransaction $stripePayoutTransaction
     */
    public function setStripePayoutTransaction(\Arbor\Model\StripePayoutTransaction $stripePayoutTransaction = null)
    {
        $this->setProperty('stripePayoutTransaction', $stripePayoutTransaction);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->getProperty('invoiceNumber');
    }

    /**
     * @param string $invoiceNumber
     */
    public function setInvoiceNumber(string $invoiceNumber = null)
    {
        $this->setProperty('invoiceNumber', $invoiceNumber);
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->getProperty('invoiceDate');
    }

    /**
     * @param \DateTime $invoiceDate
     */
    public function setInvoiceDate(\DateTime $invoiceDate = null)
    {
        $this->setProperty('invoiceDate', $invoiceDate);
    }

    /**
     * @return \Arbor\Model\Content
     */
    public function getContent()
    {
        return $this->getProperty('content');
    }

    /**
     * @param \Arbor\Model\Content $content
     */
    public function setContent(\Arbor\Model\Content $content = null)
    {
        $this->setProperty('content', $content);
    }
}
