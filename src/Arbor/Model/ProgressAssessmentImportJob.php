<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class ProgressAssessmentImportJob extends ModelBase
{

    const UPLOADED_DATETIME = 'uploadedDatetime';

    const IMPORT_STARTED_DATETIME = 'importStartedDatetime';

    const IMPORTED_DATETIME = 'importedDatetime';

    const DATA = 'data';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_IMPORT_JOB;

    /**
     * @param \Arbor\Query\Query $query
     * @return ProgressAssessmentImportJob[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("ProgressAssessmentImportJob");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ProgressAssessmentImportJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::PROGRESS_ASSESSMENT_IMPORT_JOB, $id);
    }

    /**
     * @return \DateTime
     */
    public function getUploadedDatetime()
    {
        return $this->getProperty("uploadedDatetime");
    }

    /**
     * @param \DateTime $uploadedDatetime
     */
    public function setUploadedDatetime(\DateTime $uploadedDatetime = null)
    {
        $this->setProperty("uploadedDatetime", $uploadedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getImportStartedDatetime()
    {
        return $this->getProperty("importStartedDatetime");
    }

    /**
     * @param \DateTime $importStartedDatetime
     */
    public function setImportStartedDatetime(\DateTime $importStartedDatetime = null)
    {
        $this->setProperty("importStartedDatetime", $importStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getImportedDatetime()
    {
        return $this->getProperty("importedDatetime");
    }

    /**
     * @param \DateTime $importedDatetime
     */
    public function setImportedDatetime(\DateTime $importedDatetime = null)
    {
        $this->setProperty("importedDatetime", $importedDatetime);
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->getProperty("data");
    }

    /**
     * @param string $data
     */
    public function setData($data = null)
    {
        $this->setProperty("data", $data);
    }


}
