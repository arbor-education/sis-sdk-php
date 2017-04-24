<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class GuardianConsultation extends ModelBase
{
    const GUARDIAN_CONSULTATION_NAME = 'guardianConsultationName';

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const SELF_SCHEDULING_OPENS_DATETIME = 'selfSchedulingOpensDatetime';

    const SELF_SCHEDULING_CLOSES_DATETIME = 'selfSchedulingClosesDatetime';

    protected $_resourceType = ResourceType::GUARDIAN_CONSULTATION;

    /**
     * @param \Arbor\Query\Query $query
     * @return GuardianConsultation[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("GuardianConsultation");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return GuardianConsultation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GUARDIAN_CONSULTATION, $id);
    }

    /**
     * @return string
     */
    public function getGuardianConsultationName()
    {
        return $this->getProperty("guardianConsultationName");
    }

    /**
     * @param string $guardianConsultationName
     */
    public function setGuardianConsultationName($guardianConsultationName = null)
    {
        $this->setProperty("guardianConsultationName", $guardianConsultationName);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty("startDatetime");
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty("startDatetime", $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty("endDatetime");
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty("endDatetime", $endDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSelfSchedulingOpensDatetime()
    {
        return $this->getProperty("selfSchedulingOpensDatetime");
    }

    /**
     * @param \DateTime $selfSchedulingOpensDatetime
     */
    public function setSelfSchedulingOpensDatetime(\DateTime $selfSchedulingOpensDatetime = null)
    {
        $this->setProperty("selfSchedulingOpensDatetime", $selfSchedulingOpensDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSelfSchedulingClosesDatetime()
    {
        return $this->getProperty("selfSchedulingClosesDatetime");
    }

    /**
     * @param \DateTime $selfSchedulingClosesDatetime
     */
    public function setSelfSchedulingClosesDatetime(\DateTime $selfSchedulingClosesDatetime = null)
    {
        $this->setProperty("selfSchedulingClosesDatetime", $selfSchedulingClosesDatetime);
    }
}
