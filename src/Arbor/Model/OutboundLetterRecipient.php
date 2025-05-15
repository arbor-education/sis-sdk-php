<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OutboundLetterRecipient extends ModelBase
{
    public const OUTBOUND_LETTER = 'outboundLetter';

    public const RECIPIENT_NAME = 'recipientName';

    public const RECIPIENT = 'recipient';

    public const DRAFT_RECIPIENT = 'draftRecipient';

    public const RECIPIENT_INDEX = 'recipientIndex';

    protected $_resourceType = ResourceType::OUTBOUND_LETTER_RECIPIENT;

    /**
     * @param Query $query
     * @return OutboundLetterRecipient[] | Collection
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
     * @return \Arbor\Model\OutboundLetter
     */
    public function getOutboundLetter()
    {
        return $this->getProperty('outboundLetter');
    }

    /**
     * @param \Arbor\Model\OutboundLetter $outboundLetter
     */
    public function setOutboundLetter(\Arbor\Model\OutboundLetter $outboundLetter = null)
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
    public function setRecipientName(string $recipientName = null)
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
    public function setRecipient(\ModelBase $recipient = null)
    {
        $this->setProperty('recipient', $recipient);
    }

    /**
     * @return \Arbor\Model\MessageDraftRecipient
     */
    public function getDraftRecipient()
    {
        return $this->getProperty('draftRecipient');
    }

    /**
     * @param \Arbor\Model\MessageDraftRecipient $draftRecipient
     */
    public function setDraftRecipient(\Arbor\Model\MessageDraftRecipient $draftRecipient = null)
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
    public function setRecipientIndex(int $recipientIndex = null)
    {
        $this->setProperty('recipientIndex', $recipientIndex);
    }
}
