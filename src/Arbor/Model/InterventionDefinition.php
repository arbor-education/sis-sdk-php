<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InterventionDefinition extends ModelBase
{

    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const INTERVENTION_CATEGORY = 'interventionCategory';

    const LOWEST_CURRICULUM_GRADE = 'lowestCurriculumGrade';

    const HIGHEST_CURRICULUM_GRADE = 'highestCurriculumGrade';

    protected $_resourceType = ResourceType::INTERVENTION_DEFINITION;

    /**
     * @param Query $query
     * @return InterventionDefinition[] | Collection
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

        $query->setResourceType(ResourceType::INTERVENTION_DEFINITION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InterventionDefinition
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERVENTION_DEFINITION, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return InterventionCategory
     */
    public function getInterventionCategory()
    {
        return $this->getProperty('interventionCategory');
    }

    /**
     * @param InterventionCategory $interventionCategory
     */
    public function setInterventionCategory(InterventionCategory $interventionCategory = null)
    {
        $this->setProperty('interventionCategory', $interventionCategory);
    }

    /**
     * @return CurriculumGrade
     */
    public function getLowestCurriculumGrade()
    {
        return $this->getProperty('lowestCurriculumGrade');
    }

    /**
     * @param CurriculumGrade $lowestCurriculumGrade
     */
    public function setLowestCurriculumGrade(CurriculumGrade $lowestCurriculumGrade = null)
    {
        $this->setProperty('lowestCurriculumGrade', $lowestCurriculumGrade);
    }

    /**
     * @return CurriculumGrade
     */
    public function getHighestCurriculumGrade()
    {
        return $this->getProperty('highestCurriculumGrade');
    }

    /**
     * @param CurriculumGrade $highestCurriculumGrade
     */
    public function setHighestCurriculumGrade(CurriculumGrade $highestCurriculumGrade = null)
    {
        $this->setProperty('highestCurriculumGrade', $highestCurriculumGrade);
    }


}
