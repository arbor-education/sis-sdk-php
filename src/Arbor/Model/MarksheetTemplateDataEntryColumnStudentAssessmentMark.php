<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MarksheetTemplateDataEntryColumnStudentAssessmentMark extends ModelBase
{
    public const MARKSHEET_TEMPLATE_DATA_ENTRY_COLUMN = 'marksheetTemplateDataEntryColumn';

    public const STUDENT_ASSESSMENT_MARK = 'studentAssessmentMark';

    public const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::MARKSHEET_TEMPLATE_DATA_ENTRY_COLUMN_STUDENT_ASSESSMENT_MARK;

    /**
     * @param Query $query
     * @return MarksheetTemplateDataEntryColumnStudentAssessmentMark[] | Collection
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

        $query->setResourceType(ResourceType::MARKSHEET_TEMPLATE_DATA_ENTRY_COLUMN_STUDENT_ASSESSMENT_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MarksheetTemplateDataEntryColumnStudentAssessmentMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MARKSHEET_TEMPLATE_DATA_ENTRY_COLUMN_STUDENT_ASSESSMENT_MARK, $id);
    }

    /**
     * @return \Arbor\Model\MarksheetTemplateDataEntryColumn
     */
    public function getMarksheetTemplateDataEntryColumn()
    {
        return $this->getProperty('marksheetTemplateDataEntryColumn');
    }

    /**
     * @param \Arbor\Model\MarksheetTemplateDataEntryColumn
     * $marksheetTemplateDataEntryColumn
     */
    public function setMarksheetTemplateDataEntryColumn(\Arbor\Model\MarksheetTemplateDataEntryColumn $marksheetTemplateDataEntryColumn = null)
    {
        $this->setProperty('marksheetTemplateDataEntryColumn', $marksheetTemplateDataEntryColumn);
    }

    /**
     * @return \Arbor\Model\StudentAssessmentMark
     */
    public function getStudentAssessmentMark()
    {
        return $this->getProperty('studentAssessmentMark');
    }

    /**
     * @param \Arbor\Model\StudentAssessmentMark $studentAssessmentMark
     */
    public function setStudentAssessmentMark(\Arbor\Model\StudentAssessmentMark $studentAssessmentMark = null)
    {
        $this->setProperty('studentAssessmentMark', $studentAssessmentMark);
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
}
