<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class ImportRecord extends ModelBase
{

    const IMPORTER = 'importer';

    const IMPORTER_NAME = 'importerName';

    const IMPORTED_RECORD_ENTITY_TYPE = 'importedRecordEntityType';

    const IMPORTED_RECORD = 'importedRecord';

    protected $_resourceType = ResourceType::IMPORT_RECORD;

    /**
     * @param \Arbor\Query\Query $query
     * @return ImportRecord[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("ImportRecord");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ImportRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::IMPORT_RECORD, $id);
    }

    /**
     * @return ModelBase
     */
    public function getImporter()
    {
        return $this->getProperty("importer");
    }

    /**
     * @param ModelBase $importer
     */
    public function setImporter(ModelBase $importer = null)
    {
        $this->setProperty("importer", $importer);
    }

    /**
     * @return string
     */
    public function getImporterName()
    {
        return $this->getProperty("importerName");
    }

    /**
     * @param string $importerName
     */
    public function setImporterName($importerName = null)
    {
        $this->setProperty("importerName", $importerName);
    }

    /**
     * @return int
     */
    public function getImportedRecordEntityType()
    {
        return $this->getProperty("importedRecordEntityType");
    }

    /**
     * @param int $importedRecordEntityType
     */
    public function setImportedRecordEntityType($importedRecordEntityType = null)
    {
        $this->setProperty("importedRecordEntityType", $importedRecordEntityType);
    }

    /**
     * @return ModelBase
     */
    public function getImportedRecord()
    {
        return $this->getProperty("importedRecord");
    }

    /**
     * @param ModelBase $importedRecord
     */
    public function setImportedRecord(ModelBase $importedRecord = null)
    {
        $this->setProperty("importedRecord", $importedRecord);
    }


}
