<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TimetablerImportStepOutcome extends ModelBase
{

    const TIMETABLER_IMPORT_RESULT = 'timetablerImportResult';

    const IDENTIFIER = 'identifier';

    const DESCRIPTION = 'description';

    const OPTION_TYPE = 'optionType';

    const LINKED_OBJECT = 'linkedObject';

    const STEP_TYPE = 'stepType';

    const IS_DRAFT = 'isDraft';

    protected $_resourceType = ResourceType::TIMETABLER_IMPORT_STEP_OUTCOME;

    /**
     * @param Query $query
     * @return TimetablerImportStepOutcome[] | Collection
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
     * @return TimetablerImportResult
     */
    public function getTimetablerImportResult()
    {
        return $this->getProperty('timetablerImportResult');
    }

    /**
     * @param TimetablerImportResult $timetablerImportResult
     */
    public function setTimetablerImportResult(TimetablerImportResult $timetablerImportResult = null)
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
    public function setIdentifier($identifier = null)
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
    public function setDescription($description = null)
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
    public function setOptionType($optionType = null)
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
    public function setLinkedObject(ModelBase $linkedObject = null)
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
    public function setStepType($stepType = null)
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
    public function setIsDraft($isDraft = null)
    {
        $this->setProperty('isDraft', $isDraft);
    }


}
