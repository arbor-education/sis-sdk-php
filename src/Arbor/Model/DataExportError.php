<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class DataExportError extends ModelBase
{

    const EXPORT_JOB = 'exportJob';

    const ERROR_MESSAGE = 'errorMessage';

    protected $_resourceType = ResourceType::DATA_EXPORT_ERROR;

    /**
     * @param \Arbor\Query\Query $query
     * @return DataExportError[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("DataExportError");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DataExportError
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::DATA_EXPORT_ERROR, $id);
    }

    /**
     * @return ModelBase
     */
    public function getExportJob()
    {
        return $this->getProperty("exportJob");
    }

    /**
     * @param ModelBase $exportJob
     */
    public function setExportJob(ModelBase $exportJob = null)
    {
        $this->setProperty("exportJob", $exportJob);
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->getProperty("errorMessage");
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage($errorMessage = null)
    {
        $this->setProperty("errorMessage", $errorMessage);
    }


}
