<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Guardian extends ModelBase
{
    public const PERSON = 'person';

    public const EMPLOYER = 'employer';

    public const RELIGION = 'religion';

    public const ETHNICITY = 'ethnicity';

    public const JOB_POSITION = 'jobPosition';

    public const BLOOD_GROUP = 'bloodGroup';

    public const SHARE_CONTACT_DETAILS = 'shareContactDetails';

    public const PREFERRED_CONTACT_METHOD = 'preferredContactMethod';

    public const LEGACY_SYSTEM_ID = 'legacySystemId';

    public const IS_KEY_WORKER = 'isKeyWorker';

    public const IS_ACTIVE_OUTGOING_SYNC = 'isActiveOutgoingSync';

    public const IS_ACTIVE_INCOMING_SYNC = 'isActiveIncomingSync';

    protected $_resourceType = ResourceType::GUARDIAN;

    /**
     * @param Query $query
     * @return Guardian[] | Collection
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
     * @return \Arbor\Model\Person
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param \Arbor\Model\Person $person
     */
    public function setPerson(\Arbor\Model\Person $person = null)
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
    public function setEmployer(string $employer = null)
    {
        $this->setProperty('employer', $employer);
    }

    /**
     * @return \Arbor\Model\Religion
     */
    public function getReligion()
    {
        return $this->getProperty('religion');
    }

    /**
     * @param \Arbor\Model\Religion $religion
     */
    public function setReligion(\Arbor\Model\Religion $religion = null)
    {
        $this->setProperty('religion', $religion);
    }

    /**
     * @return \Arbor\Model\Ethnicity
     */
    public function getEthnicity()
    {
        return $this->getProperty('ethnicity');
    }

    /**
     * @param \Arbor\Model\Ethnicity $ethnicity
     */
    public function setEthnicity(\Arbor\Model\Ethnicity $ethnicity = null)
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
    public function setJobPosition(string $jobPosition = null)
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
    public function setBloodGroup(string $bloodGroup = null)
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
    public function setShareContactDetails(bool $shareContactDetails = null)
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
    public function setPreferredContactMethod(string $preferredContactMethod = null)
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
    public function setLegacySystemId(string $legacySystemId = null)
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
    public function setIsKeyWorker(bool $isKeyWorker = null)
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
    public function setIsActiveOutgoingSync(bool $isActiveOutgoingSync = null)
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
    public function setIsActiveIncomingSync(bool $isActiveIncomingSync = null)
    {
        $this->setProperty('isActiveIncomingSync', $isActiveIncomingSync);
    }
}
