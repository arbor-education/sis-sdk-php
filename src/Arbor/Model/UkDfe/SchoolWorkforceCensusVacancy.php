<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolWorkforceCensusVacancy extends ModelBase
{
    public const SCHOOL_WORKFORCE_CENSUS = 'schoolWorkforceCensus';

    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const SCHOOL_WORKFORCE_VACANCY_POST = 'schoolWorkforceVacancyPost';

    public const SUBJECT = 'subject';

    public const TENURE = 'tenure';

    public const VACANCY_TEMPORARILY_FILLED = 'vacancyTemporarilyFilled';

    public const VACANCY_ADVERTISED = 'vacancyAdvertised';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_VACANCY;

    /**
     * @param Query $query
     * @return SchoolWorkforceCensusVacancy[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_VACANCY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolWorkforceCensusVacancy
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_VACANCY, $id);
    }

    /**
     * @return \Arbor\Model\UkDfe\SchoolWorkforceCensus
     */
    public function getSchoolWorkforceCensus()
    {
        return $this->getProperty('schoolWorkforceCensus');
    }

    /**
     * @param \Arbor\Model\UkDfe\SchoolWorkforceCensus $schoolWorkforceCensus
     */
    public function setSchoolWorkforceCensus(\Arbor\Model\UkDfe\SchoolWorkforceCensus $schoolWorkforceCensus = null)
    {
        $this->setProperty('schoolWorkforceCensus', $schoolWorkforceCensus);
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
     * @return \Arbor\Model\UkDfe\SchoolWorkforceVacancyPost
     */
    public function getSchoolWorkforceVacancyPost()
    {
        return $this->getProperty('schoolWorkforceVacancyPost');
    }

    /**
     * @param \Arbor\Model\UkDfe\SchoolWorkforceVacancyPost $schoolWorkforceVacancyPost
     */
    public function setSchoolWorkforceVacancyPost(\Arbor\Model\UkDfe\SchoolWorkforceVacancyPost $schoolWorkforceVacancyPost = null)
    {
        $this->setProperty('schoolWorkforceVacancyPost', $schoolWorkforceVacancyPost);
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
     * @return string
     */
    public function getVacancyTemporarilyFilled()
    {
        return $this->getProperty('vacancyTemporarilyFilled');
    }

    /**
     * @param string $vacancyTemporarilyFilled
     */
    public function setVacancyTemporarilyFilled(string $vacancyTemporarilyFilled = null)
    {
        $this->setProperty('vacancyTemporarilyFilled', $vacancyTemporarilyFilled);
    }

    /**
     * @return string
     */
    public function getVacancyAdvertised()
    {
        return $this->getProperty('vacancyAdvertised');
    }

    /**
     * @param string $vacancyAdvertised
     */
    public function setVacancyAdvertised(string $vacancyAdvertised = null)
    {
        $this->setProperty('vacancyAdvertised', $vacancyAdvertised);
    }
}
