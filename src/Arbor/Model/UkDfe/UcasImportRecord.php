<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;

class UcasImportRecord extends ModelBase
{
    const UCAS_IMPORT = 'ucasImport';

    const CSV_ROW = 'csvRow';

    const MAPPED_STUDENT = 'mappedStudent';

    const YEAR_OF_ENTRY = 'yearOfEntry';

    const APPLICATION_SCHEME_CODE = 'applicationSchemeCode';

    const INSTITUTION_CODE = 'institutionCode';

    const INSTITUTION_NAME = 'institutionName';

    const COURSE_CODE = 'courseCode';

    const COURSE_NAME = 'courseName';

    const CAMPUS_CODE = 'campusCode';

    protected $_resourceType = ResourceType::UK_DFE_UCAS_IMPORT_RECORD;

    /**
     * @param Query $query
     * @return UcasImportRecord[] | Collection
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
     * @return UcasImport
     */
    public function getUcasImport()
    {
        return $this->getProperty('ucasImport');
    }

    /**
     * @param UcasImport $ucasImport
     */
    public function setUcasImport(UcasImport $ucasImport = null)
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
    public function setCsvRow($csvRow = null)
    {
        $this->setProperty('csvRow', $csvRow);
    }

    /**
     * @return Student
     */
    public function getMappedStudent()
    {
        return $this->getProperty('mappedStudent');
    }

    /**
     * @param Student $mappedStudent
     */
    public function setMappedStudent(Student $mappedStudent = null)
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
    public function setYearOfEntry($yearOfEntry = null)
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
    public function setApplicationSchemeCode($applicationSchemeCode = null)
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
    public function setInstitutionCode($institutionCode = null)
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
    public function setInstitutionName($institutionName = null)
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
    public function setCourseCode($courseCode = null)
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
    public function setCourseName($courseName = null)
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
    public function setCampusCode($campusCode = null)
    {
        $this->setProperty('campusCode', $campusCode);
    }
}
