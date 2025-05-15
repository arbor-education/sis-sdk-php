<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BehaviouralIncidentLevelWorkflow extends ModelBase
{
    public const NAME = 'name';

    public const LEVEL_OF_INCIDENT = 'levelOfIncident';

    public const AUTO_CLOSE = 'autoClose';

    public const ESCALATION_THRESHOLD_COUNT = 'escalationThresholdCount';

    public const ESCALATION_THRESHOLD_TIME_RANGE = 'escalationThresholdTimeRange';

    public const ESCALATE_TO_LEVEL = 'escalateToLevel';

    public const ESCALATE_NUMBER_OF_LEVELS = 'escalateNumberOfLevels';

    public const RESET_TO_ZERO = 'resetToZero';

    public const GUARDIAN_EMAIL_TEMPLATE = 'guardianEmailTemplate';

    public const MESSAGE_CHANNEL = 'messageChannel';

    public const BEHAVIOURAL_INCIDENT_SMS_GUARDIAN = 'behaviouralIncidentSmsGuardian';

    public const BEHAVIOURAL_INCIDENT_EMAIL_GUARDIAN = 'behaviouralIncidentEmailGuardian';

    public const DETENTION_SMS_GUARDIAN = 'detentionSmsGuardian';

    public const DETENTION_EMAIL_GUARDIAN = 'detentionEmailGuardian';

    public const BEHAVIOURAL_INCIDENT_SMS_TEMPLATE = 'behaviouralIncidentSmsTemplate';

    public const BEHAVIOURAL_INCIDENT_EMAIL_TEMPLATE = 'behaviouralIncidentEmailTemplate';

    public const DETENTION_EMAIL_TEMPLATE = 'detentionEmailTemplate';

    public const DETENTION_SMS_TEMPLATE = 'detentionSmsTemplate';

    public const DEFAULT_ASSIGNEE = 'defaultAssignee';

    public const SPECIFIC_ASSIGNEE = 'specificAssignee';

    public const DETENTION_TYPE = 'detentionType';

    public const DETENTION_TIME_FRAME = 'detentionTimeFrame';

    public const ASSIGNMENT_POLICY = 'assignmentPolicy';

    public const INTERNAL_EXCLUSION_TYPE = 'internalExclusionType';

    public const INTERNAL_EXCLUSION_TIME_FRAME = 'internalExclusionTimeFrame';

    public const NUMBER_OF_SESSIONS = 'numberOfSessions';

    public const POINT_AWARD_SCALE = 'pointAwardScale';

    public const ADD_DEDUCT_POINTS = 'addDeductPoints';

    public const EDITABLE_WATCHERS = 'editableWatchers';

    public const ALLOW_ASSIGN_DETENTION = 'allowAssignDetention';

    public const ALLOW_ADD_DEDUCT_POINTS = 'allowAddDeductPoints';

    public const EMAIL_ASSIGNEE = 'emailAssignee';

    public const ALLOW_ASSIGN_INTERNAL_EXCLUSION = 'allowAssignInternalExclusion';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_LEVEL_WORKFLOW;

    /**
     * @param Query $query
     * @return BehaviouralIncidentLevelWorkflow[] | Collection
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
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
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
    public function setLevelOfIncident(int $levelOfIncident = null)
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
    public function setAutoClose(bool $autoClose = null)
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
    public function setEscalationThresholdCount(int $escalationThresholdCount = null)
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
    public function setEscalationThresholdTimeRange(string $escalationThresholdTimeRange = null)
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
    public function setEscalateToLevel(int $escalateToLevel = null)
    {
        $this->setProperty('escalateToLevel', $escalateToLevel);
    }

    /**
     * @return int
     */
    public function getEscalateNumberOfLevels()
    {
        return $this->getProperty('escalateNumberOfLevels');
    }

    /**
     * @param int $escalateNumberOfLevels
     */
    public function setEscalateNumberOfLevels(int $escalateNumberOfLevels = null)
    {
        $this->setProperty('escalateNumberOfLevels', $escalateNumberOfLevels);
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
    public function setResetToZero(bool $resetToZero = null)
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
    public function setGuardianEmailTemplate(string $guardianEmailTemplate = null)
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
    public function setMessageChannel(string $messageChannel = null)
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
    public function setBehaviouralIncidentSmsGuardian(bool $behaviouralIncidentSmsGuardian = null)
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
    public function setBehaviouralIncidentEmailGuardian(bool $behaviouralIncidentEmailGuardian = null)
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
    public function setDetentionSmsGuardian(bool $detentionSmsGuardian = null)
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
    public function setDetentionEmailGuardian(bool $detentionEmailGuardian = null)
    {
        $this->setProperty('detentionEmailGuardian', $detentionEmailGuardian);
    }

    /**
     * @return \Arbor\Model\CommunicationTemplate
     */
    public function getBehaviouralIncidentSmsTemplate()
    {
        return $this->getProperty('behaviouralIncidentSmsTemplate');
    }

    /**
     * @param \Arbor\Model\CommunicationTemplate $behaviouralIncidentSmsTemplate
     */
    public function setBehaviouralIncidentSmsTemplate(\Arbor\Model\CommunicationTemplate $behaviouralIncidentSmsTemplate = null)
    {
        $this->setProperty('behaviouralIncidentSmsTemplate', $behaviouralIncidentSmsTemplate);
    }

    /**
     * @return \Arbor\Model\CommunicationTemplate
     */
    public function getBehaviouralIncidentEmailTemplate()
    {
        return $this->getProperty('behaviouralIncidentEmailTemplate');
    }

    /**
     * @param \Arbor\Model\CommunicationTemplate $behaviouralIncidentEmailTemplate
     */
    public function setBehaviouralIncidentEmailTemplate(\Arbor\Model\CommunicationTemplate $behaviouralIncidentEmailTemplate = null)
    {
        $this->setProperty('behaviouralIncidentEmailTemplate', $behaviouralIncidentEmailTemplate);
    }

    /**
     * @return \Arbor\Model\CommunicationTemplate
     */
    public function getDetentionEmailTemplate()
    {
        return $this->getProperty('detentionEmailTemplate');
    }

    /**
     * @param \Arbor\Model\CommunicationTemplate $detentionEmailTemplate
     */
    public function setDetentionEmailTemplate(\Arbor\Model\CommunicationTemplate $detentionEmailTemplate = null)
    {
        $this->setProperty('detentionEmailTemplate', $detentionEmailTemplate);
    }

    /**
     * @return \Arbor\Model\CommunicationTemplate
     */
    public function getDetentionSmsTemplate()
    {
        return $this->getProperty('detentionSmsTemplate');
    }

    /**
     * @param \Arbor\Model\CommunicationTemplate $detentionSmsTemplate
     */
    public function setDetentionSmsTemplate(\Arbor\Model\CommunicationTemplate $detentionSmsTemplate = null)
    {
        $this->setProperty('detentionSmsTemplate', $detentionSmsTemplate);
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
    public function setDefaultAssignee(string $defaultAssignee = null)
    {
        $this->setProperty('defaultAssignee', $defaultAssignee);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getSpecificAssignee()
    {
        return $this->getProperty('specificAssignee');
    }

    /**
     * @param \Arbor\Model\Staff $specificAssignee
     */
    public function setSpecificAssignee(\Arbor\Model\Staff $specificAssignee = null)
    {
        $this->setProperty('specificAssignee', $specificAssignee);
    }

    /**
     * @return \Arbor\Model\DetentionType
     */
    public function getDetentionType()
    {
        return $this->getProperty('detentionType');
    }

    /**
     * @param \Arbor\Model\DetentionType $detentionType
     */
    public function setDetentionType(\Arbor\Model\DetentionType $detentionType = null)
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
    public function setDetentionTimeFrame(string $detentionTimeFrame = null)
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
    public function setAssignmentPolicy(string $assignmentPolicy = null)
    {
        $this->setProperty('assignmentPolicy', $assignmentPolicy);
    }

    /**
     * @return \Arbor\Model\InternalExclusionType
     */
    public function getInternalExclusionType()
    {
        return $this->getProperty('internalExclusionType');
    }

    /**
     * @param \Arbor\Model\InternalExclusionType $internalExclusionType
     */
    public function setInternalExclusionType(\Arbor\Model\InternalExclusionType $internalExclusionType = null)
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
    public function setInternalExclusionTimeFrame(string $internalExclusionTimeFrame = null)
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
    public function setNumberOfSessions(int $numberOfSessions = null)
    {
        $this->setProperty('numberOfSessions', $numberOfSessions);
    }

    /**
     * @return \Arbor\Model\PointAwardScale
     */
    public function getPointAwardScale()
    {
        return $this->getProperty('pointAwardScale');
    }

    /**
     * @param \Arbor\Model\PointAwardScale $pointAwardScale
     */
    public function setPointAwardScale(\Arbor\Model\PointAwardScale $pointAwardScale = null)
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
    public function setAddDeductPoints(float $addDeductPoints = null)
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
    public function setEditableWatchers(bool $editableWatchers = null)
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
    public function setAllowAssignDetention(bool $allowAssignDetention = null)
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
    public function setAllowAddDeductPoints(bool $allowAddDeductPoints = null)
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
    public function setEmailAssignee(bool $emailAssignee = null)
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
    public function setAllowAssignInternalExclusion(bool $allowAssignInternalExclusion = null)
    {
        $this->setProperty('allowAssignInternalExclusion', $allowAssignInternalExclusion);
    }
}
