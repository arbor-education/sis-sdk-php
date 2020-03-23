<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\AcademicYear;

class SchoolWorkforceCensus extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ACADEMIC_YEAR = 'academicYear';

    const CENSUS_YEAR = 'censusYear';

    const CENSUS_REFERENCE_DATE = 'censusReferenceDate';

    const CENSUS_SUBMISSION_DEADLINE_DATE = 'censusSubmissionDeadlineDate';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS;

    /**
     * @param Query $query
     * @return SchoolWorkforceCensus[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolWorkforceCensus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS, $id);
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return string
     */
    public function getCensusYear()
    {
        return $this->getProperty('censusYear');
    }

    /**
     * @param string $censusYear
     */
    public function setCensusYear($censusYear = null)
    {
        $this->setProperty('censusYear', $censusYear);
    }

    /**
     * @return \DateTime
     */
    public function getCensusReferenceDate()
    {
        return $this->getProperty('censusReferenceDate');
    }

    /**
     * @param \DateTime $censusReferenceDate
     */
    public function setCensusReferenceDate(\DateTime $censusReferenceDate = null)
    {
        $this->setProperty('censusReferenceDate', $censusReferenceDate);
    }

    /**
     * @return \DateTime
     */
    public function getCensusSubmissionDeadlineDate()
    {
        return $this->getProperty('censusSubmissionDeadlineDate');
    }

    /**
     * @param \DateTime $censusSubmissionDeadlineDate
     */
    public function setCensusSubmissionDeadlineDate(\DateTime $censusSubmissionDeadlineDate = null)
    {
        $this->setProperty('censusSubmissionDeadlineDate', $censusSubmissionDeadlineDate);
    }


}
