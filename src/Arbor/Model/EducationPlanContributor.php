<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\EducationPlan;

class EducationPlanContributor extends ModelBase
{
    const EDUCATION_PLAN = 'educationPlan';

    const CONTRIBUTOR = 'contributor';

    protected $_resourceType = ResourceType::EDUCATION_PLAN_CONTRIBUTOR;

    /**
     * @param \Arbor\Query\Query $query
     * @return EducationPlanContributor[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("EducationPlanContributor");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EducationPlanContributor
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::EDUCATION_PLAN_CONTRIBUTOR, $id);
    }

    /**
     * @return EducationPlan
     */
    public function getEducationPlan()
    {
        return $this->getProperty("educationPlan");
    }

    /**
     * @param EducationPlan $educationPlan
     */
    public function setEducationPlan(EducationPlan $educationPlan = null)
    {
        $this->setProperty("educationPlan", $educationPlan);
    }

    /**
     * @return ModelBase
     */
    public function getContributor()
    {
        return $this->getProperty("contributor");
    }

    /**
     * @param ModelBase $contributor
     */
    public function setContributor(ModelBase $contributor = null)
    {
        $this->setProperty("contributor", $contributor);
    }
}
