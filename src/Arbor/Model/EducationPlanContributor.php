<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EducationPlanContributor extends ModelBase
{
    public const EDUCATION_PLAN = 'educationPlan';

    public const CONTRIBUTOR = 'contributor';

    protected $_resourceType = ResourceType::EDUCATION_PLAN_CONTRIBUTOR;

    /**
     * @param Query $query
     * @return EducationPlanContributor[] | Collection
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

        $query->setResourceType(ResourceType::EDUCATION_PLAN_CONTRIBUTOR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EducationPlanContributor
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EDUCATION_PLAN_CONTRIBUTOR, $id);
    }

    /**
     * @return \Arbor\Model\EducationPlan
     */
    public function getEducationPlan()
    {
        return $this->getProperty('educationPlan');
    }

    /**
     * @param \Arbor\Model\EducationPlan $educationPlan
     */
    public function setEducationPlan(\Arbor\Model\EducationPlan $educationPlan = null)
    {
        $this->setProperty('educationPlan', $educationPlan);
    }

    /**
     * @return ModelBase
     */
    public function getContributor()
    {
        return $this->getProperty('contributor');
    }

    /**
     * @param ModelBase $contributor
     */
    public function setContributor(\ModelBase $contributor = null)
    {
        $this->setProperty('contributor', $contributor);
    }
}
