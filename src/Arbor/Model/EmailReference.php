<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmailReference extends ModelBase
{
    public const EMAIL = 'email';

    public const REFERENCE_TYPE = 'referenceType';

    public const REFERENCED_MESSAGE_ID = 'referencedMessageId';

    public const REFERENCE_EMAIL = 'referenceEmail';

    public const REFERENCE_INDEX = 'referenceIndex';

    protected $_resourceType = ResourceType::EMAIL_REFERENCE;

    /**
     * @param Query $query
     * @return EmailReference[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_REFERENCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailReference
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_REFERENCE, $id);
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
    public function getReferenceType()
    {
        return $this->getProperty('referenceType');
    }

    /**
     * @param string $referenceType
     */
    public function setReferenceType(string $referenceType = null)
    {
        $this->setProperty('referenceType', $referenceType);
    }

    /**
     * @return string
     */
    public function getReferencedMessageId()
    {
        return $this->getProperty('referencedMessageId');
    }

    /**
     * @param string $referencedMessageId
     */
    public function setReferencedMessageId(string $referencedMessageId = null)
    {
        $this->setProperty('referencedMessageId', $referencedMessageId);
    }

    /**
     * @return \Arbor\Model\Email
     */
    public function getReferenceEmail()
    {
        return $this->getProperty('referenceEmail');
    }

    /**
     * @param \Arbor\Model\Email $referenceEmail
     */
    public function setReferenceEmail(\Arbor\Model\Email $referenceEmail = null)
    {
        $this->setProperty('referenceEmail', $referenceEmail);
    }

    /**
     * @return int
     */
    public function getReferenceIndex()
    {
        return $this->getProperty('referenceIndex');
    }

    /**
     * @param int $referenceIndex
     */
    public function setReferenceIndex(int $referenceIndex = null)
    {
        $this->setProperty('referenceIndex', $referenceIndex);
    }
}
