<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TimetablerImportResultUpdate extends ModelBase
{
    public const TIMETABLER_IMPORT_RESULT = 'timetablerImportResult';

    public const UPDATED = 'updated';

    protected $_resourceType = ResourceType::TIMETABLER_IMPORT_RESULT_UPDATE;

    /**
     * @param Query $query
     * @return TimetablerImportResultUpdate[] | Collection
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
     * @return ModelBase
     */
    public function getUpdated()
    {
        return $this->getProperty('updated');
    }

    /**
     * @param ModelBase $updated
     */
    public function setUpdated(\ModelBase $updated = null)
    {
        $this->setProperty('updated', $updated);
    }
}
