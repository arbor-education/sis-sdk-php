<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OptionsImportAcademicUnitMapping extends ModelBase
{
    public const OPTIONS_IMPORT_RESULT = 'optionsImportResult';

    public const ACADEMIC_UNIT_NAME = 'academicUnitName';

    public const MAPPING_ACTION = 'mappingAction';

    public const MAPPED_ACADEMIC_UNIT = 'mappedAcademicUnit';

    protected $_resourceType = ResourceType::OPTIONS_IMPORT_ACADEMIC_UNIT_MAPPING;

    /**
     * @param Query $query
     * @return OptionsImportAcademicUnitMapping[] | Collection
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

        $query->setResourceType(ResourceType::OPTIONS_IMPORT_ACADEMIC_UNIT_MAPPING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OptionsImportAcademicUnitMapping
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OPTIONS_IMPORT_ACADEMIC_UNIT_MAPPING, $id);
    }

    /**
     * @return \Arbor\Model\OptionsImportResult
     */
    public function getOptionsImportResult()
    {
        return $this->getProperty('optionsImportResult');
    }

    /**
     * @param \Arbor\Model\OptionsImportResult $optionsImportResult
     */
    public function setOptionsImportResult(\Arbor\Model\OptionsImportResult $optionsImportResult = null)
    {
        $this->setProperty('optionsImportResult', $optionsImportResult);
    }

    /**
     * @return string
     */
    public function getAcademicUnitName()
    {
        return $this->getProperty('academicUnitName');
    }

    /**
     * @param string $academicUnitName
     */
    public function setAcademicUnitName(string $academicUnitName = null)
    {
        $this->setProperty('academicUnitName', $academicUnitName);
    }

    /**
     * @return string
     */
    public function getMappingAction()
    {
        return $this->getProperty('mappingAction');
    }

    /**
     * @param string $mappingAction
     */
    public function setMappingAction(string $mappingAction = null)
    {
        $this->setProperty('mappingAction', $mappingAction);
    }

    /**
     * @return \Arbor\Model\AcademicUnit
     */
    public function getMappedAcademicUnit()
    {
        return $this->getProperty('mappedAcademicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $mappedAcademicUnit
     */
    public function setMappedAcademicUnit(\Arbor\Model\AcademicUnit $mappedAcademicUnit = null)
    {
        $this->setProperty('mappedAcademicUnit', $mappedAcademicUnit);
    }
}
