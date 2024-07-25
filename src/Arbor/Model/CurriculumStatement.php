<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CurriculumStatement extends ModelBase
{
    public const CURRICULUM_SECTION = 'curriculumSection';

    public const CURRICULUM_STATEMENT_BAND = 'curriculumStatementBand';

    public const CODE = 'code';

    public const NAME = 'name';

    public const SHORT_NAME = 'shortName';

    public const DESCRIPTION = 'description';

    public const EXAMPLES = 'examples';

    public const WEIGHTING = 'weighting';

    public const REQUIREMENT_FOR_HIGHER = 'requirementForHigher';

    public const ORDER = 'order';

    protected $_resourceType = ResourceType::CURRICULUM_STATEMENT;

    /**
     * @param Query $query
     * @return CurriculumStatement[] | Collection
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

        $query->setResourceType(ResourceType::CURRICULUM_STATEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CurriculumStatement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CURRICULUM_STATEMENT, $id);
    }

    /**
     * @return \Arbor\Model\CurriculumSection
     */
    public function getCurriculumSection()
    {
        return $this->getProperty('curriculumSection');
    }

    /**
     * @param \Arbor\Model\CurriculumSection $curriculumSection
     */
    public function setCurriculumSection(\Arbor\Model\CurriculumSection $curriculumSection = null)
    {
        $this->setProperty('curriculumSection', $curriculumSection);
    }

    /**
     * @return \Arbor\Model\CurriculumStatementBand
     */
    public function getCurriculumStatementBand()
    {
        return $this->getProperty('curriculumStatementBand');
    }

    /**
     * @param \Arbor\Model\CurriculumStatementBand $curriculumStatementBand
     */
    public function setCurriculumStatementBand(\Arbor\Model\CurriculumStatementBand $curriculumStatementBand = null)
    {
        $this->setProperty('curriculumStatementBand', $curriculumStatementBand);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
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
    public function setName(string $name = null)
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
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return string
     */
    public function getExamples()
    {
        return $this->getProperty('examples');
    }

    /**
     * @param string $examples
     */
    public function setExamples(string $examples = null)
    {
        $this->setProperty('examples', $examples);
    }

    /**
     * @return float
     */
    public function getWeighting()
    {
        return $this->getProperty('weighting');
    }

    /**
     * @param float $weighting
     */
    public function setWeighting(float $weighting = null)
    {
        $this->setProperty('weighting', $weighting);
    }

    /**
     * @return bool
     */
    public function getRequirementForHigher()
    {
        return $this->getProperty('requirementForHigher');
    }

    /**
     * @param bool $requirementForHigher
     */
    public function setRequirementForHigher(bool $requirementForHigher = null)
    {
        $this->setProperty('requirementForHigher', $requirementForHigher);
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->getProperty('order');
    }

    /**
     * @param int $order
     */
    public function setOrder(int $order = null)
    {
        $this->setProperty('order', $order);
    }
}
