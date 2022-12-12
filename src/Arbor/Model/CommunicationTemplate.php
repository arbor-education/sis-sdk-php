<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CommunicationTemplate extends ModelBase
{
    const NAME = 'name';

    const IDENTIFIER = 'identifier';

    const EMAIL_SUBJECT = 'emailSubject';

    const EMAIL_BODY = 'emailBody';

    const SMS_BODY = 'smsBody';

    const LETTER_BODY = 'letterBody';

    const IN_APP_MESSAGE_BODY = 'inAppMessageBody';

    const COMMUNICATION_TEMPLATE_DEFINITION_CLASS = 'communicationTemplateDefinitionClass';

    const CUSTOM_REPORT = 'customReport';

    protected $_resourceType = ResourceType::COMMUNICATION_TEMPLATE;

    /**
     * @param Query $query
     * @return CommunicationTemplate[] | Collection
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

        $query->setResourceType(ResourceType::COMMUNICATION_TEMPLATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CommunicationTemplate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COMMUNICATION_TEMPLATE, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
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
    public function setIdentifier($identifier = null)
    {
        $this->setProperty('identifier', $identifier);
    }

    /**
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->getProperty('emailSubject');
    }

    /**
     * @param string $emailSubject
     */
    public function setEmailSubject($emailSubject = null)
    {
        $this->setProperty('emailSubject', $emailSubject);
    }

    /**
     * @return string
     */
    public function getEmailBody()
    {
        return $this->getProperty('emailBody');
    }

    /**
     * @param string $emailBody
     */
    public function setEmailBody($emailBody = null)
    {
        $this->setProperty('emailBody', $emailBody);
    }

    /**
     * @return string
     */
    public function getSmsBody()
    {
        return $this->getProperty('smsBody');
    }

    /**
     * @param string $smsBody
     */
    public function setSmsBody($smsBody = null)
    {
        $this->setProperty('smsBody', $smsBody);
    }

    /**
     * @return string
     */
    public function getLetterBody()
    {
        return $this->getProperty('letterBody');
    }

    /**
     * @param string $letterBody
     */
    public function setLetterBody($letterBody = null)
    {
        $this->setProperty('letterBody', $letterBody);
    }

    /**
     * @return string
     */
    public function getInAppMessageBody()
    {
        return $this->getProperty('inAppMessageBody');
    }

    /**
     * @param string $inAppMessageBody
     */
    public function setInAppMessageBody($inAppMessageBody = null)
    {
        $this->setProperty('inAppMessageBody', $inAppMessageBody);
    }

    /**
     * @return string
     */
    public function getCommunicationTemplateDefinitionClass()
    {
        return $this->getProperty('communicationTemplateDefinitionClass');
    }

    /**
     * @param string $communicationTemplateDefinitionClass
     */
    public function setCommunicationTemplateDefinitionClass($communicationTemplateDefinitionClass = null)
    {
        $this->setProperty('communicationTemplateDefinitionClass', $communicationTemplateDefinitionClass);
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
}
