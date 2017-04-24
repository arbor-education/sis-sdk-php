<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\TimetablerImportResult;

class TimetablerImportResultUpdate extends ModelBase
{
    const TIMETABLER_IMPORT_RESULT = 'timetablerImportResult';

    const UPDATED = 'updated';

    protected $_resourceType = ResourceType::TIMETABLER_IMPORT_RESULT_UPDATE;

    /**
     * @param \Arbor\Query\Query $query
     * @return TimetablerImportResultUpdate[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("TimetablerImportResultUpdate");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TimetablerImportResultUpdate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::TIMETABLER_IMPORT_RESULT_UPDATE, $id);
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
     * @return ModelBase
     */
    public function getUpdated()
    {
        return $this->getProperty("updated");
    }

    /**
     * @param ModelBase $updated
     */
    public function setUpdated(ModelBase $updated = null)
    {
        $this->setProperty("updated", $updated);
    }
}
