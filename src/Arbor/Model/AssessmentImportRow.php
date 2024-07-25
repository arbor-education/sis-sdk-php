<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentImportRow extends ModelBase
{
    public const ASSESSMENT_IMPORT_JOB = 'assessmentImportJob';

    public const MAPPED_STUDENT = 'mappedStudent';

    protected $_resourceType = ResourceType::ASSESSMENT_IMPORT_ROW;

    /**
     * @param Query $query
     * @return AssessmentImportRow[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_IMPORT_ROW);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentImportRow
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_IMPORT_ROW, $id);
    }

    /**
     * @return \Arbor\Model\AssessmentImportJob
     */
    public function getAssessmentImportJob()
    {
        return $this->getProperty('assessmentImportJob');
    }

    /**
     * @param \Arbor\Model\AssessmentImportJob $assessmentImportJob
     */
    public function setAssessmentImportJob(\Arbor\Model\AssessmentImportJob $assessmentImportJob = null)
    {
        $this->setProperty('assessmentImportJob', $assessmentImportJob);
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
