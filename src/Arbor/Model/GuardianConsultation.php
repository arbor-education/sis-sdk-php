<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class GuardianConsultation extends ModelBase
{
    public const GUARDIAN_CONSULTATION_NAME = 'guardianConsultationName';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const SELF_SCHEDULING_OPENS_DATETIME = 'selfSchedulingOpensDatetime';

    public const SELF_SCHEDULING_CLOSES_DATETIME = 'selfSchedulingClosesDatetime';

    protected $_resourceType = ResourceType::GUARDIAN_CONSULTATION;

    /**
     * @param Query $query
     * @return GuardianConsultation[] | Collection
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

        $query->setResourceType(ResourceType::GUARDIAN_CONSULTATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return GuardianConsultation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GUARDIAN_CONSULTATION, $id);
    }

    /**
     * @return string
     */
    public function getGuardianConsultationName()
    {
        return $this->getProperty('guardianConsultationName');
    }

    /**
     * @param string $guardianConsultationName
     */
    public function setGuardianConsultationName(string $guardianConsultationName = null)
    {
        $this->setProperty('guardianConsultationName', $guardianConsultationName);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSelfSchedulingOpensDatetime()
    {
        return $this->getProperty('selfSchedulingOpensDatetime');
    }

    /**
     * @param \DateTime $selfSchedulingOpensDatetime
     */
    public function setSelfSchedulingOpensDatetime(\DateTime $selfSchedulingOpensDatetime = null)
    {
        $this->setProperty('selfSchedulingOpensDatetime', $selfSchedulingOpensDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSelfSchedulingClosesDatetime()
    {
        return $this->getProperty('selfSchedulingClosesDatetime');
    }

    /**
     * @param \DateTime $selfSchedulingClosesDatetime
     */
    public function setSelfSchedulingClosesDatetime(\DateTime $selfSchedulingClosesDatetime = null)
    {
        $this->setProperty('selfSchedulingClosesDatetime', $selfSchedulingClosesDatetime);
    }
}
