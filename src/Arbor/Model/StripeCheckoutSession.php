<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StripeCheckoutSession extends ModelBase
{
    public const ORDER = 'order';

    public const STRIPE_IDENTIFIER = 'stripeIdentifier';

    public const EXPIRES_AT = 'expiresAt';

    public const STATUS = 'status';

    public const URL = 'url';

    public const USER = 'user';

    public const CLIENT = 'client';

    protected $_resourceType = ResourceType::STRIPE_CHECKOUT_SESSION;

    /**
     * @param Query $query
     * @return StripeCheckoutSession[] | Collection
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

        $query->setResourceType(ResourceType::STRIPE_CHECKOUT_SESSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StripeCheckoutSession
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STRIPE_CHECKOUT_SESSION, $id);
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
    public function getStripeIdentifier()
    {
        return $this->getProperty('stripeIdentifier');
    }

    /**
     * @param string $stripeIdentifier
     */
    public function setStripeIdentifier(string $stripeIdentifier = null)
    {
        $this->setProperty('stripeIdentifier', $stripeIdentifier);
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
    public function getUrl()
    {
        return $this->getProperty('url');
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url = null)
    {
        $this->setProperty('url', $url);
    }

    /**
     * @return \Arbor\Model\User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param \Arbor\Model\User $user
     */
    public function setUser(\Arbor\Model\User $user = null)
    {
        $this->setProperty('user', $user);
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
}
