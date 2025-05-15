<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Person extends ModelBase
{
    public const GENDER = 'gender';

    public const GENDER_IDENTITY = 'genderIdentity';

    public const GENDER_IDENTITY_PREFERRED_TERM = 'genderIdentityPreferredTerm';

    public const TITLE = 'title';

    public const MARITAL_STATUS = 'maritalStatus';

    public const LEGAL_FIRST_NAME = 'legalFirstName';

    public const LEGAL_MIDDLE_NAMES = 'legalMiddleNames';

    public const LEGAL_LAST_NAME = 'legalLastName';

    public const PREFERRED_FIRST_NAME = 'preferredFirstName';

    public const PREFERRED_LAST_NAME = 'preferredLastName';

    public const DATE_OF_BIRTH = 'dateOfBirth';

    public const COUNTRY_OF_BIRTH = 'countryOfBirth';

    public const DECEASED = 'deceased';

    public const DATE_OF_DEATH = 'dateOfDeath';

    protected $_resourceType = ResourceType::PERSON;

    /**
     * @param Query $query
     * @return Person[] | Collection
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

        $query->setResourceType(ResourceType::PERSON);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Person
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON, $id);
    }

    /**
     * @return \Arbor\Model\Gender
     */
    public function getGender()
    {
        return $this->getProperty('gender');
    }

    /**
     * @param \Arbor\Model\Gender $gender
     */
    public function setGender(\Arbor\Model\Gender $gender = null)
    {
        $this->setProperty('gender', $gender);
    }

    /**
     * @return \Arbor\Model\GenderIdentity
     */
    public function getGenderIdentity()
    {
        return $this->getProperty('genderIdentity');
    }

    /**
     * @param \Arbor\Model\GenderIdentity $genderIdentity
     */
    public function setGenderIdentity(\Arbor\Model\GenderIdentity $genderIdentity = null)
    {
        $this->setProperty('genderIdentity', $genderIdentity);
    }

    /**
     * @return string
     */
    public function getGenderIdentityPreferredTerm()
    {
        return $this->getProperty('genderIdentityPreferredTerm');
    }

    /**
     * @param string $genderIdentityPreferredTerm
     */
    public function setGenderIdentityPreferredTerm(string $genderIdentityPreferredTerm = null)
    {
        $this->setProperty('genderIdentityPreferredTerm', $genderIdentityPreferredTerm);
    }

    /**
     * @return \Arbor\Model\Title
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param \Arbor\Model\Title $title
     */
    public function setTitle(\Arbor\Model\Title $title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return \Arbor\Model\MaritalStatus
     */
    public function getMaritalStatus()
    {
        return $this->getProperty('maritalStatus');
    }

    /**
     * @param \Arbor\Model\MaritalStatus $maritalStatus
     */
    public function setMaritalStatus(\Arbor\Model\MaritalStatus $maritalStatus = null)
    {
        $this->setProperty('maritalStatus', $maritalStatus);
    }

    /**
     * @return string
     */
    public function getLegalFirstName()
    {
        return $this->getProperty('legalFirstName');
    }

    /**
     * @param string $legalFirstName
     */
    public function setLegalFirstName(string $legalFirstName = null)
    {
        $this->setProperty('legalFirstName', $legalFirstName);
    }

    /**
     * @return string
     */
    public function getLegalMiddleNames()
    {
        return $this->getProperty('legalMiddleNames');
    }

    /**
     * @param string $legalMiddleNames
     */
    public function setLegalMiddleNames(string $legalMiddleNames = null)
    {
        $this->setProperty('legalMiddleNames', $legalMiddleNames);
    }

    /**
     * @return string
     */
    public function getLegalLastName()
    {
        return $this->getProperty('legalLastName');
    }

    /**
     * @param string $legalLastName
     */
    public function setLegalLastName(string $legalLastName = null)
    {
        $this->setProperty('legalLastName', $legalLastName);
    }

    /**
     * @return string
     */
    public function getPreferredFirstName()
    {
        return $this->getProperty('preferredFirstName');
    }

    /**
     * @param string $preferredFirstName
     */
    public function setPreferredFirstName(string $preferredFirstName = null)
    {
        $this->setProperty('preferredFirstName', $preferredFirstName);
    }

    /**
     * @return string
     */
    public function getPreferredLastName()
    {
        return $this->getProperty('preferredLastName');
    }

    /**
     * @param string $preferredLastName
     */
    public function setPreferredLastName(string $preferredLastName = null)
    {
        $this->setProperty('preferredLastName', $preferredLastName);
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->getProperty('dateOfBirth');
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth(\DateTime $dateOfBirth = null)
    {
        $this->setProperty('dateOfBirth', $dateOfBirth);
    }

    /**
     * @return \Arbor\Model\Country
     */
    public function getCountryOfBirth()
    {
        return $this->getProperty('countryOfBirth');
    }

    /**
     * @param \Arbor\Model\Country $countryOfBirth
     */
    public function setCountryOfBirth(\Arbor\Model\Country $countryOfBirth = null)
    {
        $this->setProperty('countryOfBirth', $countryOfBirth);
    }

    /**
     * @return bool
     */
    public function getDeceased()
    {
        return $this->getProperty('deceased');
    }

    /**
     * @param bool $deceased
     */
    public function setDeceased(bool $deceased = null)
    {
        $this->setProperty('deceased', $deceased);
    }

    /**
     * @return \DateTime
     */
    public function getDateOfDeath()
    {
        return $this->getProperty('dateOfDeath');
    }

    /**
     * @param \DateTime $dateOfDeath
     */
    public function setDateOfDeath(\DateTime $dateOfDeath = null)
    {
        $this->setProperty('dateOfDeath', $dateOfDeath);
    }
}
