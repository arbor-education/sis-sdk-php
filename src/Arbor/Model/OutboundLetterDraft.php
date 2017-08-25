<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class OutboundLetterDraft extends ModelBase
{
    const DOCUMENT_LAYOUT = 'documentLayout';

    const SENDING_PROFILE = 'sendingProfile';

    const BODY = 'body';

    const CUSTOM_REPORT = 'customReport';

    const REMOVE_DUPLICATE_MESSAGES = 'removeDuplicateMessages';

    const GENERATION_STARTED_DATETIME = 'generationStartedDatetime';

    const GENERATION_COMPLETED_DATETIME = 'generationCompletedDatetime';

    protected $_resourceType = ResourceType::OUTBOUND_LETTER_DRAFT;

    /**
     * @param Query $query
     * @return OutboundLetterDraft[] | Collection
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

        $query->setResourceType(ResourceType::OUTBOUND_LETTER_DRAFT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OutboundLetterDraft
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OUTBOUND_LETTER_DRAFT, $id);
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
     * @return SendingProfile
     */
    public function getSendingProfile()
    {
        return $this->getProperty('sendingProfile');
    }

    /**
     * @param SendingProfile $sendingProfile
     */
    public function setSendingProfile(SendingProfile $sendingProfile = null)
    {
        $this->setProperty('sendingProfile', $sendingProfile);
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
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }

    /**
     * @return bool
     */
    public function getRemoveDuplicateMessages()
    {
        return $this->getProperty('removeDuplicateMessages');
    }

    /**
     * @param bool $removeDuplicateMessages
     */
    public function setRemoveDuplicateMessages($removeDuplicateMessages = null)
    {
        $this->setProperty('removeDuplicateMessages', $removeDuplicateMessages);
    }

    /**
     * @return \DateTime
     */
    public function getGenerationStartedDatetime()
    {
        return $this->getProperty('generationStartedDatetime');
    }

    /**
     * @param \DateTime $generationStartedDatetime
     */
    public function setGenerationStartedDatetime(\DateTime $generationStartedDatetime = null)
    {
        $this->setProperty('generationStartedDatetime', $generationStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getGenerationCompletedDatetime()
    {
        return $this->getProperty('generationCompletedDatetime');
    }

    /**
     * @param \DateTime $generationCompletedDatetime
     */
    public function setGenerationCompletedDatetime(\DateTime $generationCompletedDatetime = null)
    {
        $this->setProperty('generationCompletedDatetime', $generationCompletedDatetime);
    }
}
