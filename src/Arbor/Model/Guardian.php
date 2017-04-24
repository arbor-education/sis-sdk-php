<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Person;
use \Arbor\Model\Religion;
use \Arbor\Model\Ethnicity;

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

    protected $_resourceType = ResourceType::GUARDIAN;

    /**
     * @param \Arbor\Query\Query $query
     * @return Guardian[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Guardian");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Guardian
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GUARDIAN, $id);
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->getProperty("person");
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person = null)
    {
        $this->setProperty("person", $person);
    }

    /**
     * @return string
     */
    public function getEmployer()
    {
        return $this->getProperty("employer");
    }

    /**
     * @param string $employer
     */
    public function setEmployer($employer = null)
    {
        $this->setProperty("employer", $employer);
    }

    /**
     * @return Religion
     */
    public function getReligion()
    {
        return $this->getProperty("religion");
    }

    /**
     * @param Religion $religion
     */
    public function setReligion(Religion $religion = null)
    {
        $this->setProperty("religion", $religion);
    }

    /**
     * @return Ethnicity
     */
    public function getEthnicity()
    {
        return $this->getProperty("ethnicity");
    }

    /**
     * @param Ethnicity $ethnicity
     */
    public function setEthnicity(Ethnicity $ethnicity = null)
    {
        $this->setProperty("ethnicity", $ethnicity);
    }

    /**
     * @return string
     */
    public function getJobPosition()
    {
        return $this->getProperty("jobPosition");
    }

    /**
     * @param string $jobPosition
     */
    public function setJobPosition($jobPosition = null)
    {
        $this->setProperty("jobPosition", $jobPosition);
    }

    /**
     * @return string
     */
    public function getBloodGroup()
    {
        return $this->getProperty("bloodGroup");
    }

    /**
     * @param string $bloodGroup
     */
    public function setBloodGroup($bloodGroup = null)
    {
        $this->setProperty("bloodGroup", $bloodGroup);
    }

    /**
     * @return bool
     */
    public function getShareContactDetails()
    {
        return $this->getProperty("shareContactDetails");
    }

    /**
     * @param bool $shareContactDetails
     */
    public function setShareContactDetails($shareContactDetails = null)
    {
        $this->setProperty("shareContactDetails", $shareContactDetails);
    }

    /**
     * @return string
     */
    public function getPreferredContactMethod()
    {
        return $this->getProperty("preferredContactMethod");
    }

    /**
     * @param string $preferredContactMethod
     */
    public function setPreferredContactMethod($preferredContactMethod = null)
    {
        $this->setProperty("preferredContactMethod", $preferredContactMethod);
    }
}
