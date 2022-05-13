<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class OutboundLetter extends ModelBase
{
    const OUTBOUND_LETTER_DRAFT = 'outboundLetterDraft';

    const SENDER = 'sender';

    const DOCUMENT_LAYOUT = 'documentLayout';

    const BODY = 'body';

    const GENERATED_DATETIME = 'generatedDatetime';

    const ACTION_REQUIRED_DATETIME = 'actionRequiredDatetime';

    protected $_resourceType = ResourceType::OUTBOUND_LETTER;

    /**
     * @param Query $query
     * @return OutboundLetter[] | Collection
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
     * @return OutboundLetterDraft
     */
    public function getOutboundLetterDraft()
    {
        return $this->getProperty('outboundLetterDraft');
    }

    /**
     * @param OutboundLetterDraft $outboundLetterDraft
     */
    public function setOutboundLetterDraft(OutboundLetterDraft $outboundLetterDraft = null)
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
    public function setSender(ModelBase $sender = null)
    {
        $this->setProperty('sender', $sender);
    }

    /**
     * @return DocumentLayout
     */
    public function getDocumentLayout()
    {
        return $this->getProperty('documentLayout');
    }

    /**
     * @param DocumentLayout $documentLayout
     */
    public function setDocumentLayout(DocumentLayout $documentLayout = null)
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
    public function setBody($body = null)
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
