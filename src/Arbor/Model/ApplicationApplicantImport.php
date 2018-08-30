<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ApplicationApplicantImportJob;
use \Arbor\Model\Application;

class ApplicationApplicantImport extends ModelBase
{

    protected $_resourceType = ResourceType::APPLICATION_APPLICANT_IMPORT;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\ApplicationApplicantImport[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("ApplicationApplicantImport");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\ApplicationApplicantImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("ApplicationApplicantImport", $id);
    }

    /**
     * @return ApplicationApplicantImportJob
     */
    public function getApplicationApplicantImportJob()
    {
        return $this->getProperty("applicationApplicantImportJob");
    }

    /**
     * @param ApplicationApplicantImportJob $applicationApplicantImportJob
     */
    public function setApplicationApplicantImportJob(ApplicationApplicantImportJob $applicationApplicantImportJob = null)
    {
        $this->setProperty("applicationApplicantImportJob", $applicationApplicantImportJob);
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        return $this->getProperty("application");
    }

    /**
     * @param Application $application
     */
    public function setApplication(Application $application = null)
    {
        $this->setProperty("application", $application);
    }

    /**
     * @return int
     */
    public function getRowIndex()
    {
        return $this->getProperty("rowIndex");
    }

    /**
     * @param int $rowIndex
     */
    public function setRowIndex($rowIndex = null)
    {
        $this->setProperty("rowIndex", $rowIndex);
    }

    /**
     * @return string
     */
    public function getErrors()
    {
        return $this->getProperty("errors");
    }

    /**
     * @param string $errors
     */
    public function setErrors($errors = null)
    {
        $this->setProperty("errors", $errors);
    }

    /**
     * @return string
     */
    public function getRequiredErrors()
    {
        return $this->getProperty("requiredErrors");
    }

    /**
     * @param string $requiredErrors
     */
    public function setRequiredErrors($requiredErrors = null)
    {
        $this->setProperty("requiredErrors", $requiredErrors);
    }


}
