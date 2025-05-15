<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolCensus extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ACADEMIC_YEAR = 'academicYear';

    public const GOVERNMENT_DOCUMENT_VERSION = 'governmentDocumentVersion';

    public const SCHOOL_CENSUS_DATABASE_CLOSURE_DATE = 'schoolCensusDatabaseClosureDate';

    public const SCHOOL_CENSUS_REFERENCE_DATE = 'schoolCensusReferenceDate';

    public const SCHOOL_CENSUS_RETURN_DEADLINE_DATE = 'schoolCensusReturnDeadlineDate';

    public const SCHOOL_CENSUS_SPECIFIC_DATETIME = 'schoolCensusSpecificDatetime';

    public const SCHOOL_CENSUS_TERM = 'schoolCensusTerm';

    public const SCHOOL_CENSUS_YEAR = 'schoolCensusYear';

    protected $_resourceType = ResourceType::CYMRU_SCHOOL_CENSUS;

    /**
     * @param Query $query
     * @return SchoolCensus[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SCHOOL_CENSUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolCensus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SCHOOL_CENSUS, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return string
     */
    public function getGovernmentDocumentVersion()
    {
        return $this->getProperty('governmentDocumentVersion');
    }

    /**
     * @param string $governmentDocumentVersion
     */
    public function setGovernmentDocumentVersion(string $governmentDocumentVersion = null)
    {
        $this->setProperty('governmentDocumentVersion', $governmentDocumentVersion);
    }

    /**
     * @return \DateTime
     */
    public function getSchoolCensusDatabaseClosureDate()
    {
        return $this->getProperty('schoolCensusDatabaseClosureDate');
    }

    /**
     * @param \DateTime $schoolCensusDatabaseClosureDate
     */
    public function setSchoolCensusDatabaseClosureDate(\DateTime $schoolCensusDatabaseClosureDate = null)
    {
        $this->setProperty('schoolCensusDatabaseClosureDate', $schoolCensusDatabaseClosureDate);
    }

    /**
     * @return \DateTime
     */
    public function getSchoolCensusReferenceDate()
    {
        return $this->getProperty('schoolCensusReferenceDate');
    }

    /**
     * @param \DateTime $schoolCensusReferenceDate
     */
    public function setSchoolCensusReferenceDate(\DateTime $schoolCensusReferenceDate = null)
    {
        $this->setProperty('schoolCensusReferenceDate', $schoolCensusReferenceDate);
    }

    /**
     * @return \DateTime
     */
    public function getSchoolCensusReturnDeadlineDate()
    {
        return $this->getProperty('schoolCensusReturnDeadlineDate');
    }

    /**
     * @param \DateTime $schoolCensusReturnDeadlineDate
     */
    public function setSchoolCensusReturnDeadlineDate(\DateTime $schoolCensusReturnDeadlineDate = null)
    {
        $this->setProperty('schoolCensusReturnDeadlineDate', $schoolCensusReturnDeadlineDate);
    }

    /**
     * @return \DateTime
     */
    public function getSchoolCensusSpecificDatetime()
    {
        return $this->getProperty('schoolCensusSpecificDatetime');
    }

    /**
     * @param \DateTime $schoolCensusSpecificDatetime
     */
    public function setSchoolCensusSpecificDatetime(\DateTime $schoolCensusSpecificDatetime = null)
    {
        $this->setProperty('schoolCensusSpecificDatetime', $schoolCensusSpecificDatetime);
    }

    /**
     * @return string
     */
    public function getSchoolCensusTerm()
    {
        return $this->getProperty('schoolCensusTerm');
    }

    /**
     * @param string $schoolCensusTerm
     */
    public function setSchoolCensusTerm(string $schoolCensusTerm = null)
    {
        $this->setProperty('schoolCensusTerm', $schoolCensusTerm);
    }

    /**
     * @return string
     */
    public function getSchoolCensusYear()
    {
        return $this->getProperty('schoolCensusYear');
    }

    /**
     * @param string $schoolCensusYear
     */
    public function setSchoolCensusYear(string $schoolCensusYear = null)
    {
        $this->setProperty('schoolCensusYear', $schoolCensusYear);
    }
}
