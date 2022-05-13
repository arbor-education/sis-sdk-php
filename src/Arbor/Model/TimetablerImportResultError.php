<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TimetablerImportResultError extends ModelBase
{
    const TIMETABLER_IMPORT_RESULT = 'timetablerImportResult';

    const ERROR_MESSAGE = 'errorMessage';

    protected $_resourceType = ResourceType::TIMETABLER_IMPORT_RESULT_ERROR;

    /**
     * @param Query $query
     * @return TimetablerImportResultError[] | Collection
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
    public function getErrorMessage()
    {
        return $this->getProperty('errorMessage');
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage($errorMessage = null)
    {
        $this->setProperty('errorMessage', $errorMessage);
    }

}
