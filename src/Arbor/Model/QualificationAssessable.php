<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AwardingOrganization;

class QualificationAssessable extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ASSESSABLE_IDENTIFIER = 'assessableIdentifier';

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const FULL_TITLE = 'fullTitle';

    const SHORT_TITLE = 'shortTitle';

    const DESCRIPTION = 'description';

    const ASSESSMENT_METHOD_TYPE = 'assessmentMethodType';

    const ASSESSOR = 'assessor';

    const CENTER_ASSESSED = 'centerAssessed';

    const TIME_ALLOWED = 'timeAllowed';

    const MAXIMUM_EXTRA_TIME = 'maximumExtraTime';

    const CREDIT_VALUE = 'creditValue';

    const MAX_RESITS_ALLOWED = 'maxResitsAllowed';

    const TIMETABLE_SLOT_DECIDER = 'timetableSlotDecider';

    protected $_resourceType = ResourceType::QUALIFICATION_ASSESSABLE;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationAssessable[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("QualificationAssessable");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationAssessable
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::QUALIFICATION_ASSESSABLE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getAssessableIdentifier()
    {
        return $this->getProperty("assessableIdentifier");
    }

    /**
     * @param string $assessableIdentifier
     */
    public function setAssessableIdentifier($assessableIdentifier = null)
    {
        $this->setProperty("assessableIdentifier", $assessableIdentifier);
    }

    /**
     * @return AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty("awardingOrganization");
    }

    /**
     * @param AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty("awardingOrganization", $awardingOrganization);
    }

    /**
     * @return string
     */
    public function getFullTitle()
    {
        return $this->getProperty("fullTitle");
    }

    /**
     * @param string $fullTitle
     */
    public function setFullTitle($fullTitle = null)
    {
        $this->setProperty("fullTitle", $fullTitle);
    }

    /**
     * @return string
     */
    public function getShortTitle()
    {
        return $this->getProperty("shortTitle");
    }

    /**
     * @param string $shortTitle
     */
    public function setShortTitle($shortTitle = null)
    {
        $this->setProperty("shortTitle", $shortTitle);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }

    /**
     * @return string
     */
    public function getAssessmentMethodType()
    {
        return $this->getProperty("assessmentMethodType");
    }

    /**
     * @param string $assessmentMethodType
     */
    public function setAssessmentMethodType($assessmentMethodType = null)
    {
        $this->setProperty("assessmentMethodType", $assessmentMethodType);
    }

    /**
     * @return string
     */
    public function getAssessor()
    {
        return $this->getProperty("assessor");
    }

    /**
     * @param string $assessor
     */
    public function setAssessor($assessor = null)
    {
        $this->setProperty("assessor", $assessor);
    }

    /**
     * @return bool
     */
    public function getCenterAssessed()
    {
        return $this->getProperty("centerAssessed");
    }

    /**
     * @param bool $centerAssessed
     */
    public function setCenterAssessed($centerAssessed = null)
    {
        $this->setProperty("centerAssessed", $centerAssessed);
    }

    /**
     * @return string
     */
    public function getTimeAllowed()
    {
        return $this->getProperty("timeAllowed");
    }

    /**
     * @param string $timeAllowed
     */
    public function setTimeAllowed($timeAllowed = null)
    {
        $this->setProperty("timeAllowed", $timeAllowed);
    }

    /**
     * @return string
     */
    public function getMaximumExtraTime()
    {
        return $this->getProperty("maximumExtraTime");
    }

    /**
     * @param string $maximumExtraTime
     */
    public function setMaximumExtraTime($maximumExtraTime = null)
    {
        $this->setProperty("maximumExtraTime", $maximumExtraTime);
    }

    /**
     * @return float
     */
    public function getCreditValue()
    {
        return $this->getProperty("creditValue");
    }

    /**
     * @param float $creditValue
     */
    public function setCreditValue($creditValue = null)
    {
        $this->setProperty("creditValue", $creditValue);
    }

    /**
     * @return int
     */
    public function getMaxResitsAllowed()
    {
        return $this->getProperty("maxResitsAllowed");
    }

    /**
     * @param int $maxResitsAllowed
     */
    public function setMaxResitsAllowed($maxResitsAllowed = null)
    {
        $this->setProperty("maxResitsAllowed", $maxResitsAllowed);
    }

    /**
     * @return string
     */
    public function getTimetableSlotDecider()
    {
        return $this->getProperty("timetableSlotDecider");
    }

    /**
     * @param string $timetableSlotDecider
     */
    public function setTimetableSlotDecider($timetableSlotDecider = null)
    {
        $this->setProperty("timetableSlotDecider", $timetableSlotDecider);
    }


}
