<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CommunicationTemplate extends ModelBase
{
    public const NAME = 'name';

    public const IDENTIFIER = 'identifier';

    public const EMAIL_SUBJECT = 'emailSubject';

    public const EMAIL_BODY = 'emailBody';

    public const SMS_BODY = 'smsBody';

    public const LETTER_BODY = 'letterBody';

    public const IN_APP_MESSAGE_BODY = 'inAppMessageBody';

    public const COMMUNICATION_TEMPLATE_DEFINITION_CLASS = 'communicationTemplateDefinitionClass';

    public const CUSTOM_REPORT = 'customReport';

    protected $_resourceType = ResourceType::COMMUNICATION_TEMPLATE;

    /**
     * @param Query $query
     * @return CommunicationTemplate[] | Collection
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
    public function setName(string $name = null)
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
    public function setIdentifier(string $identifier = null)
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
    public function setEmailSubject(string $emailSubject = null)
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
    public function setEmailBody(string $emailBody = null)
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
    public function setSmsBody(string $smsBody = null)
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
    public function setLetterBody(string $letterBody = null)
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
    public function setInAppMessageBody(string $inAppMessageBody = null)
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
    public function setCommunicationTemplateDefinitionClass(string $communicationTemplateDefinitionClass = null)
    {
        $this->setProperty('communicationTemplateDefinitionClass', $communicationTemplateDefinitionClass);
    }

    /**
     * @return \Arbor\Model\CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param \Arbor\Model\CustomReport $customReport
     */
    public function setCustomReport(\Arbor\Model\CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }
}
