<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class OutboundLetterRecipient extends ModelBase
{
    const OUTBOUND_LETTER = 'outboundLetter';

    const RECIPIENT_NAME = 'recipientName';

    const RECIPIENT = 'recipient';

    const DRAFT_RECIPIENT = 'draftRecipient';

    const RECIPIENT_INDEX = 'recipientIndex';

    protected $_resourceType = ResourceType::OUTBOUND_LETTER_RECIPIENT;

    /**
     * @param Query $query
     * @return OutboundLetterRecipient[] | Collection
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

        $query->setResourceType(ResourceType::OUTBOUND_LETTER_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OutboundLetterRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OUTBOUND_LETTER_RECIPIENT, $id);
    }

    /**
     * @return OutboundLetter
     */
    public function getOutboundLetter()
    {
        return $this->getProperty('outboundLetter');
    }

    /**
     * @param OutboundLetter $outboundLetter
     */
    public function setOutboundLetter(OutboundLetter $outboundLetter = null)
    {
        $this->setProperty('outboundLetter', $outboundLetter);
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
        return $this->getProperty('recipientName');
    }

    /**
     * @param string $recipientName
     */
    public function setRecipientName($recipientName = null)
    {
        $this->setProperty('recipientName', $recipientName);
    }

    /**
     * @return ModelBase
     */
    public function getRecipient()
    {
        return $this->getProperty('recipient');
    }

    /**
     * @param ModelBase $recipient
     */
    public function setRecipient(ModelBase $recipient = null)
    {
        $this->setProperty('recipient', $recipient);
    }

    /**
     * @return MessageDraftRecipient
     */
    public function getDraftRecipient()
    {
        return $this->getProperty('draftRecipient');
    }

    /**
     * @param MessageDraftRecipient $draftRecipient
     */
    public function setDraftRecipient(MessageDraftRecipient $draftRecipient = null)
    {
        $this->setProperty('draftRecipient', $draftRecipient);
    }

    /**
     * @return int
     */
    public function getRecipientIndex()
    {
        return $this->getProperty('recipientIndex');
    }

    /**
     * @param int $recipientIndex
     */
    public function setRecipientIndex($recipientIndex = null)
    {
        $this->setProperty('recipientIndex', $recipientIndex);
    }

}
