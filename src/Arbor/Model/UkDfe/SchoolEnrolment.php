<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class SchoolEnrolment extends ModelBase
{
    const PLANNED_LEARNING_HOURS = 'plannedLearningHours';

    const PLANNED_EEP_HOURS = 'plannedEepHours';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_ENROLMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return SchoolEnrolment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_SchoolEnrolment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SchoolEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_ENROLMENT, $id);
    }

    /**
     * @return int
     */
    public function getPlannedLearningHours()
    {
        return $this->getProperty("plannedLearningHours");
    }

    /**
     * @param int $plannedLearningHours
     */
    public function setPlannedLearningHours($plannedLearningHours = null)
    {
        $this->setProperty("plannedLearningHours", $plannedLearningHours);
    }

    /**
     * @return int
     */
    public function getPlannedEepHours()
    {
        return $this->getProperty("plannedEepHours");
    }

    /**
     * @param int $plannedEepHours
     */
    public function setPlannedEepHours($plannedEepHours = null)
    {
        $this->setProperty("plannedEepHours", $plannedEepHours);
    }
}
