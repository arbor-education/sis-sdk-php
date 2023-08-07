<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentImportColumn extends \ModelBase
{
    public const ASSESSMENT_IMPORT_JOB = 'assessmentImportJob';

    public const MAPPED_ASSESSMENT_ASPECT = 'mappedAssessmentAspect';

    protected $_resourceType = ResourceType::ASSESSMENT_IMPORT_COLUMN;

    /**
     * @param Query $query
     * @return AssessmentImportColumn[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::ASSESSMENT_IMPORT_COLUMN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentImportColumn
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_IMPORT_COLUMN, $id);
    }

    /**
     * @return AssessmentImportJob
     */
    public function getAssessmentImportJob()
    {
        return $this->getProperty('assessmentImportJob');
    }

    /**
     * @param AssessmentImportJob $assessmentImportJob
     */
    public function setAssessmentImportJob(\AssessmentImportJob $assessmentImportJob = null)
    {
        $this->setProperty('assessmentImportJob', $assessmentImportJob);
    }

    /**
     * @return ModelBase
     */
    public function getMappedAssessmentAspect()
    {
        return $this->getProperty('mappedAssessmentAspect');
    }

    /**
     * @param ModelBase $mappedAssessmentAspect
     */
    public function setMappedAssessmentAspect(\ModelBase $mappedAssessmentAspect = null)
    {
        $this->setProperty('mappedAssessmentAspect', $mappedAssessmentAspect);
    }
}
