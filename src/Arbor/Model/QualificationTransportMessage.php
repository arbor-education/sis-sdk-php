<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationTransportMessage extends ModelBase
{
    public const QUALIFICATION_TRANSPORT_CERTIFICATE = 'qualificationTransportCertificate';

    public const CONTENT = 'content';

    public const TYPE = 'type';

    public const MESSAGE_ID = 'messageId';

    public const DIRECTION = 'direction';

    public const REF_TO_MESSAGE_ID = 'refToMessageId';

    public const DATETIME = 'datetime';

    public const RAW_CONTENT = 'rawContent';

    protected $_resourceType = ResourceType::QUALIFICATION_TRANSPORT_MESSAGE;

    /**
     * @param Query $query
     * @return QualificationTransportMessage[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_TRANSPORT_MESSAGE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationTransportMessage
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_TRANSPORT_MESSAGE, $id);
    }

    /**
     * @return \Arbor\Model\QualificationTransportCertificate
     */
    public function getQualificationTransportCertificate()
    {
        return $this->getProperty('qualificationTransportCertificate');
    }

    /**
     * @param \Arbor\Model\QualificationTransportCertificate
     * $qualificationTransportCertificate
     */
    public function setQualificationTransportCertificate(\Arbor\Model\QualificationTransportCertificate $qualificationTransportCertificate = null)
    {
        $this->setProperty('qualificationTransportCertificate', $qualificationTransportCertificate);
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
    public function getMessageId()
    {
        return $this->getProperty('messageId');
    }

    /**
     * @param string $messageId
     */
    public function setMessageId(string $messageId = null)
    {
        $this->setProperty('messageId', $messageId);
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->getProperty('direction');
    }

    /**
     * @param string $direction
     */
    public function setDirection(string $direction = null)
    {
        $this->setProperty('direction', $direction);
    }

    /**
     * @return string
     */
    public function getRefToMessageId()
    {
        return $this->getProperty('refToMessageId');
    }

    /**
     * @param string $refToMessageId
     */
    public function setRefToMessageId(string $refToMessageId = null)
    {
        $this->setProperty('refToMessageId', $refToMessageId);
    }

    /**
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->getProperty('datetime');
    }

    /**
     * @param \DateTime $datetime
     */
    public function setDatetime(\DateTime $datetime = null)
    {
        $this->setProperty('datetime', $datetime);
    }

    /**
     * @return string
     */
    public function getRawContent()
    {
        return $this->getProperty('rawContent');
    }

    /**
     * @param string $rawContent
     */
    public function setRawContent(string $rawContent = null)
    {
        $this->setProperty('rawContent', $rawContent);
    }
}
