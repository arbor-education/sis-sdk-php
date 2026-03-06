<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmailPart extends ModelBase
{
    public const EMAIL = 'email';

    public const MIME_CONTENT_ID = 'mimeContentId';

    public const DISPOSITION = 'disposition';

    public const FILENAME = 'filename';

    public const TYPE_MAJOR = 'typeMajor';

    public const TYPE_MINOR = 'typeMinor';

    public const DESCRIPTION = 'description';

    public const SUBJECT = 'subject';

    public const PARENT_EMAIL_PART = 'parentEmailPart';

    protected $_resourceType = ResourceType::EMAIL_PART;

    /**
     * @param Query $query
     * @return EmailPart[] | Collection
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
    public function getMimeContentId()
    {
        return $this->getProperty('mimeContentId');
    }

    /**
     * @param string $mimeContentId
     */
    public function setMimeContentId(string $mimeContentId = null)
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
    public function setDisposition(string $disposition = null)
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
    public function setFilename(string $filename = null)
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
    public function setTypeMajor(string $typeMajor = null)
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
    public function setTypeMinor(string $typeMinor = null)
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
    public function setDescription(string $description = null)
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
    public function setSubject(string $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return \Arbor\Model\EmailPart
     */
    public function getParentEmailPart()
    {
        return $this->getProperty('parentEmailPart');
    }

    /**
     * @param \Arbor\Model\EmailPart $parentEmailPart
     */
    public function setParentEmailPart(\Arbor\Model\EmailPart $parentEmailPart = null)
    {
        $this->setProperty('parentEmailPart', $parentEmailPart);
    }
}
