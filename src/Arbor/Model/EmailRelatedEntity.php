<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmailRelatedEntity extends ModelBase
{
    public const EMAIL = 'email';

    public const EMAIL_TYPE = 'emailType';

    public const RELATED_ENTITY = 'relatedEntity';

    public const RECIPIENT = 'recipient';

    protected $_resourceType = ResourceType::EMAIL_RELATED_ENTITY;

    /**
     * @param Query $query
     * @return EmailRelatedEntity[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_RELATED_ENTITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailRelatedEntity
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_RELATED_ENTITY, $id);
    }

    /**
     * @return \Arbor\Model\Email
     */
    public function getEmail()
    {
        return $this->getProperty('email');
    }

    /**
     * @param \Arbor\Model\Email $email
     */
    public function setEmail(\Arbor\Model\Email $email = null)
    {
        $this->setProperty('email', $email);
    }

    /**
     * @return string
     */
    public function getEmailType()
    {
        return $this->getProperty('emailType');
    }

    /**
     * @param string $emailType
     */
    public function setEmailType(string $emailType = null)
    {
        $this->setProperty('emailType', $emailType);
    }

    /**
     * @return \Arbor\Model\Order
     */
    public function getRelatedEntity()
    {
        return $this->getProperty('relatedEntity');
    }

    /**
     * @param \Arbor\Model\Order $relatedEntity
     */
    public function setRelatedEntity(\Arbor\Model\Order $relatedEntity = null)
    {
        $this->setProperty('relatedEntity', $relatedEntity);
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
}
