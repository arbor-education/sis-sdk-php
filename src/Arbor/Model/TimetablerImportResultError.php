<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TimetablerImportResultError extends ModelBase
{
    public const TIMETABLER_IMPORT_RESULT = 'timetablerImportResult';

    public const ERROR_MESSAGE = 'errorMessage';

    protected $_resourceType = ResourceType::TIMETABLER_IMPORT_RESULT_ERROR;

    /**
     * @param Query $query
     * @return TimetablerImportResultError[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLER_IMPORT_RESULT_ERROR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetablerImportResultError
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLER_IMPORT_RESULT_ERROR, $id);
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
    public function getErrorMessage()
    {
        return $this->getProperty('errorMessage');
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage(string $errorMessage = null)
    {
        $this->setProperty('errorMessage', $errorMessage);
    }
}
