<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicUnitEnrolmentImport extends ModelBase
{
    const NAME = 'name';

    const ACADEMIC_YEAR = 'academicYear';

    const IMPORT_STARTED_DATETIME = 'importStartedDatetime';

    const IMPORT_COMPLETED_DATETIME = 'importCompletedDatetime';

    const ENROLMENT_START_DATE = 'enrolmentStartDate';

    const ENROLMENT_END_DATE = 'enrolmentEndDate';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_ENROLMENT_IMPORT;

    /**
     * @param Query $query
     * @return AcademicUnitEnrolmentImport[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_ENROLMENT_IMPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitEnrolmentImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_ENROLMENT_IMPORT, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
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
     * @return \DateTime
     */
    public function getImportStartedDatetime()
    {
        return $this->getProperty('importStartedDatetime');
    }

    /**
     * @param \DateTime $importStartedDatetime
     */
    public function setImportStartedDatetime(\DateTime $importStartedDatetime = null)
    {
        $this->setProperty('importStartedDatetime', $importStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getImportCompletedDatetime()
    {
        return $this->getProperty('importCompletedDatetime');
    }

    /**
     * @param \DateTime $importCompletedDatetime
     */
    public function setImportCompletedDatetime(\DateTime $importCompletedDatetime = null)
    {
        $this->setProperty('importCompletedDatetime', $importCompletedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentStartDate()
    {
        return $this->getProperty('enrolmentStartDate');
    }

    /**
     * @param \DateTime $enrolmentStartDate
     */
    public function setEnrolmentStartDate(\DateTime $enrolmentStartDate = null)
    {
        $this->setProperty('enrolmentStartDate', $enrolmentStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentEndDate()
    {
        return $this->getProperty('enrolmentEndDate');
    }

    /**
     * @param \DateTime $enrolmentEndDate
     */
    public function setEnrolmentEndDate(\DateTime $enrolmentEndDate = null)
    {
        $this->setProperty('enrolmentEndDate', $enrolmentEndDate);
    }
}
