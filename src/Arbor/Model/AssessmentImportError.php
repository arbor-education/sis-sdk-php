<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentImportError extends ModelBase
{

    const ASSESSMENT_IMPORT_JOB = 'assessmentImportJob';

    const ERROR_MESSAGE = 'errorMessage';

    protected $_resourceType = ResourceType::ASSESSMENT_IMPORT_ERROR;

    /**
     * @param Query $query
     * @return AssessmentImportError[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_IMPORT_ERROR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentImportError
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_IMPORT_ERROR, $id);
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
    public function setAssessmentImportJob(AssessmentImportJob $assessmentImportJob = null)
    {
        $this->setProperty('assessmentImportJob', $assessmentImportJob);
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->getProperty('errorMessage');
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage($errorMessage = null)
    {
        $this->setProperty('errorMessage', $errorMessage);
    }


}
