<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmailPart extends ModelBase
{
    const EMAIL = 'email';

    const MIME_CONTENT_ID = 'mimeContentId';

    const DISPOSITION = 'disposition';

    const FILENAME = 'filename';

    const TYPE_MAJOR = 'typeMajor';

    const TYPE_MINOR = 'typeMinor';

    const DESCRIPTION = 'description';

    const SUBJECT = 'subject';

    const PARENT_EMAIL_PART = 'parentEmailPart';

    protected $_resourceType = ResourceType::EMAIL_PART;

    /**
     * @param Query $query
     * @return EmailPart[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_PART);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailPart
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_PART, $id);
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
    public function getMimeContentId()
    {
        return $this->getProperty('mimeContentId');
    }

    /**
     * @param string $mimeContentId
     */
    public function setMimeContentId($mimeContentId = null)
    {
        $this->setProperty('mimeContentId', $mimeContentId);
    }

    /**
     * @return string
     */
    public function getDisposition()
    {
        return $this->getProperty('disposition');
    }

    /**
     * @param string $disposition
     */
    public function setDisposition($disposition = null)
    {
        $this->setProperty('disposition', $disposition);
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->getProperty('filename');
    }

    /**
     * @param string $filename
     */
    public function setFilename($filename = null)
    {
        $this->setProperty('filename', $filename);
    }

    /**
     * @return string
     */
    public function getTypeMajor()
    {
        return $this->getProperty('typeMajor');
    }

    /**
     * @param string $typeMajor
     */
    public function setTypeMajor($typeMajor = null)
    {
        $this->setProperty('typeMajor', $typeMajor);
    }

    /**
     * @return string
     */
    public function getTypeMinor()
    {
        return $this->getProperty('typeMinor');
    }

    /**
     * @param string $typeMinor
     */
    public function setTypeMinor($typeMinor = null)
    {
        $this->setProperty('typeMinor', $typeMinor);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return EmailPart
     */
    public function getParentEmailPart()
    {
        return $this->getProperty('parentEmailPart');
    }

    /**
     * @param EmailPart $parentEmailPart
     */
    public function setParentEmailPart(EmailPart $parentEmailPart = null)
    {
        $this->setProperty('parentEmailPart', $parentEmailPart);
    }
}
