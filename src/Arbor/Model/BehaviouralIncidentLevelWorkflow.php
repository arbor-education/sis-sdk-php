<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Staff;
use \Arbor\Model\DetentionType;
use \Arbor\Model\PointAwardScale;

class BehaviouralIncidentLevelWorkflow extends ModelBase
{
    const LEVEL_OF_INCIDENT = 'levelOfIncident';

    const AUTO_CLOSE = 'autoClose';

    const ESCALATION_THRESHOLD_COUNT = 'escalationThresholdCount';

    const ESCALATION_THRESHOLD_TIME_RANGE = 'escalationThresholdTimeRange';

    const ESCALATE_TO_LEVEL = 'escalateToLevel';

    const GUARDIAN_EMAIL_TEMPLATE = 'guardianEmailTemplate';

    const MESSAGE_CHANNEL = 'messageChannel';

    const DEFAULT_ASSIGNEE = 'defaultAssignee';

    const SPECIFIC_ASSIGNEE = 'specificAssignee';

    const DETENTION_TYPE = 'detentionType';

    const DETENTION_TIME_FRAME = 'detentionTimeFrame';

    const POINT_AWARD_SCALE = 'pointAwardScale';

    const ADD_DEDUCT_POINTS = 'addDeductPoints';

    const EDITABLE_WATCHERS = 'editableWatchers';

    const ALLOW_ASSIGN_DETENTION = 'allowAssignDetention';

    const ALLOW_ADD_DEDUCT_POINTS = 'allowAddDeductPoints';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_LEVEL_WORKFLOW;

    /**
     * @param \Arbor\Query\Query $query
     * @return BehaviouralIncidentLevelWorkflow[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("BehaviouralIncidentLevelWorkflow");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BehaviouralIncidentLevelWorkflow
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::BEHAVIOURAL_INCIDENT_LEVEL_WORKFLOW, $id);
    }

    /**
     * @return int
     */
    public function getLevelOfIncident()
    {
        return $this->getProperty("levelOfIncident");
    }

    /**
     * @param int $levelOfIncident
     */
    public function setLevelOfIncident($levelOfIncident = null)
    {
        $this->setProperty("levelOfIncident", $levelOfIncident);
    }

    /**
     * @return bool
     */
    public function getAutoClose()
    {
        return $this->getProperty("autoClose");
    }

    /**
     * @param bool $autoClose
     */
    public function setAutoClose($autoClose = null)
    {
        $this->setProperty("autoClose", $autoClose);
    }

    /**
     * @return int
     */
    public function getEscalationThresholdCount()
    {
        return $this->getProperty("escalationThresholdCount");
    }

    /**
     * @param int $escalationThresholdCount
     */
    public function setEscalationThresholdCount($escalationThresholdCount = null)
    {
        $this->setProperty("escalationThresholdCount", $escalationThresholdCount);
    }

    /**
     * @return string
     */
    public function getEscalationThresholdTimeRange()
    {
        return $this->getProperty("escalationThresholdTimeRange");
    }

    /**
     * @param string $escalationThresholdTimeRange
     */
    public function setEscalationThresholdTimeRange($escalationThresholdTimeRange = null)
    {
        $this->setProperty("escalationThresholdTimeRange", $escalationThresholdTimeRange);
    }

    /**
     * @return int
     */
    public function getEscalateToLevel()
    {
        return $this->getProperty("escalateToLevel");
    }

    /**
     * @param int $escalateToLevel
     */
    public function setEscalateToLevel($escalateToLevel = null)
    {
        $this->setProperty("escalateToLevel", $escalateToLevel);
    }

    /**
     * @return string
     */
    public function getGuardianEmailTemplate()
    {
        return $this->getProperty("guardianEmailTemplate");
    }

    /**
     * @param string $guardianEmailTemplate
     */
    public function setGuardianEmailTemplate($guardianEmailTemplate = null)
    {
        $this->setProperty("guardianEmailTemplate", $guardianEmailTemplate);
    }

    /**
     * @return string
     */
    public function getMessageChannel()
    {
        return $this->getProperty("messageChannel");
    }

    /**
     * @param string $messageChannel
     */
    public function setMessageChannel($messageChannel = null)
    {
        $this->setProperty("messageChannel", $messageChannel);
    }

    /**
     * @return string
     */
    public function getDefaultAssignee()
    {
        return $this->getProperty("defaultAssignee");
    }

    /**
     * @param string $defaultAssignee
     */
    public function setDefaultAssignee($defaultAssignee = null)
    {
        $this->setProperty("defaultAssignee", $defaultAssignee);
    }

    /**
     * @return Staff
     */
    public function getSpecificAssignee()
    {
        return $this->getProperty("specificAssignee");
    }

    /**
     * @param Staff $specificAssignee
     */
    public function setSpecificAssignee(Staff $specificAssignee = null)
    {
        $this->setProperty("specificAssignee", $specificAssignee);
    }

    /**
     * @return DetentionType
     */
    public function getDetentionType()
    {
        return $this->getProperty("detentionType");
    }

    /**
     * @param DetentionType $detentionType
     */
    public function setDetentionType(DetentionType $detentionType = null)
    {
        $this->setProperty("detentionType", $detentionType);
    }

    /**
     * @return string
     */
    public function getDetentionTimeFrame()
    {
        return $this->getProperty("detentionTimeFrame");
    }

    /**
     * @param string $detentionTimeFrame
     */
    public function setDetentionTimeFrame($detentionTimeFrame = null)
    {
        $this->setProperty("detentionTimeFrame", $detentionTimeFrame);
    }

    /**
     * @return PointAwardScale
     */
    public function getPointAwardScale()
    {
        return $this->getProperty("pointAwardScale");
    }

    /**
     * @param PointAwardScale $pointAwardScale
     */
    public function setPointAwardScale(PointAwardScale $pointAwardScale = null)
    {
        $this->setProperty("pointAwardScale", $pointAwardScale);
    }

    /**
     * @return float
     */
    public function getAddDeductPoints()
    {
        return $this->getProperty("addDeductPoints");
    }

    /**
     * @param float $addDeductPoints
     */
    public function setAddDeductPoints($addDeductPoints = null)
    {
        $this->setProperty("addDeductPoints", $addDeductPoints);
    }

    /**
     * @return bool
     */
    public function getEditableWatchers()
    {
        return $this->getProperty("editableWatchers");
    }

    /**
     * @param bool $editableWatchers
     */
    public function setEditableWatchers($editableWatchers = null)
    {
        $this->setProperty("editableWatchers", $editableWatchers);
    }

    /**
     * @return bool
     */
    public function getAllowAssignDetention()
    {
        return $this->getProperty("allowAssignDetention");
    }

    /**
     * @param bool $allowAssignDetention
     */
    public function setAllowAssignDetention($allowAssignDetention = null)
    {
        $this->setProperty("allowAssignDetention", $allowAssignDetention);
    }

    /**
     * @return bool
     */
    public function getAllowAddDeductPoints()
    {
        return $this->getProperty("allowAddDeductPoints");
    }

    /**
     * @param bool $allowAddDeductPoints
     */
    public function setAllowAddDeductPoints($allowAddDeductPoints = null)
    {
        $this->setProperty("allowAddDeductPoints", $allowAddDeductPoints);
    }
}
