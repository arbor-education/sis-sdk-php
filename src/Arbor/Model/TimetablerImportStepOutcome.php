<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TimetablerImportStepOutcome extends ModelBase
{
    public const TIMETABLER_IMPORT_RESULT = 'timetablerImportResult';

    public const IDENTIFIER = 'identifier';

    public const DESCRIPTION = 'description';

    public const OPTION_TYPE = 'optionType';

    public const LINKED_OBJECT = 'linkedObject';

    public const STEP_TYPE = 'stepType';

    public const IS_DRAFT = 'isDraft';

    protected $_resourceType = ResourceType::TIMETABLER_IMPORT_STEP_OUTCOME;

    /**
     * @param Query $query
     * @return TimetablerImportStepOutcome[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLER_IMPORT_STEP_OUTCOME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetablerImportStepOutcome
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLER_IMPORT_STEP_OUTCOME, $id);
    }

    /**
     * @return \Arbor\Model\TimetablerImportResult
     */
    public function getTimetablerImportResult()
    {
        return $this->getProperty('timetablerImportResult');
    }

    /**
     * @param \Arbor\Model\TimetablerImportResult $timetablerImportResult
     */
    public function setTimetablerImportResult(\Arbor\Model\TimetablerImportResult $timetablerImportResult = null)
    {
        $this->setProperty('timetablerImportResult', $timetablerImportResult);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty('identifier');
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier = null)
    {
        $this->setProperty('identifier', $identifier);
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
    public function getOptionType()
    {
        return $this->getProperty('optionType');
    }

    /**
     * @param string $optionType
     */
    public function setOptionType(string $optionType = null)
    {
        $this->setProperty('optionType', $optionType);
    }

    /**
     * @return ModelBase
     */
    public function getLinkedObject()
    {
        return $this->getProperty('linkedObject');
    }

    /**
     * @param ModelBase $linkedObject
     */
    public function setLinkedObject(\ModelBase $linkedObject = null)
    {
        $this->setProperty('linkedObject', $linkedObject);
    }

    /**
     * @return string
     */
    public function getStepType()
    {
        return $this->getProperty('stepType');
    }

    /**
     * @param string $stepType
     */
    public function setStepType(string $stepType = null)
    {
        $this->setProperty('stepType', $stepType);
    }

    /**
     * @return bool
     */
    public function getIsDraft()
    {
        return $this->getProperty('isDraft');
    }

    /**
     * @param bool $isDraft
     */
    public function setIsDraft(bool $isDraft = null)
    {
        $this->setProperty('isDraft', $isDraft);
    }
}
