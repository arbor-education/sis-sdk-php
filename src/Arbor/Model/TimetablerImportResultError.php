<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\TimetablerImportResult;

class TimetablerImportResultError extends ModelBase
{
    const TIMETABLER_IMPORT_RESULT = 'timetablerImportResult';

    const ERROR_MESSAGE = 'errorMessage';

    protected $_resourceType = ResourceType::TIMETABLER_IMPORT_RESULT_ERROR;

    /**
     * @param \Arbor\Query\Query $query
     * @return TimetablerImportResultError[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("TimetablerImportResultError");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TimetablerImportResultError
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::TIMETABLER_IMPORT_RESULT_ERROR, $id);
    }

    /**
     * @return TimetablerImportResult
     */
    public function getTimetablerImportResult()
    {
        return $this->getProperty("timetablerImportResult");
    }

    /**
     * @param TimetablerImportResult $timetablerImportResult
     */
    public function setTimetablerImportResult(TimetablerImportResult $timetablerImportResult = null)
    {
        $this->setProperty("timetablerImportResult", $timetablerImportResult);
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->getProperty("errorMessage");
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage($errorMessage = null)
    {
        $this->setProperty("errorMessage", $errorMessage);
    }
}
