<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\QualificationAssessable;
use \Arbor\Model\QualificationAvailabilityInstance;

class QualificationAssessableInstance extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ASSESSABLE_INSTANCE_IDENTIFIER = 'assessableInstanceIdentifier';

    const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    const START_DATE_RANGE_FROM = 'startDateRangeFrom';

    const START_DATE_RANGE_UNTIL = 'startDateRangeUntil';

    const DURATION = 'duration';

    const IS_PROVISIONAL = 'isProvisional';

    protected $_resourceType = ResourceType::QUALIFICATION_ASSESSABLE_INSTANCE;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationAssessableInstance[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("QualificationAssessableInstance");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationAssessableInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::QUALIFICATION_ASSESSABLE_INSTANCE, $id);
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
    public function getAssessableInstanceIdentifier()
    {
        return $this->getProperty("assessableInstanceIdentifier");
    }

    /**
     * @param string $assessableInstanceIdentifier
     */
    public function setAssessableInstanceIdentifier($assessableInstanceIdentifier = null)
    {
        $this->setProperty("assessableInstanceIdentifier", $assessableInstanceIdentifier);
    }

    /**
     * @return QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty("qualificationAssessable");
    }

    /**
     * @param QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty("qualificationAssessable", $qualificationAssessable);
    }

    /**
     * @return QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty("qualificationAvailabilityInstance");
    }

    /**
     * @param QualificationAvailabilityInstance $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty("qualificationAvailabilityInstance", $qualificationAvailabilityInstance);
    }

    /**
     * @return \DateTime
     */
    public function getStartDateRangeFrom()
    {
        return $this->getProperty("startDateRangeFrom");
    }

    /**
     * @param \DateTime $startDateRangeFrom
     */
    public function setStartDateRangeFrom(\DateTime $startDateRangeFrom = null)
    {
        $this->setProperty("startDateRangeFrom", $startDateRangeFrom);
    }

    /**
     * @return \DateTime
     */
    public function getStartDateRangeUntil()
    {
        return $this->getProperty("startDateRangeUntil");
    }

    /**
     * @param \DateTime $startDateRangeUntil
     */
    public function setStartDateRangeUntil(\DateTime $startDateRangeUntil = null)
    {
        $this->setProperty("startDateRangeUntil", $startDateRangeUntil);
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->getProperty("duration");
    }

    /**
     * @param string $duration
     */
    public function setDuration($duration = null)
    {
        $this->setProperty("duration", $duration);
    }

    /**
     * @return bool
     */
    public function getIsProvisional()
    {
        return $this->getProperty("isProvisional");
    }

    /**
     * @param bool $isProvisional
     */
    public function setIsProvisional($isProvisional = null)
    {
        $this->setProperty("isProvisional", $isProvisional);
    }


}
