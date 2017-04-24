<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;

class SchoolCensus extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ACADEMIC_YEAR = 'academicYear';

    const SCHOOL_CENSUS_YEAR = 'schoolCensusYear';

    const SCHOOL_CENSUS_TERM = 'schoolCensusTerm';

    const SCHOOL_CENSUS_REFERENCE_DATE = 'schoolCensusReferenceDate';

    const SCHOOL_CENSUS_RETURN_DEADLINE_DATE = 'schoolCensusReturnDeadlineDate';

    const SCHOOL_CENSUS_DATABASE_CLOSURE_DATE = 'schoolCensusDatabaseClosureDate';

    const SCHOOL_CENSUS_SPECIFIC_TIME = 'schoolCensusSpecificTime';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_CENSUS;

    /**
     * @param \Arbor\Query\Query $query
     * @return SchoolCensus[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_SchoolCensus");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SchoolCensus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_CENSUS, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty("academicYear");
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty("academicYear", $academicYear);
    }

    /**
     * @return string
     */
    public function getSchoolCensusYear()
    {
        return $this->getProperty("schoolCensusYear");
    }

    /**
     * @param string $schoolCensusYear
     */
    public function setSchoolCensusYear($schoolCensusYear = null)
    {
        $this->setProperty("schoolCensusYear", $schoolCensusYear);
    }

    /**
     * @return string
     */
    public function getSchoolCensusTerm()
    {
        return $this->getProperty("schoolCensusTerm");
    }

    /**
     * @param string $schoolCensusTerm
     */
    public function setSchoolCensusTerm($schoolCensusTerm = null)
    {
        $this->setProperty("schoolCensusTerm", $schoolCensusTerm);
    }

    /**
     * @return \DateTime
     */
    public function getSchoolCensusReferenceDate()
    {
        return $this->getProperty("schoolCensusReferenceDate");
    }

    /**
     * @param \DateTime $schoolCensusReferenceDate
     */
    public function setSchoolCensusReferenceDate(\DateTime $schoolCensusReferenceDate = null)
    {
        $this->setProperty("schoolCensusReferenceDate", $schoolCensusReferenceDate);
    }

    /**
     * @return \DateTime
     */
    public function getSchoolCensusReturnDeadlineDate()
    {
        return $this->getProperty("schoolCensusReturnDeadlineDate");
    }

    /**
     * @param \DateTime $schoolCensusReturnDeadlineDate
     */
    public function setSchoolCensusReturnDeadlineDate(\DateTime $schoolCensusReturnDeadlineDate = null)
    {
        $this->setProperty("schoolCensusReturnDeadlineDate", $schoolCensusReturnDeadlineDate);
    }

    /**
     * @return \DateTime
     */
    public function getSchoolCensusDatabaseClosureDate()
    {
        return $this->getProperty("schoolCensusDatabaseClosureDate");
    }

    /**
     * @param \DateTime $schoolCensusDatabaseClosureDate
     */
    public function setSchoolCensusDatabaseClosureDate(\DateTime $schoolCensusDatabaseClosureDate = null)
    {
        $this->setProperty("schoolCensusDatabaseClosureDate", $schoolCensusDatabaseClosureDate);
    }

    /**
     * @return \DateTime
     */
    public function getSchoolCensusSpecificTime()
    {
        return $this->getProperty("schoolCensusSpecificTime");
    }

    /**
     * @param \DateTime $schoolCensusSpecificTime
     */
    public function setSchoolCensusSpecificTime(\DateTime $schoolCensusSpecificTime = null)
    {
        $this->setProperty("schoolCensusSpecificTime", $schoolCensusSpecificTime);
    }
}
