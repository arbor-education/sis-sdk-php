<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProfilePictureImportJobFileMatch extends ModelBase
{
    const PROFILE_PICTURE_IMPORT_JOB_FILE = 'profilePictureImportJobFile';

    const PERSON = 'person';

    protected $_resourceType = ResourceType::PROFILE_PICTURE_IMPORT_JOB_FILE_MATCH;

    /**
     * @param Query $query
     * @return ProfilePictureImportJobFileMatch[] | Collection
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

        $query->setResourceType(ResourceType::PROFILE_PICTURE_IMPORT_JOB_FILE_MATCH);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProfilePictureImportJobFileMatch
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROFILE_PICTURE_IMPORT_JOB_FILE_MATCH, $id);
    }

    /**
     * @return ProfilePictureImportJobFile
     */
    public function getProfilePictureImportJobFile()
    {
        return $this->getProperty('profilePictureImportJobFile');
    }

    /**
     * @param ProfilePictureImportJobFile $profilePictureImportJobFile
     */
    public function setProfilePictureImportJobFile(ProfilePictureImportJobFile $profilePictureImportJobFile = null)
    {
        $this->setProperty('profilePictureImportJobFile', $profilePictureImportJobFile);
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
}
