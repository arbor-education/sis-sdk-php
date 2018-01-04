<?php

namespace Arbor\Model\Group;

use Arbor\Resource\Group\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\CurriculumTier;

class InstitutionCurriculumTier extends ModelBase
{

    const INSTITUTION = 'institution';

    const CURRICULUM_TIER = 'curriculumTier';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::GROUP_INSTITUTION_CURRICULUM_TIER;

    /**
     * @param Query $query
     * @return InstitutionCurriculumTier[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::GROUP_INSTITUTION_CURRICULUM_TIER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InstitutionCurriculumTier
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GROUP_INSTITUTION_CURRICULUM_TIER, $id);
    }

    /**
     * @return Institution
     */
    public function getInstitution()
    {
        return $this->getProperty('institution');
    }

    /**
     * @param Institution $institution
     */
    public function setInstitution(Institution $institution = null)
    {
        $this->setProperty('institution', $institution);
    }

    /**
     * @return CurriculumTier
     */
    public function getCurriculumTier()
    {
        return $this->getProperty('curriculumTier');
    }

    /**
     * @param CurriculumTier $curriculumTier
     */
    public function setCurriculumTier(CurriculumTier $curriculumTier = null)
    {
        $this->setProperty('curriculumTier', $curriculumTier);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }


}
