<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TimetablerImportResultUpdate extends ModelBase
{
    const TIMETABLER_IMPORT_RESULT = 'timetablerImportResult';

    const UPDATED = 'updated';

    protected $_resourceType = ResourceType::TIMETABLER_IMPORT_RESULT_UPDATE;

    /**
     * @param Query $query
     * @return TimetablerImportResultUpdate[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLER_IMPORT_RESULT_UPDATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetablerImportResultUpdate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLER_IMPORT_RESULT_UPDATE, $id);
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
     * @return ModelBase
     */
    public function getUpdated()
    {
        return $this->getProperty('updated');
    }

    /**
     * @param ModelBase $updated
     */
    public function setUpdated(ModelBase $updated = null)
    {
        $this->setProperty('updated', $updated);
    }
}
