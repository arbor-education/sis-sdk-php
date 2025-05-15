<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class UcasImportRecord extends ModelBase
{
    public const UCAS_IMPORT = 'ucasImport';

    public const CSV_ROW = 'csvRow';

    public const MAPPED_STUDENT = 'mappedStudent';

    public const YEAR_OF_ENTRY = 'yearOfEntry';

    public const APPLICATION_SCHEME_CODE = 'applicationSchemeCode';

    public const INSTITUTION_CODE = 'institutionCode';

    public const INSTITUTION_NAME = 'institutionName';

    public const COURSE_CODE = 'courseCode';

    public const COURSE_NAME = 'courseName';

    public const CAMPUS_CODE = 'campusCode';

    public const POINT_OF_ENTRY = 'pointOfEntry';

    public const COURSE_START_DATE = 'courseStartDate';

    protected $_resourceType = ResourceType::UK_DFE_UCAS_IMPORT_RECORD;

    /**
     * @param Query $query
     * @return UcasImportRecord[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_UCAS_IMPORT_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UcasImportRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_UCAS_IMPORT_RECORD, $id);
    }

    /**
     * @return \Arbor\Model\UkDfe\UcasImport
     */
    public function getUcasImport()
    {
        return $this->getProperty('ucasImport');
    }

    /**
     * @param \Arbor\Model\UkDfe\UcasImport $ucasImport
     */
    public function setUcasImport(\Arbor\Model\UkDfe\UcasImport $ucasImport = null)
    {
        $this->setProperty('ucasImport', $ucasImport);
    }

    /**
     * @return int
     */
    public function getCsvRow()
    {
        return $this->getProperty('csvRow');
    }

    /**
     * @param int $csvRow
     */
    public function setCsvRow(int $csvRow = null)
    {
        $this->setProperty('csvRow', $csvRow);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getMappedStudent()
    {
        return $this->getProperty('mappedStudent');
    }

    /**
     * @param \Arbor\Model\Student $mappedStudent
     */
    public function setMappedStudent(\Arbor\Model\Student $mappedStudent = null)
    {
        $this->setProperty('mappedStudent', $mappedStudent);
    }

    /**
     * @return int
     */
    public function getYearOfEntry()
    {
        return $this->getProperty('yearOfEntry');
    }

    /**
     * @param int $yearOfEntry
     */
    public function setYearOfEntry(int $yearOfEntry = null)
    {
        $this->setProperty('yearOfEntry', $yearOfEntry);
    }

    /**
     * @return string
     */
    public function getApplicationSchemeCode()
    {
        return $this->getProperty('applicationSchemeCode');
    }

    /**
     * @param string $applicationSchemeCode
     */
    public function setApplicationSchemeCode(string $applicationSchemeCode = null)
    {
        $this->setProperty('applicationSchemeCode', $applicationSchemeCode);
    }

    /**
     * @return string
     */
    public function getInstitutionCode()
    {
        return $this->getProperty('institutionCode');
    }

    /**
     * @param string $institutionCode
     */
    public function setInstitutionCode(string $institutionCode = null)
    {
        $this->setProperty('institutionCode', $institutionCode);
    }

    /**
     * @return string
     */
    public function getInstitutionName()
    {
        return $this->getProperty('institutionName');
    }

    /**
     * @param string $institutionName
     */
    public function setInstitutionName(string $institutionName = null)
    {
        $this->setProperty('institutionName', $institutionName);
    }

    /**
     * @return string
     */
    public function getCourseCode()
    {
        return $this->getProperty('courseCode');
    }

    /**
     * @param string $courseCode
     */
    public function setCourseCode(string $courseCode = null)
    {
        $this->setProperty('courseCode', $courseCode);
    }

    /**
     * @return string
     */
    public function getCourseName()
    {
        return $this->getProperty('courseName');
    }

    /**
     * @param string $courseName
     */
    public function setCourseName(string $courseName = null)
    {
        $this->setProperty('courseName', $courseName);
    }

    /**
     * @return string
     */
    public function getCampusCode()
    {
        return $this->getProperty('campusCode');
    }

    /**
     * @param string $campusCode
     */
    public function setCampusCode(string $campusCode = null)
    {
        $this->setProperty('campusCode', $campusCode);
    }

    /**
     * @return string
     */
    public function getPointOfEntry()
    {
        return $this->getProperty('pointOfEntry');
    }

    /**
     * @param string $pointOfEntry
     */
    public function setPointOfEntry(string $pointOfEntry = null)
    {
        $this->setProperty('pointOfEntry', $pointOfEntry);
    }

    /**
     * @return \DateTime
     */
    public function getCourseStartDate()
    {
        return $this->getProperty('courseStartDate');
    }

    /**
     * @param \DateTime $courseStartDate
     */
    public function setCourseStartDate(\DateTime $courseStartDate = null)
    {
        $this->setProperty('courseStartDate', $courseStartDate);
    }
}
