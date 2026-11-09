<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentMarkImportPreparedMark extends ModelBase
{
    public const IMPORT_JOB = 'importJob';

    public const IMPORT_JOB_COLUMN = 'importJobColumn';

    public const IDENTIFIER_VALUE = 'identifierValue';

    public const STUDENT = 'student';

    public const RAW_VALUE = 'rawValue';

    public const GRADE_VALUE = 'gradeValue';

    public const ASSESSMENT_GRADE = 'assessmentGrade';

    public const STATUS = 'status';

    protected $_resourceType = ResourceType::ASSESSMENT_MARK_IMPORT_PREPARED_MARK;

    /**
     * @param Query $query
     * @return AssessmentMarkImportPreparedMark[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_MARK_IMPORT_PREPARED_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMarkImportPreparedMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_MARK_IMPORT_PREPARED_MARK, $id);
    }

    /**
     * @return \Arbor\Model\AssessmentMarkImportJob
     */
    public function getImportJob()
    {
        return $this->getProperty('importJob');
    }

    /**
     * @param \Arbor\Model\AssessmentMarkImportJob $importJob
     */
    public function setImportJob(\Arbor\Model\AssessmentMarkImportJob $importJob = null)
    {
        $this->setProperty('importJob', $importJob);
    }

    /**
     * @return \Arbor\Model\AssessmentMarkImportJobColumn
     */
    public function getImportJobColumn()
    {
        return $this->getProperty('importJobColumn');
    }

    /**
     * @param \Arbor\Model\AssessmentMarkImportJobColumn $importJobColumn
     */
    public function setImportJobColumn(\Arbor\Model\AssessmentMarkImportJobColumn $importJobColumn = null)
    {
        $this->setProperty('importJobColumn', $importJobColumn);
    }

    /**
     * @return string
     */
    public function getIdentifierValue()
    {
        return $this->getProperty('identifierValue');
    }

    /**
     * @param string $identifierValue
     */
    public function setIdentifierValue(string $identifierValue = null)
    {
        $this->setProperty('identifierValue', $identifierValue);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return string
     */
    public function getRawValue()
    {
        return $this->getProperty('rawValue');
    }

    /**
     * @param string $rawValue
     */
    public function setRawValue(string $rawValue = null)
    {
        $this->setProperty('rawValue', $rawValue);
    }

    /**
     * @return string
     */
    public function getGradeValue()
    {
        return $this->getProperty('gradeValue');
    }

    /**
     * @param string $gradeValue
     */
    public function setGradeValue(string $gradeValue = null)
    {
        $this->setProperty('gradeValue', $gradeValue);
    }

    /**
     * @return \Arbor\Model\AssessmentGrade
     */
    public function getAssessmentGrade()
    {
        return $this->getProperty('assessmentGrade');
    }

    /**
     * @param \Arbor\Model\AssessmentGrade $assessmentGrade
     */
    public function setAssessmentGrade(\Arbor\Model\AssessmentGrade $assessmentGrade = null)
    {
        $this->setProperty('assessmentGrade', $assessmentGrade);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }
}
