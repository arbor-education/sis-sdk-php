<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class OutboundLetterDraft extends ModelBase
{

    const DOCUMENT_LAYOUT = 'documentLayout';

    const SENDER = 'sender';

    const BODY = 'body';

    const CUSTOM_REPORT = 'customReport';

    const COMBINE_MESSAGES_TO_SAME_RECIPIENT = 'combineMessagesToSameRecipient';

    const COMBINE_MESSAGES_TO_SAME_HOUSEHOLD = 'combineMessagesToSameHousehold';

    const GENERATION_STARTED_DATETIME = 'generationStartedDatetime';

    const GENERATION_COMPLETED_DATETIME = 'generationCompletedDatetime';

    const CONTEXT = 'context';

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
    public function getCombineMessagesToSameRecipient()
    {
        return $this->getProperty('combineMessagesToSameRecipient');
    }

    /**
     * @param bool $combineMessagesToSameRecipient
     */
    public function setCombineMessagesToSameRecipient($combineMessagesToSameRecipient = null)
    {
        $this->setProperty('combineMessagesToSameRecipient', $combineMessagesToSameRecipient);
    }

    /**
     * @return bool
     */
    public function getCombineMessagesToSameHousehold()
    {
        return $this->getProperty('combineMessagesToSameHousehold');
    }

    /**
     * @param bool $combineMessagesToSameHousehold
     */
    public function setCombineMessagesToSameHousehold($combineMessagesToSameHousehold = null)
    {
        $this->setProperty('combineMessagesToSameHousehold', $combineMessagesToSameHousehold);
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

    /**
     * @return ModelBase
     */
    public function getContext()
    {
        return $this->getProperty('context');
    }

    /**
     * @param ModelBase $context
     */
    public function setContext(ModelBase $context = null)
    {
        $this->setProperty('context', $context);
    }


}
