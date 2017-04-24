<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\InterventionCategory;
use \Arbor\Model\CurriculumGrade;

class InterventionDefinition extends ModelBase
{
    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const INTERVENTION_CATEGORY = 'interventionCategory';

    const LOWEST_CURRICULUM_GRADE = 'lowestCurriculumGrade';

    const HIGHEST_CURRICULUM_GRADE = 'highestCurriculumGrade';

    protected $_resourceType = ResourceType::INTERVENTION_DEFINITION;

    /**
     * @param \Arbor\Query\Query $query
     * @return InterventionDefinition[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("InterventionDefinition");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return InterventionDefinition
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::INTERVENTION_DEFINITION, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("name");
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty("name", $name);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty("shortName");
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty("shortName", $shortName);
    }

    /**
     * @return InterventionCategory
     */
    public function getInterventionCategory()
    {
        return $this->getProperty("interventionCategory");
    }

    /**
     * @param InterventionCategory $interventionCategory
     */
    public function setInterventionCategory(InterventionCategory $interventionCategory = null)
    {
        $this->setProperty("interventionCategory", $interventionCategory);
    }

    /**
     * @return CurriculumGrade
     */
    public function getLowestCurriculumGrade()
    {
        return $this->getProperty("lowestCurriculumGrade");
    }

    /**
     * @param CurriculumGrade $lowestCurriculumGrade
     */
    public function setLowestCurriculumGrade(CurriculumGrade $lowestCurriculumGrade = null)
    {
        $this->setProperty("lowestCurriculumGrade", $lowestCurriculumGrade);
    }

    /**
     * @return CurriculumGrade
     */
    public function getHighestCurriculumGrade()
    {
        return $this->getProperty("highestCurriculumGrade");
    }

    /**
     * @param CurriculumGrade $highestCurriculumGrade
     */
    public function setHighestCurriculumGrade(CurriculumGrade $highestCurriculumGrade = null)
    {
        $this->setProperty("highestCurriculumGrade", $highestCurriculumGrade);
    }
}
