<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class NewReportCardBatch extends ModelBase
{
    public const REPORT_CARD_TEMPLATE = 'reportCardTemplate';

    public const REPORT_CARD_TITLE = 'reportCardTitle';

    public const GENERAL_SETTINGS_JSON = 'generalSettingsJson';

    public const REPORT_CARD_DATE = 'reportCardDate';

    public const ATTAINMENT_SETTINGS_JSON = 'attainmentSettingsJson';

    public const ASSESSMENT_PERIOD_START_DATE = 'assessmentPeriodStartDate';

    public const ASSESSMENT_PERIOD_END_DATE = 'assessmentPeriodEndDate';

    public const DUE_DATE = 'dueDate';

    public const ACADEMIC_YEAR = 'academicYear';

    public const INCLUDE_TEACHER_INITIALS = 'includeTeacherInitials';

    public const INCLUDE_TEACHER_NAME = 'includeTeacherName';

    public const INCLUDE_STUDENT_PHOTO = 'includeStudentPhoto';

    public const INCLUDE_BASELINE = 'includeBaseline';

    public const INCLUDE_WORKING_AT_CURRENT_PERIOD = 'includeWorkingAtCurrentPeriod';

    public const INCLUDE_WORKING_AT_PREVIOUS_PERIOD = 'includeWorkingAtPreviousPeriod';

    public const PREVIOUS_PERIOD_MEANING = 'previousPeriodMeaning';

    public const INCLUDE_TEACHER_TARGET = 'includeTeacherTarget';

    public const FINALIZED_DATETIME = 'finalizedDatetime';

    public const FINALIZATION_IN_PROGRESS = 'finalizationInProgress';

    public const SHARED_WITH_GUARDIANS = 'sharedWithGuardians';

    public const SHARED_WITH_STUDENTS = 'sharedWithStudents';

    public const BEHAVIOUR_FIELDS = 'behaviourFields';

    public const ATTENDANCE_FIELDS = 'attendanceFields';

    public const SHOW_COMMENTS = 'showComments';

    public const CUSTOM_DISPLAY_NAMES_JSON = 'customDisplayNamesJson';

    protected $_resourceType = ResourceType::NEW_REPORT_CARD_BATCH;

    /**
     * @param Query $query
     * @return NewReportCardBatch[] | Collection
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

        $query->setResourceType(ResourceType::NEW_REPORT_CARD_BATCH);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return NewReportCardBatch
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::NEW_REPORT_CARD_BATCH, $id);
    }

    /**
     * @return \Arbor\Model\NewReportCardTemplate
     */
    public function getReportCardTemplate()
    {
        return $this->getProperty('reportCardTemplate');
    }

    /**
     * @param \Arbor\Model\NewReportCardTemplate $reportCardTemplate
     */
    public function setReportCardTemplate(\Arbor\Model\NewReportCardTemplate $reportCardTemplate = null)
    {
        $this->setProperty('reportCardTemplate', $reportCardTemplate);
    }

    /**
     * @return string
     */
    public function getReportCardTitle()
    {
        return $this->getProperty('reportCardTitle');
    }

    /**
     * @param string $reportCardTitle
     */
    public function setReportCardTitle(string $reportCardTitle = null)
    {
        $this->setProperty('reportCardTitle', $reportCardTitle);
    }

    /**
     * @return string
     */
    public function getGeneralSettingsJson()
    {
        return $this->getProperty('generalSettingsJson');
    }

    /**
     * @param string $generalSettingsJson
     */
    public function setGeneralSettingsJson(string $generalSettingsJson = null)
    {
        $this->setProperty('generalSettingsJson', $generalSettingsJson);
    }

    /**
     * @return \DateTime
     */
    public function getReportCardDate()
    {
        return $this->getProperty('reportCardDate');
    }

    /**
     * @param \DateTime $reportCardDate
     */
    public function setReportCardDate(\DateTime $reportCardDate = null)
    {
        $this->setProperty('reportCardDate', $reportCardDate);
    }

    /**
     * @return string
     */
    public function getAttainmentSettingsJson()
    {
        return $this->getProperty('attainmentSettingsJson');
    }

    /**
     * @param string $attainmentSettingsJson
     */
    public function setAttainmentSettingsJson(string $attainmentSettingsJson = null)
    {
        $this->setProperty('attainmentSettingsJson', $attainmentSettingsJson);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentPeriodStartDate()
    {
        return $this->getProperty('assessmentPeriodStartDate');
    }

    /**
     * @param \DateTime $assessmentPeriodStartDate
     */
    public function setAssessmentPeriodStartDate(\DateTime $assessmentPeriodStartDate = null)
    {
        $this->setProperty('assessmentPeriodStartDate', $assessmentPeriodStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentPeriodEndDate()
    {
        return $this->getProperty('assessmentPeriodEndDate');
    }

    /**
     * @param \DateTime $assessmentPeriodEndDate
     */
    public function setAssessmentPeriodEndDate(\DateTime $assessmentPeriodEndDate = null)
    {
        $this->setProperty('assessmentPeriodEndDate', $assessmentPeriodEndDate);
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->getProperty('dueDate');
    }

    /**
     * @param \DateTime $dueDate
     */
    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->setProperty('dueDate', $dueDate);
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
     * @return bool
     */
    public function getIncludeTeacherInitials()
    {
        return $this->getProperty('includeTeacherInitials');
    }

    /**
     * @param bool $includeTeacherInitials
     */
    public function setIncludeTeacherInitials(bool $includeTeacherInitials = null)
    {
        $this->setProperty('includeTeacherInitials', $includeTeacherInitials);
    }

    /**
     * @return bool
     */
    public function getIncludeTeacherName()
    {
        return $this->getProperty('includeTeacherName');
    }

    /**
     * @param bool $includeTeacherName
     */
    public function setIncludeTeacherName(bool $includeTeacherName = null)
    {
        $this->setProperty('includeTeacherName', $includeTeacherName);
    }

    /**
     * @return bool
     */
    public function getIncludeStudentPhoto()
    {
        return $this->getProperty('includeStudentPhoto');
    }

    /**
     * @param bool $includeStudentPhoto
     */
    public function setIncludeStudentPhoto(bool $includeStudentPhoto = null)
    {
        $this->setProperty('includeStudentPhoto', $includeStudentPhoto);
    }

    /**
     * @return bool
     */
    public function getIncludeBaseline()
    {
        return $this->getProperty('includeBaseline');
    }

    /**
     * @param bool $includeBaseline
     */
    public function setIncludeBaseline(bool $includeBaseline = null)
    {
        $this->setProperty('includeBaseline', $includeBaseline);
    }

    /**
     * @return bool
     */
    public function getIncludeWorkingAtCurrentPeriod()
    {
        return $this->getProperty('includeWorkingAtCurrentPeriod');
    }

    /**
     * @param bool $includeWorkingAtCurrentPeriod
     */
    public function setIncludeWorkingAtCurrentPeriod(bool $includeWorkingAtCurrentPeriod = null)
    {
        $this->setProperty('includeWorkingAtCurrentPeriod', $includeWorkingAtCurrentPeriod);
    }

    /**
     * @return bool
     */
    public function getIncludeWorkingAtPreviousPeriod()
    {
        return $this->getProperty('includeWorkingAtPreviousPeriod');
    }

    /**
     * @param bool $includeWorkingAtPreviousPeriod
     */
    public function setIncludeWorkingAtPreviousPeriod(bool $includeWorkingAtPreviousPeriod = null)
    {
        $this->setProperty('includeWorkingAtPreviousPeriod', $includeWorkingAtPreviousPeriod);
    }

    /**
     * @return string
     */
    public function getPreviousPeriodMeaning()
    {
        return $this->getProperty('previousPeriodMeaning');
    }

    /**
     * @param string $previousPeriodMeaning
     */
    public function setPreviousPeriodMeaning(string $previousPeriodMeaning = null)
    {
        $this->setProperty('previousPeriodMeaning', $previousPeriodMeaning);
    }

    /**
     * @return bool
     */
    public function getIncludeTeacherTarget()
    {
        return $this->getProperty('includeTeacherTarget');
    }

    /**
     * @param bool $includeTeacherTarget
     */
    public function setIncludeTeacherTarget(bool $includeTeacherTarget = null)
    {
        $this->setProperty('includeTeacherTarget', $includeTeacherTarget);
    }

    /**
     * @return \DateTime
     */
    public function getFinalizedDatetime()
    {
        return $this->getProperty('finalizedDatetime');
    }

    /**
     * @param \DateTime $finalizedDatetime
     */
    public function setFinalizedDatetime(\DateTime $finalizedDatetime = null)
    {
        $this->setProperty('finalizedDatetime', $finalizedDatetime);
    }

    /**
     * @return bool
     */
    public function getFinalizationInProgress()
    {
        return $this->getProperty('finalizationInProgress');
    }

    /**
     * @param bool $finalizationInProgress
     */
    public function setFinalizationInProgress(bool $finalizationInProgress = null)
    {
        $this->setProperty('finalizationInProgress', $finalizationInProgress);
    }

    /**
     * @return bool
     */
    public function getSharedWithGuardians()
    {
        return $this->getProperty('sharedWithGuardians');
    }

    /**
     * @param bool $sharedWithGuardians
     */
    public function setSharedWithGuardians(bool $sharedWithGuardians = null)
    {
        $this->setProperty('sharedWithGuardians', $sharedWithGuardians);
    }

    /**
     * @return bool
     */
    public function getSharedWithStudents()
    {
        return $this->getProperty('sharedWithStudents');
    }

    /**
     * @param bool $sharedWithStudents
     */
    public function setSharedWithStudents(bool $sharedWithStudents = null)
    {
        $this->setProperty('sharedWithStudents', $sharedWithStudents);
    }

    /**
     * @return string
     */
    public function getBehaviourFields()
    {
        return $this->getProperty('behaviourFields');
    }

    /**
     * @param string $behaviourFields
     */
    public function setBehaviourFields(string $behaviourFields = null)
    {
        $this->setProperty('behaviourFields', $behaviourFields);
    }

    /**
     * @return string
     */
    public function getAttendanceFields()
    {
        return $this->getProperty('attendanceFields');
    }

    /**
     * @param string $attendanceFields
     */
    public function setAttendanceFields(string $attendanceFields = null)
    {
        $this->setProperty('attendanceFields', $attendanceFields);
    }

    /**
     * @return bool
     */
    public function getShowComments()
    {
        return $this->getProperty('showComments');
    }

    /**
     * @param bool $showComments
     */
    public function setShowComments(bool $showComments = null)
    {
        $this->setProperty('showComments', $showComments);
    }

    /**
     * @return string
     */
    public function getCustomDisplayNamesJson()
    {
        return $this->getProperty('customDisplayNamesJson');
    }

    /**
     * @param string $customDisplayNamesJson
     */
    public function setCustomDisplayNamesJson(string $customDisplayNamesJson = null)
    {
        $this->setProperty('customDisplayNamesJson', $customDisplayNamesJson);
    }
}
