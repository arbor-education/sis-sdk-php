<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CurriculumSection;
use \Arbor\Model\CurriculumStatementBand;

class CurriculumStatement extends ModelBase
{
    const CURRICULUM_SECTION = 'curriculumSection';

    const CURRICULUM_STATEMENT_BAND = 'curriculumStatementBand';

    const CODE = 'code';

    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const DESCRIPTION = 'description';

    const EXAMPLES = 'examples';

    const WEIGHTING = 'weighting';

    const REQUIREMENT_FOR_HIGHER = 'requirementForHigher';

    const ORDER = 'order';

    protected $_resourceType = ResourceType::CURRICULUM_STATEMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CurriculumStatement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CurriculumStatement");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CurriculumStatement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CURRICULUM_STATEMENT, $id);
    }

    /**
     * @return CurriculumSection
     */
    public function getCurriculumSection()
    {
        return $this->getProperty("curriculumSection");
    }

    /**
     * @param CurriculumSection $curriculumSection
     */
    public function setCurriculumSection(CurriculumSection $curriculumSection = null)
    {
        $this->setProperty("curriculumSection", $curriculumSection);
    }

    /**
     * @return CurriculumStatementBand
     */
    public function getCurriculumStatementBand()
    {
        return $this->getProperty("curriculumStatementBand");
    }

    /**
     * @param CurriculumStatementBand $curriculumStatementBand
     */
    public function setCurriculumStatementBand(CurriculumStatementBand $curriculumStatementBand = null)
    {
        $this->setProperty("curriculumStatementBand", $curriculumStatementBand);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
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
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }

    /**
     * @return string
     */
    public function getExamples()
    {
        return $this->getProperty("examples");
    }

    /**
     * @param string $examples
     */
    public function setExamples($examples = null)
    {
        $this->setProperty("examples", $examples);
    }

    /**
     * @return float
     */
    public function getWeighting()
    {
        return $this->getProperty("weighting");
    }

    /**
     * @param float $weighting
     */
    public function setWeighting($weighting = null)
    {
        $this->setProperty("weighting", $weighting);
    }

    /**
     * @return bool
     */
    public function getRequirementForHigher()
    {
        return $this->getProperty("requirementForHigher");
    }

    /**
     * @param bool $requirementForHigher
     */
    public function setRequirementForHigher($requirementForHigher = null)
    {
        $this->setProperty("requirementForHigher", $requirementForHigher);
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->getProperty("order");
    }

    /**
     * @param int $order
     */
    public function setOrder($order = null)
    {
        $this->setProperty("order", $order);
    }
}
