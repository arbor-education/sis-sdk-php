<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\EducationalInstitution;
use Arbor\Model\Subject;

class SchoolWorkforceCensusVacancy extends ModelBase
{

    const SCHOOL_WORKFORCE_CENSUS = 'schoolWorkforceCensus';

    const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    const SCHOOL_WORKFORCE_VACANCY_POST = 'schoolWorkforceVacancyPost';

    const SUBJECT = 'subject';

    const TENURE = 'tenure';

    const VACANCY_TEMPORARILY_FILLED = 'vacancyTemporarilyFilled';

    const VACANCY_ADVERTISED = 'vacancyAdvertised';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_VACANCY;

    /**
     * @param Query $query
     * @return SchoolWorkforceCensusVacancy[] | Collection
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
     * @return SchoolWorkforceCensus
     */
    public function getSchoolWorkforceCensus()
    {
        return $this->getProperty('schoolWorkforceCensus');
    }

    /**
     * @param SchoolWorkforceCensus $schoolWorkforceCensus
     */
    public function setSchoolWorkforceCensus(SchoolWorkforceCensus $schoolWorkforceCensus = null)
    {
        $this->setProperty('schoolWorkforceCensus', $schoolWorkforceCensus);
    }

    /**
     * @return EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty('educationalInstitution', $educationalInstitution);
    }

    /**
     * @return SchoolWorkforceVacancyPost
     */
    public function getSchoolWorkforceVacancyPost()
    {
        return $this->getProperty('schoolWorkforceVacancyPost');
    }

    /**
     * @param SchoolWorkforceVacancyPost $schoolWorkforceVacancyPost
     */
    public function setSchoolWorkforceVacancyPost(SchoolWorkforceVacancyPost $schoolWorkforceVacancyPost = null)
    {
        $this->setProperty('schoolWorkforceVacancyPost', $schoolWorkforceVacancyPost);
    }

    /**
     * @return Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param Subject $subject
     */
    public function setSubject(Subject $subject = null)
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
    public function setTenure($tenure = null)
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
    public function setVacancyTemporarilyFilled($vacancyTemporarilyFilled = null)
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
    public function setVacancyAdvertised($vacancyAdvertised = null)
    {
        $this->setProperty('vacancyAdvertised', $vacancyAdvertised);
    }


}
