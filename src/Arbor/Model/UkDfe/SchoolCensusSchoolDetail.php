<?php

namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolCensusSchoolDetail extends ModelBase
{

    const SCHOOL_CENSUS = 'schoolCensus';

    const TEEN_MOTHER_PLACES = 'teenMotherPlaces';

    const FREE_SCHOOL_MEALS_TAKEN = 'freeSchoolMealsTaken';

    const ADMISSIONS_APPEALS_JSON = 'admissionsAppealsJson';

    const ADMISSIONS_APPEALS_LODGED = 'admissionsAppealsLodged';

    const ADMISSIONS_APPEALS_WITHDRAWN = 'admissionsAppealsWithdrawn';

    const ADMISSIONS_APPEALS_HEARD = 'admissionsAppealsHeard';

    const ADMISSIONS_APPEALS_UPHELD = 'admissionsAppealsUpheld';

    const ADMISSIONS_APPEALS_REJECTED = 'admissionsAppealsRejected';

    const SCHOOL_LUNCH_TAKEN_STUDENT_IDS = 'schoolLunchTakenStudentIds';

    const PART_TIME_STUDENT_JSON = 'partTimeStudentJson';

    const QUALIFICATION_RESULTS_JSON = 'qualificationResultsJson';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_CENSUS_SCHOOL_DETAIL;

    /**
     * @param Query $query
     * @return SchoolCensusSchoolDetail[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SCHOOL_CENSUS_SCHOOL_DETAIL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolCensusSchoolDetail
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_CENSUS_SCHOOL_DETAIL, $id);
    }

    /**
     * @return SchoolCensus
     */
    public function getSchoolCensus()
    {
        return $this->getProperty('schoolCensus');
    }

    /**
     * @param SchoolCensus $schoolCensus
     */
    public function setSchoolCensus(SchoolCensus $schoolCensus = null)
    {
        $this->setProperty('schoolCensus', $schoolCensus);
    }

    /**
     * @return int
     */
    public function getTeenMotherPlaces()
    {
        return $this->getProperty('teenMotherPlaces');
    }

    /**
     * @param int $teenMotherPlaces
     */
    public function setTeenMotherPlaces($teenMotherPlaces = null)
    {
        $this->setProperty('teenMotherPlaces', $teenMotherPlaces);
    }

    /**
     * @return int
     */
    public function getFreeSchoolMealsTaken()
    {
        return $this->getProperty('freeSchoolMealsTaken');
    }

    /**
     * @param int $freeSchoolMealsTaken
     */
    public function setFreeSchoolMealsTaken($freeSchoolMealsTaken = null)
    {
        $this->setProperty('freeSchoolMealsTaken', $freeSchoolMealsTaken);
    }

    /**
     * @return string
     */
    public function getAdmissionsAppealsJson()
    {
        return $this->getProperty('admissionsAppealsJson');
    }

    /**
     * @param string $admissionsAppealsJson
     */
    public function setAdmissionsAppealsJson($admissionsAppealsJson = null)
    {
        $this->setProperty('admissionsAppealsJson', $admissionsAppealsJson);
    }

    /**
     * @return int
     */
    public function getAdmissionsAppealsLodged()
    {
        return $this->getProperty('admissionsAppealsLodged');
    }

    /**
     * @param int $admissionsAppealsLodged
     */
    public function setAdmissionsAppealsLodged($admissionsAppealsLodged = null)
    {
        $this->setProperty('admissionsAppealsLodged', $admissionsAppealsLodged);
    }

    /**
     * @return int
     */
    public function getAdmissionsAppealsWithdrawn()
    {
        return $this->getProperty('admissionsAppealsWithdrawn');
    }

    /**
     * @param int $admissionsAppealsWithdrawn
     */
    public function setAdmissionsAppealsWithdrawn($admissionsAppealsWithdrawn = null)
    {
        $this->setProperty('admissionsAppealsWithdrawn', $admissionsAppealsWithdrawn);
    }

    /**
     * @return int
     */
    public function getAdmissionsAppealsHeard()
    {
        return $this->getProperty('admissionsAppealsHeard');
    }

    /**
     * @param int $admissionsAppealsHeard
     */
    public function setAdmissionsAppealsHeard($admissionsAppealsHeard = null)
    {
        $this->setProperty('admissionsAppealsHeard', $admissionsAppealsHeard);
    }

    /**
     * @return int
     */
    public function getAdmissionsAppealsUpheld()
    {
        return $this->getProperty('admissionsAppealsUpheld');
    }

    /**
     * @param int $admissionsAppealsUpheld
     */
    public function setAdmissionsAppealsUpheld($admissionsAppealsUpheld = null)
    {
        $this->setProperty('admissionsAppealsUpheld', $admissionsAppealsUpheld);
    }

    /**
     * @return int
     */
    public function getAdmissionsAppealsRejected()
    {
        return $this->getProperty('admissionsAppealsRejected');
    }

    /**
     * @param int $admissionsAppealsRejected
     */
    public function setAdmissionsAppealsRejected($admissionsAppealsRejected = null)
    {
        $this->setProperty('admissionsAppealsRejected', $admissionsAppealsRejected);
    }

    /**
     * @return string
     */
    public function getSchoolLunchTakenStudentIds()
    {
        return $this->getProperty('schoolLunchTakenStudentIds');
    }

    /**
     * @param string $schoolLunchTakenStudentIds
     */
    public function setSchoolLunchTakenStudentIds($schoolLunchTakenStudentIds = null)
    {
        $this->setProperty('schoolLunchTakenStudentIds', $schoolLunchTakenStudentIds);
    }

    /**
     * @return string
     */
    public function getPartTimeStudentJson()
    {
        return $this->getProperty('partTimeStudentJson');
    }

    /**
     * @param string $partTimeStudentJson
     */
    public function setPartTimeStudentJson($partTimeStudentJson = null)
    {
        $this->setProperty('partTimeStudentJson', $partTimeStudentJson);
    }

    /**
     * @return string
     */
    public function getQualificationResultsJson()
    {
        return $this->getProperty('qualificationResultsJson');
    }

    /**
     * @param string $qualificationResultsJson
     */
    public function setQualificationResultsJson($qualificationResultsJson = null)
    {
        $this->setProperty('qualificationResultsJson', $qualificationResultsJson);
    }


}
