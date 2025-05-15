<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolVacancy extends ModelBase
{
    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const SCHOOL_WORKFORCE_CENSUS_BUSINESS_ROLE = 'schoolWorkforceCensusBusinessRole';

    public const SUBJECT = 'subject';

    public const CURRICULUM_GRADE = 'curriculumGrade';

    public const WELSH_MEDIUM_VACANCY = 'welshMediumVacancy';

    public const TENURE = 'tenure';

    public const VACANCY_START_DATE = 'vacancyStartDate';

    public const VACANCY_END_DATE = 'vacancyEndDate';

    public const TOTAL_NUMBER_OF_APPLICATIONS = 'totalNumberOfApplications';

    public const VACANCY_ADVERTISED_COUNT = 'vacancyAdvertisedCount';

    public const APPOINTMENT_MADE = 'appointmentMade';

    public const VACANCY_COVER = 'vacancyCover';

    protected $_resourceType = ResourceType::CYMRU_SCHOOL_VACANCY;

    /**
     * @param Query $query
     * @return SchoolVacancy[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SCHOOL_VACANCY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolVacancy
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SCHOOL_VACANCY, $id);
    }

    /**
     * @return \Arbor\Model\EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param \Arbor\Model\EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(\Arbor\Model\EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty('educationalInstitution', $educationalInstitution);
    }

    /**
     * @return \Arbor\Model\Cymru\SchoolWorkforceCensusBusinessRole
     */
    public function getSchoolWorkforceCensusBusinessRole()
    {
        return $this->getProperty('schoolWorkforceCensusBusinessRole');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolWorkforceCensusBusinessRole
     * $schoolWorkforceCensusBusinessRole
     */
    public function setSchoolWorkforceCensusBusinessRole(\Arbor\Model\Cymru\SchoolWorkforceCensusBusinessRole $schoolWorkforceCensusBusinessRole = null)
    {
        $this->setProperty('schoolWorkforceCensusBusinessRole', $schoolWorkforceCensusBusinessRole);
    }

    /**
     * @return \Arbor\Model\Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param \Arbor\Model\Subject $subject
     */
    public function setSubject(\Arbor\Model\Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return \Arbor\Model\CurriculumGrade
     */
    public function getCurriculumGrade()
    {
        return $this->getProperty('curriculumGrade');
    }

    /**
     * @param \Arbor\Model\CurriculumGrade $curriculumGrade
     */
    public function setCurriculumGrade(\Arbor\Model\CurriculumGrade $curriculumGrade = null)
    {
        $this->setProperty('curriculumGrade', $curriculumGrade);
    }

    /**
     * @return bool
     */
    public function getWelshMediumVacancy()
    {
        return $this->getProperty('welshMediumVacancy');
    }

    /**
     * @param bool $welshMediumVacancy
     */
    public function setWelshMediumVacancy(bool $welshMediumVacancy = null)
    {
        $this->setProperty('welshMediumVacancy', $welshMediumVacancy);
    }

    /**
     * @return string
     */
    public function getTenure()
    {
        return $this->getProperty('tenure');
    }

    /**
     * @param string $tenure
     */
    public function setTenure(string $tenure = null)
    {
        $this->setProperty('tenure', $tenure);
    }

    /**
     * @return \DateTime
     */
    public function getVacancyStartDate()
    {
        return $this->getProperty('vacancyStartDate');
    }

    /**
     * @param \DateTime $vacancyStartDate
     */
    public function setVacancyStartDate(\DateTime $vacancyStartDate = null)
    {
        $this->setProperty('vacancyStartDate', $vacancyStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getVacancyEndDate()
    {
        return $this->getProperty('vacancyEndDate');
    }

    /**
     * @param \DateTime $vacancyEndDate
     */
    public function setVacancyEndDate(\DateTime $vacancyEndDate = null)
    {
        $this->setProperty('vacancyEndDate', $vacancyEndDate);
    }

    /**
     * @return int
     */
    public function getTotalNumberOfApplications()
    {
        return $this->getProperty('totalNumberOfApplications');
    }

    /**
     * @param int $totalNumberOfApplications
     */
    public function setTotalNumberOfApplications(int $totalNumberOfApplications = null)
    {
        $this->setProperty('totalNumberOfApplications', $totalNumberOfApplications);
    }

    /**
     * @return int
     */
    public function getVacancyAdvertisedCount()
    {
        return $this->getProperty('vacancyAdvertisedCount');
    }

    /**
     * @param int $vacancyAdvertisedCount
     */
    public function setVacancyAdvertisedCount(int $vacancyAdvertisedCount = null)
    {
        $this->setProperty('vacancyAdvertisedCount', $vacancyAdvertisedCount);
    }

    /**
     * @return bool
     */
    public function getAppointmentMade()
    {
        return $this->getProperty('appointmentMade');
    }

    /**
     * @param bool $appointmentMade
     */
    public function setAppointmentMade(bool $appointmentMade = null)
    {
        $this->setProperty('appointmentMade', $appointmentMade);
    }

    /**
     * @return string
     */
    public function getVacancyCover()
    {
        return $this->getProperty('vacancyCover');
    }

    /**
     * @param string $vacancyCover
     */
    public function setVacancyCover(string $vacancyCover = null)
    {
        $this->setProperty('vacancyCover', $vacancyCover);
    }
}
