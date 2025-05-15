<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ApplicationApplicantImport extends ModelBase
{
    public const APPLICATION_APPLICANT_IMPORT_JOB = 'applicationApplicantImportJob';

    public const APPLICATION = 'application';

    public const ROW_INDEX = 'rowIndex';

    public const ERRORS = 'errors';

    public const REQUIRED_ERRORS = 'requiredErrors';

    protected $_resourceType = ResourceType::APPLICATION_APPLICANT_IMPORT;

    /**
     * @param Query $query
     * @return ApplicationApplicantImport[] | Collection
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

        $query->setResourceType(ResourceType::APPLICATION_APPLICANT_IMPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ApplicationApplicantImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::APPLICATION_APPLICANT_IMPORT, $id);
    }

    /**
     * @return \Arbor\Model\ApplicationApplicantImportJob
     */
    public function getApplicationApplicantImportJob()
    {
        return $this->getProperty('applicationApplicantImportJob');
    }

    /**
     * @param \Arbor\Model\ApplicationApplicantImportJob $applicationApplicantImportJob
     */
    public function setApplicationApplicantImportJob(\Arbor\Model\ApplicationApplicantImportJob $applicationApplicantImportJob = null)
    {
        $this->setProperty('applicationApplicantImportJob', $applicationApplicantImportJob);
    }

    /**
     * @return \Arbor\Model\Application
     */
    public function getApplication()
    {
        return $this->getProperty('application');
    }

    /**
     * @param \Arbor\Model\Application $application
     */
    public function setApplication(\Arbor\Model\Application $application = null)
    {
        $this->setProperty('application', $application);
    }

    /**
     * @return int
     */
    public function getRowIndex()
    {
        return $this->getProperty('rowIndex');
    }

    /**
     * @param int $rowIndex
     */
    public function setRowIndex(int $rowIndex = null)
    {
        $this->setProperty('rowIndex', $rowIndex);
    }

    /**
     * @return string
     */
    public function getErrors()
    {
        return $this->getProperty('errors');
    }

    /**
     * @param string $errors
     */
    public function setErrors(string $errors = null)
    {
        $this->setProperty('errors', $errors);
    }

    /**
     * @return string
     */
    public function getRequiredErrors()
    {
        return $this->getProperty('requiredErrors');
    }

    /**
     * @param string $requiredErrors
     */
    public function setRequiredErrors(string $requiredErrors = null)
    {
        $this->setProperty('requiredErrors', $requiredErrors);
    }
}
