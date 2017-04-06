<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Email;

class EmailReference extends ModelBase
{

    const EMAIL = 'email';

    const REFERENCE_TYPE = 'referenceType';

    const REFERENCED_MESSAGE_ID = 'referencedMessageId';

    const REFERENCE_EMAIL = 'referenceEmail';

    const REFERENCE_INDEX = 'referenceIndex';

    protected $_resourceType = ResourceType::EMAIL_REFERENCE;

    /**
     * @param \Arbor\Query\Query $query
     * @return EmailReference[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("EmailReference");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EmailReference
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::EMAIL_REFERENCE, $id);
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
        return $this->getProperty("email");
    }

    /**
     * @param Email $email
     */
    public function setEmail(Email $email = null)
    {
        $this->setProperty("email", $email);
    }

    /**
     * @return string
     */
    public function getReferenceType()
    {
        return $this->getProperty("referenceType");
    }

    /**
     * @param string $referenceType
     */
    public function setReferenceType($referenceType = null)
    {
        $this->setProperty("referenceType", $referenceType);
    }

    /**
     * @return string
     */
    public function getReferencedMessageId()
    {
        return $this->getProperty("referencedMessageId");
    }

    /**
     * @param string $referencedMessageId
     */
    public function setReferencedMessageId($referencedMessageId = null)
    {
        $this->setProperty("referencedMessageId", $referencedMessageId);
    }

    /**
     * @return Email
     */
    public function getReferenceEmail()
    {
        return $this->getProperty("referenceEmail");
    }

    /**
     * @param Email $referenceEmail
     */
    public function setReferenceEmail(Email $referenceEmail = null)
    {
        $this->setProperty("referenceEmail", $referenceEmail);
    }

    /**
     * @return int
     */
    public function getReferenceIndex()
    {
        return $this->getProperty("referenceIndex");
    }

    /**
     * @param int $referenceIndex
     */
    public function setReferenceIndex($referenceIndex = null)
    {
        $this->setProperty("referenceIndex", $referenceIndex);
    }


}
