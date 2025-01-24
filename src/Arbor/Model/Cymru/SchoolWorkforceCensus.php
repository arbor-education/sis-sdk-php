<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolWorkforceCensus extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ACADEMIC_YEAR = 'academicYear';

    public const GOVERNMENT_VERSION = 'governmentVersion';

    public const DOCUMENT_VERSION = 'documentVersion';

    public const CENSUS_YEAR = 'censusYear';

    public const CENSUS_REFERENCE_DATE = 'censusReferenceDate';

    public const CENSUS_SUBMISSION_DEADLINE_DATE = 'censusSubmissionDeadlineDate';

    protected $_resourceType = ResourceType::CYMRU_SCHOOL_WORKFORCE_CENSUS;

    /**
     * @param Query $query
     * @return SchoolWorkforceCensus[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SCHOOL_WORKFORCE_CENSUS);

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

        return $gateway->retrieve(ResourceType::CYMRU_SCHOOL_WORKFORCE_CENSUS, $id);
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
    public function getGovernmentVersion()
    {
        return $this->getProperty('governmentVersion');
    }

    /**
     * @param string $governmentVersion
     */
    public function setGovernmentVersion(string $governmentVersion = null)
    {
        $this->setProperty('governmentVersion', $governmentVersion);
    }

    /**
     * @return string
     */
    public function getDocumentVersion()
    {
        return $this->getProperty('documentVersion');
    }

    /**
     * @param string $documentVersion
     */
    public function setDocumentVersion(string $documentVersion = null)
    {
        $this->setProperty('documentVersion', $documentVersion);
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
    public function setCensusYear(string $censusYear = null)
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
