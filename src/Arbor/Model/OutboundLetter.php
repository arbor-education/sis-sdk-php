<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OutboundLetter extends ModelBase
{
    public const OUTBOUND_LETTER_DRAFT = 'outboundLetterDraft';

    public const SENDER = 'sender';

    public const DOCUMENT_LAYOUT = 'documentLayout';

    public const BODY = 'body';

    public const GENERATED_DATETIME = 'generatedDatetime';

    public const ACTION_REQUIRED_DATETIME = 'actionRequiredDatetime';

    protected $_resourceType = ResourceType::OUTBOUND_LETTER;

    /**
     * @param Query $query
     * @return OutboundLetter[] | Collection
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

        $query->setResourceType(ResourceType::OUTBOUND_LETTER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OutboundLetter
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OUTBOUND_LETTER, $id);
    }

    /**
     * @return \Arbor\Model\OutboundLetterDraft
     */
    public function getOutboundLetterDraft()
    {
        return $this->getProperty('outboundLetterDraft');
    }

    /**
     * @param \Arbor\Model\OutboundLetterDraft $outboundLetterDraft
     */
    public function setOutboundLetterDraft(\Arbor\Model\OutboundLetterDraft $outboundLetterDraft = null)
    {
        $this->setProperty('outboundLetterDraft', $outboundLetterDraft);
    }

    /**
     * @return ModelBase
     */
    public function getSender()
    {
        return $this->getProperty('sender');
    }

    /**
     * @param ModelBase $sender
     */
    public function setSender(\ModelBase $sender = null)
    {
        $this->setProperty('sender', $sender);
    }

    /**
     * @return \Arbor\Model\DocumentLayout
     */
    public function getDocumentLayout()
    {
        return $this->getProperty('documentLayout');
    }

    /**
     * @param \Arbor\Model\DocumentLayout $documentLayout
     */
    public function setDocumentLayout(\Arbor\Model\DocumentLayout $documentLayout = null)
    {
        $this->setProperty('documentLayout', $documentLayout);
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->getProperty('body');
    }

    /**
     * @param string $body
     */
    public function setBody(string $body = null)
    {
        $this->setProperty('body', $body);
    }

    /**
     * @return \DateTime
     */
    public function getGeneratedDatetime()
    {
        return $this->getProperty('generatedDatetime');
    }

    /**
     * @param \DateTime $generatedDatetime
     */
    public function setGeneratedDatetime(\DateTime $generatedDatetime = null)
    {
        $this->setProperty('generatedDatetime', $generatedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getActionRequiredDatetime()
    {
        return $this->getProperty('actionRequiredDatetime');
    }

    /**
     * @param \DateTime $actionRequiredDatetime
     */
    public function setActionRequiredDatetime(\DateTime $actionRequiredDatetime = null)
    {
        $this->setProperty('actionRequiredDatetime', $actionRequiredDatetime);
    }
}
