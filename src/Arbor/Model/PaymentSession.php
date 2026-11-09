<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PaymentSession extends ModelBase
{
    public const ORDER = 'order';

    public const STATUS = 'status';

    public const CLIENT = 'client';

    public const STRIPE_PAYMENT_INTENT_IDENTIFIER = 'stripePaymentIntentIdentifier';

    public const EXPIRES_AT = 'expiresAt';

    public const COMPLETED_AT = 'completedAt';

    protected $_resourceType = ResourceType::PAYMENT_SESSION;

    /**
     * @param Query $query
     * @return PaymentSession[] | Collection
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

        $query->setResourceType(ResourceType::PAYMENT_SESSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PaymentSession
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PAYMENT_SESSION, $id);
    }

    /**
     * @return \Arbor\Model\Order
     */
    public function getOrder()
    {
        return $this->getProperty('order');
    }

    /**
     * @param \Arbor\Model\Order $order
     */
    public function setOrder(\Arbor\Model\Order $order = null)
    {
        $this->setProperty('order', $order);
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
    public function getClient()
    {
        return $this->getProperty('client');
    }

    /**
     * @param string $client
     */
    public function setClient(string $client = null)
    {
        $this->setProperty('client', $client);
    }

    /**
     * @return string
     */
    public function getStripePaymentIntentIdentifier()
    {
        return $this->getProperty('stripePaymentIntentIdentifier');
    }

    /**
     * @param string $stripePaymentIntentIdentifier
     */
    public function setStripePaymentIntentIdentifier(string $stripePaymentIntentIdentifier = null)
    {
        $this->setProperty('stripePaymentIntentIdentifier', $stripePaymentIntentIdentifier);
    }

    /**
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->getProperty('expiresAt');
    }

    /**
     * @param \DateTime $expiresAt
     */
    public function setExpiresAt(\DateTime $expiresAt = null)
    {
        $this->setProperty('expiresAt', $expiresAt);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedAt()
    {
        return $this->getProperty('completedAt');
    }

    /**
     * @param \DateTime $completedAt
     */
    public function setCompletedAt(\DateTime $completedAt = null)
    {
        $this->setProperty('completedAt', $completedAt);
    }
}
