<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolCensusPupilReconciliation extends ModelBase
{

    const SCHOOL_CENSUS = 'schoolCensus';

    const PART_TIME_NOT_IN = 'partTimeNotIn';

    const PRIVATE_STUDY = 'privateStudy';

    const AT_OTHER_SCHOOL = 'atOtherSchool';

    const WORK_EXPERIENCE = 'workExperience';

    const F_E_COLLEGE = 'fECollege';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_CENSUS_PUPIL_RECONCILIATION;

    /**
     * @param Query $query
     * @return SchoolCensusPupilReconciliation[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SCHOOL_CENSUS_PUPIL_RECONCILIATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolCensusPupilReconciliation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_CENSUS_PUPIL_RECONCILIATION, $id);
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
    public function getPartTimeNotIn()
    {
        return $this->getProperty('partTimeNotIn');
    }

    /**
     * @param int $partTimeNotIn
     */
    public function setPartTimeNotIn($partTimeNotIn = null)
    {
        $this->setProperty('partTimeNotIn', $partTimeNotIn);
    }

    /**
     * @return int
     */
    public function getPrivateStudy()
    {
        return $this->getProperty('privateStudy');
    }

    /**
     * @param int $privateStudy
     */
    public function setPrivateStudy($privateStudy = null)
    {
        $this->setProperty('privateStudy', $privateStudy);
    }

    /**
     * @return int
     */
    public function getAtOtherSchool()
    {
        return $this->getProperty('atOtherSchool');
    }

    /**
     * @param int $atOtherSchool
     */
    public function setAtOtherSchool($atOtherSchool = null)
    {
        $this->setProperty('atOtherSchool', $atOtherSchool);
    }

    /**
     * @return int
     */
    public function getWorkExperience()
    {
        return $this->getProperty('workExperience');
    }

    /**
     * @param int $workExperience
     */
    public function setWorkExperience($workExperience = null)
    {
        $this->setProperty('workExperience', $workExperience);
    }

    /**
     * @return int
     */
    public function getFECollege()
    {
        return $this->getProperty('fECollege');
    }

    /**
     * @param int $fECollege
     */
    public function setFECollege($fECollege = null)
    {
        $this->setProperty('fECollege', $fECollege);
    }


}
