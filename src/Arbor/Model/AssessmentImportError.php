<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentImportError extends ModelBase
{
    public const ASSESSMENT_IMPORT_JOB = 'assessmentImportJob';

    public const ERROR_MESSAGE = 'errorMessage';

    protected $_resourceType = ResourceType::ASSESSMENT_IMPORT_ERROR;

    /**
     * @param Query $query
     * @return AssessmentImportError[] | Collection
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
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->getProperty('errorMessage');
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage(string $errorMessage = null)
    {
        $this->setProperty('errorMessage', $errorMessage);
    }
}
