<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProfilePictureImportJobFile extends ModelBase
{
    const PROFILE_PICTURE_IMPORT_JOB = 'profilePictureImportJob';

    const VALID_IMAGE = 'validImage';

    const VALID_IDENTIFIER = 'validIdentifier';

    const PERSON = 'person';

    const CONFIRMED_DATETIME = 'confirmedDatetime';

    protected $_resourceType = ResourceType::PROFILE_PICTURE_IMPORT_JOB_FILE;

    /**
     * @param Query $query
     * @return ProfilePictureImportJobFile[] | Collection
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

        $query->setResourceType(ResourceType::PROFILE_PICTURE_IMPORT_JOB_FILE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProfilePictureImportJobFile
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROFILE_PICTURE_IMPORT_JOB_FILE, $id);
    }

    /**
     * @return ProfilePictureImportJob
     */
    public function getProfilePictureImportJob()
    {
        return $this->getProperty('profilePictureImportJob');
    }

    /**
     * @param ProfilePictureImportJob $profilePictureImportJob
     */
    public function setProfilePictureImportJob(ProfilePictureImportJob $profilePictureImportJob = null)
    {
        $this->setProperty('profilePictureImportJob', $profilePictureImportJob);
    }

    /**
     * @return bool
     */
    public function getValidImage()
    {
        return $this->getProperty('validImage');
    }

    /**
     * @param bool $validImage
     */
    public function setValidImage($validImage = null)
    {
        $this->setProperty('validImage', $validImage);
    }

    /**
     * @return bool
     */
    public function getValidIdentifier()
    {
        return $this->getProperty('validIdentifier');
    }

    /**
     * @param bool $validIdentifier
     */
    public function setValidIdentifier($validIdentifier = null)
    {
        $this->setProperty('validIdentifier', $validIdentifier);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return \DateTime
     */
    public function getConfirmedDatetime()
    {
        return $this->getProperty('confirmedDatetime');
    }

    /**
     * @param \DateTime $confirmedDatetime
     */
    public function setConfirmedDatetime(\DateTime $confirmedDatetime = null)
    {
        $this->setProperty('confirmedDatetime', $confirmedDatetime);
    }
}
