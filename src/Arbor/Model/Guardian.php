<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Guardian extends ModelBase
{

    const PERSON = 'person';

    const EMPLOYER = 'employer';

    const RELIGION = 'religion';

    const ETHNICITY = 'ethnicity';

    const JOB_POSITION = 'jobPosition';

    const BLOOD_GROUP = 'bloodGroup';

    const SHARE_CONTACT_DETAILS = 'shareContactDetails';

    const PREFERRED_CONTACT_METHOD = 'preferredContactMethod';

    const LEGACY_SYSTEM_ID = 'legacySystemId';

    const IS_KEY_WORKER = 'isKeyWorker';

    const IS_ACTIVE_OUTGOING_SYNC = 'isActiveOutgoingSync';

    const IS_ACTIVE_INCOMING_SYNC = 'isActiveIncomingSync';

    protected $_resourceType = ResourceType::GUARDIAN;

    /**
     * @param Query $query
     * @return Guardian[] | Collection
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

        $query->setResourceType(ResourceType::GUARDIAN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Guardian
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GUARDIAN, $id);
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return string
     */
    public function getEmployer()
    {
        return $this->getProperty('employer');
    }

    /**
     * @param string $employer
     */
    public function setEmployer($employer = null)
    {
        $this->setProperty('employer', $employer);
    }

    /**
     * @return Religion
     */
    public function getReligion()
    {
        return $this->getProperty('religion');
    }

    /**
     * @param Religion $religion
     */
    public function setReligion(Religion $religion = null)
    {
        $this->setProperty('religion', $religion);
    }

    /**
     * @return Ethnicity
     */
    public function getEthnicity()
    {
        return $this->getProperty('ethnicity');
    }

    /**
     * @param Ethnicity $ethnicity
     */
    public function setEthnicity(Ethnicity $ethnicity = null)
    {
        $this->setProperty('ethnicity', $ethnicity);
    }

    /**
     * @return string
     */
    public function getJobPosition()
    {
        return $this->getProperty('jobPosition');
    }

    /**
     * @param string $jobPosition
     */
    public function setJobPosition($jobPosition = null)
    {
        $this->setProperty('jobPosition', $jobPosition);
    }

    /**
     * @return string
     */
    public function getBloodGroup()
    {
        return $this->getProperty('bloodGroup');
    }

    /**
     * @param string $bloodGroup
     */
    public function setBloodGroup($bloodGroup = null)
    {
        $this->setProperty('bloodGroup', $bloodGroup);
    }

    /**
     * @return bool
     */
    public function getShareContactDetails()
    {
        return $this->getProperty('shareContactDetails');
    }

    /**
     * @param bool $shareContactDetails
     */
    public function setShareContactDetails($shareContactDetails = null)
    {
        $this->setProperty('shareContactDetails', $shareContactDetails);
    }

    /**
     * @return string
     */
    public function getPreferredContactMethod()
    {
        return $this->getProperty('preferredContactMethod');
    }

    /**
     * @param string $preferredContactMethod
     */
    public function setPreferredContactMethod($preferredContactMethod = null)
    {
        $this->setProperty('preferredContactMethod', $preferredContactMethod);
    }

    /**
     * @return string
     */
    public function getLegacySystemId()
    {
        return $this->getProperty('legacySystemId');
    }

    /**
     * @param string $legacySystemId
     */
    public function setLegacySystemId($legacySystemId = null)
    {
        $this->setProperty('legacySystemId', $legacySystemId);
    }

    /**
     * @return bool
     */
    public function getIsKeyWorker()
    {
        return $this->getProperty('isKeyWorker');
    }

    /**
     * @param bool $isKeyWorker
     */
    public function setIsKeyWorker($isKeyWorker = null)
    {
        $this->setProperty('isKeyWorker', $isKeyWorker);
    }

    /**
     * @return bool
     */
    public function getIsActiveOutgoingSync()
    {
        return $this->getProperty('isActiveOutgoingSync');
    }

    /**
     * @param bool $isActiveOutgoingSync
     */
    public function setIsActiveOutgoingSync($isActiveOutgoingSync = null)
    {
        $this->setProperty('isActiveOutgoingSync', $isActiveOutgoingSync);
    }

    /**
     * @return bool
     */
    public function getIsActiveIncomingSync()
    {
        return $this->getProperty('isActiveIncomingSync');
    }

    /**
     * @param bool $isActiveIncomingSync
     */
    public function setIsActiveIncomingSync($isActiveIncomingSync = null)
    {
        $this->setProperty('isActiveIncomingSync', $isActiveIncomingSync);
    }


}
