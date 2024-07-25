<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StripeEvent extends ModelBase
{
    public const IDENTIFIER = 'identifier';

    public const API_VERSION = 'apiVersion';

    public const EVENT_CREATED_DATE = 'eventCreatedDate';

    public const TYPE = 'type';

    public const PAYLOAD = 'payload';

    public const METADATA_IDENTIFIER = 'metadataIdentifier';

    public const STRIPE_OBJECT_IDENTIFIER = 'stripeObjectIdentifier';

    protected $_resourceType = ResourceType::STRIPE_EVENT;

    /**
     * @param Query $query
     * @return StripeEvent[] | Collection
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

        $query->setResourceType(ResourceType::STRIPE_EVENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StripeEvent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STRIPE_EVENT, $id);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty('identifier');
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier = null)
    {
        $this->setProperty('identifier', $identifier);
    }

    /**
     * @return string
     */
    public function getApiVersion()
    {
        return $this->getProperty('apiVersion');
    }

    /**
     * @param string $apiVersion
     */
    public function setApiVersion(string $apiVersion = null)
    {
        $this->setProperty('apiVersion', $apiVersion);
    }

    /**
     * @return \DateTime
     */
    public function getEventCreatedDate()
    {
        return $this->getProperty('eventCreatedDate');
    }

    /**
     * @param \DateTime $eventCreatedDate
     */
    public function setEventCreatedDate(\DateTime $eventCreatedDate = null)
    {
        $this->setProperty('eventCreatedDate', $eventCreatedDate);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->getProperty('payload');
    }

    /**
     * @param string $payload
     */
    public function setPayload(string $payload = null)
    {
        $this->setProperty('payload', $payload);
    }

    /**
     * @return string
     */
    public function getMetadataIdentifier()
    {
        return $this->getProperty('metadataIdentifier');
    }

    /**
     * @param string $metadataIdentifier
     */
    public function setMetadataIdentifier(string $metadataIdentifier = null)
    {
        $this->setProperty('metadataIdentifier', $metadataIdentifier);
    }

    /**
     * @return string
     */
    public function getStripeObjectIdentifier()
    {
        return $this->getProperty('stripeObjectIdentifier');
    }

    /**
     * @param string $stripeObjectIdentifier
     */
    public function setStripeObjectIdentifier(string $stripeObjectIdentifier = null)
    {
        $this->setProperty('stripeObjectIdentifier', $stripeObjectIdentifier);
    }
}
