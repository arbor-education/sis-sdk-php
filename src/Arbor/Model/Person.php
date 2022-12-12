<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Person extends ModelBase
{
    const GENDER = 'gender';

    const GENDER_IDENTITY = 'genderIdentity';

    const GENDER_IDENTITY_PREFERRED_TERM = 'genderIdentityPreferredTerm';

    const TITLE = 'title';

    const MARITAL_STATUS = 'maritalStatus';

    const LEGAL_FIRST_NAME = 'legalFirstName';

    const LEGAL_MIDDLE_NAMES = 'legalMiddleNames';

    const LEGAL_LAST_NAME = 'legalLastName';

    const PREFERRED_FIRST_NAME = 'preferredFirstName';

    const PREFERRED_LAST_NAME = 'preferredLastName';

    const DATE_OF_BIRTH = 'dateOfBirth';

    const COUNTRY_OF_BIRTH = 'countryOfBirth';

    const DECEASED = 'deceased';

    const DATE_OF_DEATH = 'dateOfDeath';

    protected $_resourceType = ResourceType::PERSON;

    /**
     * @param Query $query
     * @return Person[] | Collection
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
     * @return Gender
     */
    public function getGender()
    {
        return $this->getProperty('gender');
    }

    /**
     * @param Gender $gender
     */
    public function setGender(Gender $gender = null)
    {
        $this->setProperty('gender', $gender);
    }

    /**
     * @return GenderIdentity
     */
    public function getGenderIdentity()
    {
        return $this->getProperty('genderIdentity');
    }

    /**
     * @param GenderIdentity $genderIdentity
     */
    public function setGenderIdentity(GenderIdentity $genderIdentity = null)
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
    public function setGenderIdentityPreferredTerm($genderIdentityPreferredTerm = null)
    {
        $this->setProperty('genderIdentityPreferredTerm', $genderIdentityPreferredTerm);
    }

    /**
     * @return Title
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param Title $title
     */
    public function setTitle(Title $title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return MaritalStatus
     */
    public function getMaritalStatus()
    {
        return $this->getProperty('maritalStatus');
    }

    /**
     * @param MaritalStatus $maritalStatus
     */
    public function setMaritalStatus(MaritalStatus $maritalStatus = null)
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
    public function setLegalFirstName($legalFirstName = null)
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
    public function setLegalMiddleNames($legalMiddleNames = null)
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
    public function setLegalLastName($legalLastName = null)
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
    public function setPreferredFirstName($preferredFirstName = null)
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
    public function setPreferredLastName($preferredLastName = null)
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
     * @return Country
     */
    public function getCountryOfBirth()
    {
        return $this->getProperty('countryOfBirth');
    }

    /**
     * @param Country $countryOfBirth
     */
    public function setCountryOfBirth(Country $countryOfBirth = null)
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
    public function setDeceased($deceased = null)
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
