<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TimetableImportTimetableSlotRelatedEntity extends ModelBase
{
    public const TIMETABLE_IMPORT_TIMETABLE_SLOT = 'timetableImportTimetableSlot';

    public const RELATED_ENTITY = 'relatedEntity';

    protected $_resourceType = ResourceType::TIMETABLE_IMPORT_TIMETABLE_SLOT_RELATED_ENTITY;

    /**
     * @param Query $query
     * @return TimetableImportTimetableSlotRelatedEntity[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLE_IMPORT_TIMETABLE_SLOT_RELATED_ENTITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetableImportTimetableSlotRelatedEntity
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLE_IMPORT_TIMETABLE_SLOT_RELATED_ENTITY, $id);
    }

    /**
     * @return \Arbor\Model\TimetableImportTimetableSlot
     */
    public function getTimetableImportTimetableSlot()
    {
        return $this->getProperty('timetableImportTimetableSlot');
    }

    /**
     * @param \Arbor\Model\TimetableImportTimetableSlot $timetableImportTimetableSlot
     */
    public function setTimetableImportTimetableSlot(\Arbor\Model\TimetableImportTimetableSlot $timetableImportTimetableSlot = null)
    {
        $this->setProperty('timetableImportTimetableSlot', $timetableImportTimetableSlot);
    }

    /**
     * @return ModelBase
     */
    public function getRelatedEntity()
    {
        return $this->getProperty('relatedEntity');
    }

    /**
     * @param ModelBase $relatedEntity
     */
    public function setRelatedEntity(\ModelBase $relatedEntity = null)
    {
        $this->setProperty('relatedEntity', $relatedEntity);
    }
}
