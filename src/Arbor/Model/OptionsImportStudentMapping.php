<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class OptionsImportStudentMapping extends ModelBase
{

    const OPTIONS_IMPORT_RESULT = 'optionsImportResult';

    const STUDENT_NAME = 'studentName';

    const STUDENT_IDENTIFIER = 'studentIdentifier';

    const MAPPING_ACTION = 'mappingAction';

    const MAPPED_STUDENT = 'mappedStudent';

    protected $_resourceType = ResourceType::OPTIONS_IMPORT_STUDENT_MAPPING;

    /**
     * @param Query $query
     * @return OptionsImportStudentMapping[] | Collection
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
     * @return OptionsImportResult
     */
    public function getOptionsImportResult()
    {
        return $this->getProperty('optionsImportResult');
    }

    /**
     * @param OptionsImportResult $optionsImportResult
     */
    public function setOptionsImportResult(OptionsImportResult $optionsImportResult = null)
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
    public function setStudentName($studentName = null)
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
    public function setStudentIdentifier($studentIdentifier = null)
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
    public function setMappingAction($mappingAction = null)
    {
        $this->setProperty('mappingAction', $mappingAction);
    }

    /**
     * @return Student
     */
    public function getMappedStudent()
    {
        return $this->getProperty('mappedStudent');
    }

    /**
     * @param Student $mappedStudent
     */
    public function setMappedStudent(Student $mappedStudent = null)
    {
        $this->setProperty('mappedStudent', $mappedStudent);
    }


}
