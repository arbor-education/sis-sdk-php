<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OptionsImportStudentMapping extends ModelBase
{
    public const OPTIONS_IMPORT_RESULT = 'optionsImportResult';

    public const STUDENT_NAME = 'studentName';

    public const STUDENT_IDENTIFIER = 'studentIdentifier';

    public const MAPPING_ACTION = 'mappingAction';

    public const MAPPED_STUDENT = 'mappedStudent';

    protected $_resourceType = ResourceType::OPTIONS_IMPORT_STUDENT_MAPPING;

    /**
     * @param Query $query
     * @return OptionsImportStudentMapping[] | Collection
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

        $query->setResourceType(ResourceType::OPTIONS_IMPORT_STUDENT_MAPPING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OptionsImportStudentMapping
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OPTIONS_IMPORT_STUDENT_MAPPING, $id);
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
    public function getStudentName()
    {
        return $this->getProperty('studentName');
    }

    /**
     * @param string $studentName
     */
    public function setStudentName(string $studentName = null)
    {
        $this->setProperty('studentName', $studentName);
    }

    /**
     * @return string
     */
    public function getStudentIdentifier()
    {
        return $this->getProperty('studentIdentifier');
    }

    /**
     * @param string $studentIdentifier
     */
    public function setStudentIdentifier(string $studentIdentifier = null)
    {
        $this->setProperty('studentIdentifier', $studentIdentifier);
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
     * @return \Arbor\Model\Student
     */
    public function getMappedStudent()
    {
        return $this->getProperty('mappedStudent');
    }

    /**
     * @param \Arbor\Model\Student $mappedStudent
     */
    public function setMappedStudent(\Arbor\Model\Student $mappedStudent = null)
    {
        $this->setProperty('mappedStudent', $mappedStudent);
    }
}
