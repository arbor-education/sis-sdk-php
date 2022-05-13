<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmailReference extends ModelBase
{
    const EMAIL = 'email';

    const REFERENCE_TYPE = 'referenceType';

    const REFERENCED_MESSAGE_ID = 'referencedMessageId';

    const REFERENCE_EMAIL = 'referenceEmail';

    const REFERENCE_INDEX = 'referenceIndex';

    protected $_resourceType = ResourceType::EMAIL_REFERENCE;

    /**
     * @param Query $query
     * @return EmailReference[] | Collection
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
     * @return Email
     */
    public function getEmail()
    {
        return $this->getProperty('email');
    }

    /**
     * @param Email $email
     */
    public function setEmail(Email $email = null)
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
    public function setReferenceType($referenceType = null)
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
    public function setReferencedMessageId($referencedMessageId = null)
    {
        $this->setProperty('referencedMessageId', $referencedMessageId);
    }

    /**
     * @return Email
     */
    public function getReferenceEmail()
    {
        return $this->getProperty('referenceEmail');
    }

    /**
     * @param Email $referenceEmail
     */
    public function setReferenceEmail(Email $referenceEmail = null)
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
    public function setReferenceIndex($referenceIndex = null)
    {
        $this->setProperty('referenceIndex', $referenceIndex);
    }

}
