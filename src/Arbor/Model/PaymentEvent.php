<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PaymentEvent extends ModelBase
{
    public const USER = 'user';

    public const EVENT_NAMESPACE = 'eventNamespace';

    public const EVENT_TYPE = 'eventType';

    public const MESSAGE = 'message';

    public const CONTENT = 'content';

    public const SOURCE = 'source';

    public const REQUEST_ID = 'requestId';

    public const CORRELATION_ID = 'correlationId';

    public const EVENT_DATETIME = 'eventDatetime';

    public const IDEMPOTENCY_KEY = 'idempotencyKey';

    protected $_resourceType = ResourceType::PAYMENT_EVENT;

    /**
     * @param Query $query
     * @return PaymentEvent[] | Collection
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

        $query->setResourceType(ResourceType::PAYMENT_EVENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PaymentEvent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PAYMENT_EVENT, $id);
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
    public function getEventNamespace()
    {
        return $this->getProperty('eventNamespace');
    }

    /**
     * @param string $eventNamespace
     */
    public function setEventNamespace(string $eventNamespace = null)
    {
        $this->setProperty('eventNamespace', $eventNamespace);
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->getProperty('eventType');
    }

    /**
     * @param string $eventType
     */
    public function setEventType(string $eventType = null)
    {
        $this->setProperty('eventType', $eventType);
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->getProperty('message');
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message = null)
    {
        $this->setProperty('message', $message);
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

    /**
     * @return ModelBase
     */
    public function getSource()
    {
        return $this->getProperty('source');
    }

    /**
     * @param ModelBase $source
     */
    public function setSource(\ModelBase $source = null)
    {
        $this->setProperty('source', $source);
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->getProperty('requestId');
    }

    /**
     * @param string $requestId
     */
    public function setRequestId(string $requestId = null)
    {
        $this->setProperty('requestId', $requestId);
    }

    /**
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->getProperty('correlationId');
    }

    /**
     * @param string $correlationId
     */
    public function setCorrelationId(string $correlationId = null)
    {
        $this->setProperty('correlationId', $correlationId);
    }

    /**
     * @return string
     */
    public function getEventDatetime()
    {
        return $this->getProperty('eventDatetime');
    }

    /**
     * @param string $eventDatetime
     */
    public function setEventDatetime(string $eventDatetime = null)
    {
        $this->setProperty('eventDatetime', $eventDatetime);
    }

    /**
     * @return string
     */
    public function getIdempotencyKey()
    {
        return $this->getProperty('idempotencyKey');
    }

    /**
     * @param string $idempotencyKey
     */
    public function setIdempotencyKey(string $idempotencyKey = null)
    {
        $this->setProperty('idempotencyKey', $idempotencyKey);
    }
}
