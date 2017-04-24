<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Intervention;

class InterventionGroup extends ModelBase
{
    const INTERVENTION = 'intervention';

    const GROUP = 'group';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const AIMS = 'aims';

    const SUCCESS_CRITERIA = 'successCriteria';

    protected $_resourceType = ResourceType::INTERVENTION_GROUP;

    /**
     * @param \Arbor\Query\Query $query
     * @return InterventionGroup[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("InterventionGroup");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return InterventionGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::INTERVENTION_GROUP, $id);
    }

    /**
     * @return Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty("intervention");
    }

    /**
     * @param Intervention $intervention
     */
    public function setIntervention(Intervention $intervention = null)
    {
        $this->setProperty("intervention", $intervention);
    }

    /**
     * @return ModelBase
     */
    public function getGroup()
    {
        return $this->getProperty("group");
    }

    /**
     * @param ModelBase $group
     */
    public function setGroup(ModelBase $group = null)
    {
        $this->setProperty("group", $group);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return string
     */
    public function getAims()
    {
        return $this->getProperty("aims");
    }

    /**
     * @param string $aims
     */
    public function setAims($aims = null)
    {
        $this->setProperty("aims", $aims);
    }

    /**
     * @return string
     */
    public function getSuccessCriteria()
    {
        return $this->getProperty("successCriteria");
    }

    /**
     * @param string $successCriteria
     */
    public function setSuccessCriteria($successCriteria = null)
    {
        $this->setProperty("successCriteria", $successCriteria);
    }
}
