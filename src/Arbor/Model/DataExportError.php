<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DataExportError extends ModelBase
{
    const EXPORT_JOB = 'exportJob';

    const ERROR_MESSAGE = 'errorMessage';

    protected $_resourceType = ResourceType::DATA_EXPORT_ERROR;

    /**
     * @param Query $query
     * @return DataExportError[] | Collection
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

        $query->setResourceType(ResourceType::DATA_EXPORT_ERROR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataExportError
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_EXPORT_ERROR, $id);
    }

    /**
     * @return ModelBase
     */
    public function getExportJob()
    {
        return $this->getProperty('exportJob');
    }

    /**
     * @param ModelBase $exportJob
     */
    public function setExportJob(ModelBase $exportJob = null)
    {
        $this->setProperty('exportJob', $exportJob);
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
