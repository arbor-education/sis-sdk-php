<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PersonProfessionalQualification extends ModelBase
{
    public const PERSON = 'person';

    public const QUALIFICATION_NAME = 'qualificationName';

    public const DATE_AWARDED = 'dateAwarded';

    public const AWARDING_INSTITUTION = 'awardingInstitution';

    public const PROFESSIONAL_QUALIFICATION_TYPE = 'professionalQualificationType';

    public const PROFESSIONAL_QUALIFICATION_CLASS = 'professionalQualificationClass';

    public const FIRST_SUBJECT = 'firstSubject';

    public const SECOND_SUBJECT = 'secondSubject';

    public const ORIGIN_COUNTRY = 'originCountry';

    public const IS_VOCATIONAL_QUALIFICATION = 'isVocationalQualification';

    public const IS_VERIFIED = 'isVerified';

    protected $_resourceType = ResourceType::PERSON_PROFESSIONAL_QUALIFICATION;

    /**
     * @param Query $query
     * @return PersonProfessionalQualification[] | Collection
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

        $query->setResourceType(ResourceType::PERSON_PROFESSIONAL_QUALIFICATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonProfessionalQualification
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON_PROFESSIONAL_QUALIFICATION, $id);
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
    public function setPerson(\ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return string
     */
    public function getQualificationName()
    {
        return $this->getProperty('qualificationName');
    }

    /**
     * @param string $qualificationName
     */
    public function setQualificationName(string $qualificationName = null)
    {
        $this->setProperty('qualificationName', $qualificationName);
    }

    /**
     * @return \DateTime
     */
    public function getDateAwarded()
    {
        return $this->getProperty('dateAwarded');
    }

    /**
     * @param \DateTime $dateAwarded
     */
    public function setDateAwarded(\DateTime $dateAwarded = null)
    {
        $this->setProperty('dateAwarded', $dateAwarded);
    }

    /**
     * @return string
     */
    public function getAwardingInstitution()
    {
        return $this->getProperty('awardingInstitution');
    }

    /**
     * @param string $awardingInstitution
     */
    public function setAwardingInstitution(string $awardingInstitution = null)
    {
        $this->setProperty('awardingInstitution', $awardingInstitution);
    }

    /**
     * @return \Arbor\Model\ProfessionalQualificationType
     */
    public function getProfessionalQualificationType()
    {
        return $this->getProperty('professionalQualificationType');
    }

    /**
     * @param \Arbor\Model\ProfessionalQualificationType $professionalQualificationType
     */
    public function setProfessionalQualificationType(\Arbor\Model\ProfessionalQualificationType $professionalQualificationType = null)
    {
        $this->setProperty('professionalQualificationType', $professionalQualificationType);
    }

    /**
     * @return \Arbor\Model\ProfessionalQualificationClass
     */
    public function getProfessionalQualificationClass()
    {
        return $this->getProperty('professionalQualificationClass');
    }

    /**
     * @param \Arbor\Model\ProfessionalQualificationClass
     * $professionalQualificationClass
     */
    public function setProfessionalQualificationClass(\Arbor\Model\ProfessionalQualificationClass $professionalQualificationClass = null)
    {
        $this->setProperty('professionalQualificationClass', $professionalQualificationClass);
    }

    /**
     * @return \Arbor\Model\ProfessionalQualificationSubject
     */
    public function getFirstSubject()
    {
        return $this->getProperty('firstSubject');
    }

    /**
     * @param \Arbor\Model\ProfessionalQualificationSubject $firstSubject
     */
    public function setFirstSubject(\Arbor\Model\ProfessionalQualificationSubject $firstSubject = null)
    {
        $this->setProperty('firstSubject', $firstSubject);
    }

    /**
     * @return \Arbor\Model\ProfessionalQualificationSubject
     */
    public function getSecondSubject()
    {
        return $this->getProperty('secondSubject');
    }

    /**
     * @param \Arbor\Model\ProfessionalQualificationSubject $secondSubject
     */
    public function setSecondSubject(\Arbor\Model\ProfessionalQualificationSubject $secondSubject = null)
    {
        $this->setProperty('secondSubject', $secondSubject);
    }

    /**
     * @return \Arbor\Model\Country
     */
    public function getOriginCountry()
    {
        return $this->getProperty('originCountry');
    }

    /**
     * @param \Arbor\Model\Country $originCountry
     */
    public function setOriginCountry(\Arbor\Model\Country $originCountry = null)
    {
        $this->setProperty('originCountry', $originCountry);
    }

    /**
     * @return bool
     */
    public function getIsVocationalQualification()
    {
        return $this->getProperty('isVocationalQualification');
    }

    /**
     * @param bool $isVocationalQualification
     */
    public function setIsVocationalQualification(bool $isVocationalQualification = null)
    {
        $this->setProperty('isVocationalQualification', $isVocationalQualification);
    }

    /**
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->getProperty('isVerified');
    }

    /**
     * @param bool $isVerified
     */
    public function setIsVerified(bool $isVerified = null)
    {
        $this->setProperty('isVerified', $isVerified);
    }
}
