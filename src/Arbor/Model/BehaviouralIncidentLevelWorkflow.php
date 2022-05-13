<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BehaviouralIncidentLevelWorkflow extends ModelBase
{
    const LEVEL_OF_INCIDENT = 'levelOfIncident';

    const AUTO_CLOSE = 'autoClose';

    const ESCALATION_THRESHOLD_COUNT = 'escalationThresholdCount';

    const ESCALATION_THRESHOLD_TIME_RANGE = 'escalationThresholdTimeRange';

    const ESCALATE_TO_LEVEL = 'escalateToLevel';

    const RESET_TO_ZERO = 'resetToZero';

    const GUARDIAN_EMAIL_TEMPLATE = 'guardianEmailTemplate';

    const MESSAGE_CHANNEL = 'messageChannel';

    const BEHAVIOURAL_INCIDENT_SMS_GUARDIAN = 'behaviouralIncidentSmsGuardian';

    const BEHAVIOURAL_INCIDENT_EMAIL_GUARDIAN = 'behaviouralIncidentEmailGuardian';

    const DETENTION_SMS_GUARDIAN = 'detentionSmsGuardian';

    const DETENTION_EMAIL_GUARDIAN = 'detentionEmailGuardian';

    const BEHAVIOURAL_INCIDENT_SMS_TEMPLATE = 'behaviouralIncidentSmsTemplate';

    const BEHAVIOURAL_INCIDENT_EMAIL_TEMPLATE = 'behaviouralIncidentEmailTemplate';

    const DEFAULT_ASSIGNEE = 'defaultAssignee';

    const SPECIFIC_ASSIGNEE = 'specificAssignee';

    const DETENTION_TYPE = 'detentionType';

    const DETENTION_TIME_FRAME = 'detentionTimeFrame';

    const ASSIGNMENT_POLICY = 'assignmentPolicy';

    const INTERNAL_EXCLUSION_TYPE = 'internalExclusionType';

    const INTERNAL_EXCLUSION_TIME_FRAME = 'internalExclusionTimeFrame';

    const NUMBER_OF_SESSIONS = 'numberOfSessions';

    const POINT_AWARD_SCALE = 'pointAwardScale';

    const ADD_DEDUCT_POINTS = 'addDeductPoints';

    const EDITABLE_WATCHERS = 'editableWatchers';

    const ALLOW_ASSIGN_DETENTION = 'allowAssignDetention';

    const ALLOW_ADD_DEDUCT_POINTS = 'allowAddDeductPoints';

    const EMAIL_ASSIGNEE = 'emailAssignee';

    const ALLOW_ASSIGN_INTERNAL_EXCLUSION = 'allowAssignInternalExclusion';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_LEVEL_WORKFLOW;

    /**
     * @param Query $query
     * @return BehaviouralIncidentLevelWorkflow[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOURAL_INCIDENT_LEVEL_WORKFLOW);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviouralIncidentLevelWorkflow
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOURAL_INCIDENT_LEVEL_WORKFLOW, $id);
    }

    /**
     * @return int
     */
    public function getLevelOfIncident()
    {
        return $this->getProperty('levelOfIncident');
    }

    /**
     * @param int $levelOfIncident
     */
    public function setLevelOfIncident($levelOfIncident = null)
    {
        $this->setProperty('levelOfIncident', $levelOfIncident);
    }

    /**
     * @return bool
     */
    public function getAutoClose()
    {
        return $this->getProperty('autoClose');
    }

    /**
     * @param bool $autoClose
     */
    public function setAutoClose($autoClose = null)
    {
        $this->setProperty('autoClose', $autoClose);
    }

    /**
     * @return int
     */
    public function getEscalationThresholdCount()
    {
        return $this->getProperty('escalationThresholdCount');
    }

    /**
     * @param int $escalationThresholdCount
     */
    public function setEscalationThresholdCount($escalationThresholdCount = null)
    {
        $this->setProperty('escalationThresholdCount', $escalationThresholdCount);
    }

    /**
     * @return string
     */
    public function getEscalationThresholdTimeRange()
    {
        return $this->getProperty('escalationThresholdTimeRange');
    }

    /**
     * @param string $escalationThresholdTimeRange
     */
    public function setEscalationThresholdTimeRange($escalationThresholdTimeRange = null)
    {
        $this->setProperty('escalationThresholdTimeRange', $escalationThresholdTimeRange);
    }

    /**
     * @return int
     */
    public function getEscalateToLevel()
    {
        return $this->getProperty('escalateToLevel');
    }

    /**
     * @param int $escalateToLevel
     */
    public function setEscalateToLevel($escalateToLevel = null)
    {
        $this->setProperty('escalateToLevel', $escalateToLevel);
    }

    /**
     * @return bool
     */
    public function getResetToZero()
    {
        return $this->getProperty('resetToZero');
    }

    /**
     * @param bool $resetToZero
     */
    public function setResetToZero($resetToZero = null)
    {
        $this->setProperty('resetToZero', $resetToZero);
    }

    /**
     * @return string
     */
    public function getGuardianEmailTemplate()
    {
        return $this->getProperty('guardianEmailTemplate');
    }

    /**
     * @param string $guardianEmailTemplate
     */
    public function setGuardianEmailTemplate($guardianEmailTemplate = null)
    {
        $this->setProperty('guardianEmailTemplate', $guardianEmailTemplate);
    }

    /**
     * @return string
     */
    public function getMessageChannel()
    {
        return $this->getProperty('messageChannel');
    }

    /**
     * @param string $messageChannel
     */
    public function setMessageChannel($messageChannel = null)
    {
        $this->setProperty('messageChannel', $messageChannel);
    }

    /**
     * @return bool
     */
    public function getBehaviouralIncidentSmsGuardian()
    {
        return $this->getProperty('behaviouralIncidentSmsGuardian');
    }

    /**
     * @param bool $behaviouralIncidentSmsGuardian
     */
    public function setBehaviouralIncidentSmsGuardian($behaviouralIncidentSmsGuardian = null)
    {
        $this->setProperty('behaviouralIncidentSmsGuardian', $behaviouralIncidentSmsGuardian);
    }

    /**
     * @return bool
     */
    public function getBehaviouralIncidentEmailGuardian()
    {
        return $this->getProperty('behaviouralIncidentEmailGuardian');
    }

    /**
     * @param bool $behaviouralIncidentEmailGuardian
     */
    public function setBehaviouralIncidentEmailGuardian($behaviouralIncidentEmailGuardian = null)
    {
        $this->setProperty('behaviouralIncidentEmailGuardian', $behaviouralIncidentEmailGuardian);
    }

    /**
     * @return bool
     */
    public function getDetentionSmsGuardian()
    {
        return $this->getProperty('detentionSmsGuardian');
    }

    /**
     * @param bool $detentionSmsGuardian
     */
    public function setDetentionSmsGuardian($detentionSmsGuardian = null)
    {
        $this->setProperty('detentionSmsGuardian', $detentionSmsGuardian);
    }

    /**
     * @return bool
     */
    public function getDetentionEmailGuardian()
    {
        return $this->getProperty('detentionEmailGuardian');
    }

    /**
     * @param bool $detentionEmailGuardian
     */
    public function setDetentionEmailGuardian($detentionEmailGuardian = null)
    {
        $this->setProperty('detentionEmailGuardian', $detentionEmailGuardian);
    }

    /**
     * @return CommunicationTemplate
     */
    public function getBehaviouralIncidentSmsTemplate()
    {
        return $this->getProperty('behaviouralIncidentSmsTemplate');
    }

    /**
     * @param CommunicationTemplate $behaviouralIncidentSmsTemplate
     */
    public function setBehaviouralIncidentSmsTemplate(CommunicationTemplate $behaviouralIncidentSmsTemplate = null)
    {
        $this->setProperty('behaviouralIncidentSmsTemplate', $behaviouralIncidentSmsTemplate);
    }

    /**
     * @return CommunicationTemplate
     */
    public function getBehaviouralIncidentEmailTemplate()
    {
        return $this->getProperty('behaviouralIncidentEmailTemplate');
    }

    /**
     * @param CommunicationTemplate $behaviouralIncidentEmailTemplate
     */
    public function setBehaviouralIncidentEmailTemplate(CommunicationTemplate $behaviouralIncidentEmailTemplate = null)
    {
        $this->setProperty('behaviouralIncidentEmailTemplate', $behaviouralIncidentEmailTemplate);
    }

    /**
     * @return string
     */
    public function getDefaultAssignee()
    {
        return $this->getProperty('defaultAssignee');
    }

    /**
     * @param string $defaultAssignee
     */
    public function setDefaultAssignee($defaultAssignee = null)
    {
        $this->setProperty('defaultAssignee', $defaultAssignee);
    }

    /**
     * @return Staff
     */
    public function getSpecificAssignee()
    {
        return $this->getProperty('specificAssignee');
    }

    /**
     * @param Staff $specificAssignee
     */
    public function setSpecificAssignee(Staff $specificAssignee = null)
    {
        $this->setProperty('specificAssignee', $specificAssignee);
    }

    /**
     * @return DetentionType
     */
    public function getDetentionType()
    {
        return $this->getProperty('detentionType');
    }

    /**
     * @param DetentionType $detentionType
     */
    public function setDetentionType(DetentionType $detentionType = null)
    {
        $this->setProperty('detentionType', $detentionType);
    }

    /**
     * @return string
     */
    public function getDetentionTimeFrame()
    {
        return $this->getProperty('detentionTimeFrame');
    }

    /**
     * @param string $detentionTimeFrame
     */
    public function setDetentionTimeFrame($detentionTimeFrame = null)
    {
        $this->setProperty('detentionTimeFrame', $detentionTimeFrame);
    }

    /**
     * @return string
     */
    public function getAssignmentPolicy()
    {
        return $this->getProperty('assignmentPolicy');
    }

    /**
     * @param string $assignmentPolicy
     */
    public function setAssignmentPolicy($assignmentPolicy = null)
    {
        $this->setProperty('assignmentPolicy', $assignmentPolicy);
    }

    /**
     * @return InternalExclusionType
     */
    public function getInternalExclusionType()
    {
        return $this->getProperty('internalExclusionType');
    }

    /**
     * @param InternalExclusionType $internalExclusionType
     */
    public function setInternalExclusionType(InternalExclusionType $internalExclusionType = null)
    {
        $this->setProperty('internalExclusionType', $internalExclusionType);
    }

    /**
     * @return string
     */
    public function getInternalExclusionTimeFrame()
    {
        return $this->getProperty('internalExclusionTimeFrame');
    }

    /**
     * @param string $internalExclusionTimeFrame
     */
    public function setInternalExclusionTimeFrame($internalExclusionTimeFrame = null)
    {
        $this->setProperty('internalExclusionTimeFrame', $internalExclusionTimeFrame);
    }

    /**
     * @return int
     */
    public function getNumberOfSessions()
    {
        return $this->getProperty('numberOfSessions');
    }

    /**
     * @param int $numberOfSessions
     */
    public function setNumberOfSessions($numberOfSessions = null)
    {
        $this->setProperty('numberOfSessions', $numberOfSessions);
    }

    /**
     * @return PointAwardScale
     */
    public function getPointAwardScale()
    {
        return $this->getProperty('pointAwardScale');
    }

    /**
     * @param PointAwardScale $pointAwardScale
     */
    public function setPointAwardScale(PointAwardScale $pointAwardScale = null)
    {
        $this->setProperty('pointAwardScale', $pointAwardScale);
    }

    /**
     * @return float
     */
    public function getAddDeductPoints()
    {
        return $this->getProperty('addDeductPoints');
    }

    /**
     * @param float $addDeductPoints
     */
    public function setAddDeductPoints($addDeductPoints = null)
    {
        $this->setProperty('addDeductPoints', $addDeductPoints);
    }

    /**
     * @return bool
     */
    public function getEditableWatchers()
    {
        return $this->getProperty('editableWatchers');
    }

    /**
     * @param bool $editableWatchers
     */
    public function setEditableWatchers($editableWatchers = null)
    {
        $this->setProperty('editableWatchers', $editableWatchers);
    }

    /**
     * @return bool
     */
    public function getAllowAssignDetention()
    {
        return $this->getProperty('allowAssignDetention');
    }

    /**
     * @param bool $allowAssignDetention
     */
    public function setAllowAssignDetention($allowAssignDetention = null)
    {
        $this->setProperty('allowAssignDetention', $allowAssignDetention);
    }

    /**
     * @return bool
     */
    public function getAllowAddDeductPoints()
    {
        return $this->getProperty('allowAddDeductPoints');
    }

    /**
     * @param bool $allowAddDeductPoints
     */
    public function setAllowAddDeductPoints($allowAddDeductPoints = null)
    {
        $this->setProperty('allowAddDeductPoints', $allowAddDeductPoints);
    }

    /**
     * @return bool
     */
    public function getEmailAssignee()
    {
        return $this->getProperty('emailAssignee');
    }

    /**
     * @param bool $emailAssignee
     */
    public function setEmailAssignee($emailAssignee = null)
    {
        $this->setProperty('emailAssignee', $emailAssignee);
    }

    /**
     * @return bool
     */
    public function getAllowAssignInternalExclusion()
    {
        return $this->getProperty('allowAssignInternalExclusion');
    }

    /**
     * @param bool $allowAssignInternalExclusion
     */
    public function setAllowAssignInternalExclusion($allowAssignInternalExclusion = null)
    {
        $this->setProperty('allowAssignInternalExclusion', $allowAssignInternalExclusion);
    }
}
