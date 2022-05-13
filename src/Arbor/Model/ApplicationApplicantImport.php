<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ApplicationApplicantImport extends ModelBase
{
    const APPLICATION_APPLICANT_IMPORT_JOB = 'applicationApplicantImportJob';

    const APPLICATION = 'application';

    const ROW_INDEX = 'rowIndex';

    const ERRORS = 'errors';

    const REQUIRED_ERRORS = 'requiredErrors';

    protected $_resourceType = ResourceType::APPLICATION_APPLICANT_IMPORT;

    /**
     * @param Query $query
     * @return ApplicationApplicantImport[] | Collection
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
     * @return ApplicationApplicantImportJob
     */
    public function getApplicationApplicantImportJob()
    {
        return $this->getProperty('applicationApplicantImportJob');
    }

    /**
     * @param ApplicationApplicantImportJob $applicationApplicantImportJob
     */
    public function setApplicationApplicantImportJob(ApplicationApplicantImportJob $applicationApplicantImportJob = null)
    {
        $this->setProperty('applicationApplicantImportJob', $applicationApplicantImportJob);
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        return $this->getProperty('application');
    }

    /**
     * @param Application $application
     */
    public function setApplication(Application $application = null)
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
    public function setRowIndex($rowIndex = null)
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
    public function setErrors($errors = null)
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
    public function setRequiredErrors($requiredErrors = null)
    {
        $this->setProperty('requiredErrors', $requiredErrors);
    }
}
