<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class NewReportCardBatch extends ModelBase
{
    const REPORT_CARD_TEMPLATE = 'reportCardTemplate';

    const REPORT_CARD_TITLE = 'reportCardTitle';

    const GENERAL_SETTINGS_JSON = 'generalSettingsJson';

    const REPORT_CARD_DATE = 'reportCardDate';

    const ATTAINMENT_SETTINGS_JSON = 'attainmentSettingsJson';

    const ASSESSMENT_PERIOD_START_DATE = 'assessmentPeriodStartDate';

    const ASSESSMENT_PERIOD_END_DATE = 'assessmentPeriodEndDate';

    const DUE_DATE = 'dueDate';

    const ACADEMIC_YEAR = 'academicYear';

    const INCLUDE_TEACHER_INITIALS = 'includeTeacherInitials';

    const INCLUDE_TEACHER_NAME = 'includeTeacherName';

    const INCLUDE_STUDENT_PHOTO = 'includeStudentPhoto';

    const INCLUDE_BASELINE = 'includeBaseline';

    const INCLUDE_WORKING_AT_CURRENT_PERIOD = 'includeWorkingAtCurrentPeriod';

    const INCLUDE_WORKING_AT_PREVIOUS_PERIOD = 'includeWorkingAtPreviousPeriod';

    const PREVIOUS_PERIOD_MEANING = 'previousPeriodMeaning';

    const INCLUDE_TEACHER_TARGET = 'includeTeacherTarget';

    const FINALIZED_DATETIME = 'finalizedDatetime';

    const FINALIZATION_IN_PROGRESS = 'finalizationInProgress';

    const SHARED_WITH_GUARDIANS = 'sharedWithGuardians';

    const BEHAVIOUR_FIELDS = 'behaviourFields';

    const ATTENDANCE_FIELDS = 'attendanceFields';

    const SHOW_COMMENTS = 'showComments';

    const CUSTOM_DISPLAY_NAMES_JSON = 'customDisplayNamesJson';

    protected $_resourceType = ResourceType::NEW_REPORT_CARD_BATCH;

    /**
     * @param Query $query
     * @return NewReportCardBatch[] | Collection
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
     * @return NewReportCardTemplate
     */
    public function getReportCardTemplate()
    {
        return $this->getProperty('reportCardTemplate');
    }

    /**
     * @param NewReportCardTemplate $reportCardTemplate
     */
    public function setReportCardTemplate(NewReportCardTemplate $reportCardTemplate = null)
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
    public function setReportCardTitle($reportCardTitle = null)
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
    public function setGeneralSettingsJson($generalSettingsJson = null)
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
    public function setAttainmentSettingsJson($attainmentSettingsJson = null)
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
     * @return bool
     */
    public function getIncludeTeacherInitials()
    {
        return $this->getProperty('includeTeacherInitials');
    }

    /**
     * @param bool $includeTeacherInitials
     */
    public function setIncludeTeacherInitials($includeTeacherInitials = null)
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
    public function setIncludeTeacherName($includeTeacherName = null)
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
    public function setIncludeStudentPhoto($includeStudentPhoto = null)
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
    public function setIncludeBaseline($includeBaseline = null)
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
    public function setIncludeWorkingAtCurrentPeriod($includeWorkingAtCurrentPeriod = null)
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
    public function setIncludeWorkingAtPreviousPeriod($includeWorkingAtPreviousPeriod = null)
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
    public function setPreviousPeriodMeaning($previousPeriodMeaning = null)
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
    public function setIncludeTeacherTarget($includeTeacherTarget = null)
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
    public function setFinalizationInProgress($finalizationInProgress = null)
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
    public function setSharedWithGuardians($sharedWithGuardians = null)
    {
        $this->setProperty('sharedWithGuardians', $sharedWithGuardians);
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
    public function setBehaviourFields($behaviourFields = null)
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
    public function setAttendanceFields($attendanceFields = null)
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
    public function setShowComments($showComments = null)
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
    public function setCustomDisplayNamesJson($customDisplayNamesJson = null)
    {
        $this->setProperty('customDisplayNamesJson', $customDisplayNamesJson);
    }
}
