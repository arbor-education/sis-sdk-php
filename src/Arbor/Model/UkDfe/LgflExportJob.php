<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class LgflExportJob extends ModelBase
{

    const STARTED_DATETIME = 'startedDatetime';

    const COMPLETED_DATETIME = 'completedDatetime';

    const ERROR_DATETIME = 'errorDatetime';

    const ERROR_LOG = 'errorLog';

    protected $_resourceType = ResourceType::UK_DFE_LGFL_EXPORT_JOB;

    /**
     * @param \Arbor\Query\Query $query
     * @return LgflExportJob[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_LgflExportJob");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return LgflExportJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_LGFL_EXPORT_JOB, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartedDatetime()
    {
        return $this->getProperty("startedDatetime");
    }

    /**
     * @param \DateTime $startedDatetime
     */
    public function setStartedDatetime(\DateTime $startedDatetime = null)
    {
        $this->setProperty("startedDatetime", $startedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty("completedDatetime");
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty("completedDatetime", $completedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getErrorDatetime()
    {
        return $this->getProperty("errorDatetime");
    }

    /**
     * @param \DateTime $errorDatetime
     */
    public function setErrorDatetime(\DateTime $errorDatetime = null)
    {
        $this->setProperty("errorDatetime", $errorDatetime);
    }

    /**
     * @return string
     */
    public function getErrorLog()
    {
        return $this->getProperty("errorLog");
    }

    /**
     * @param string $errorLog
     */
    public function setErrorLog($errorLog = null)
    {
        $this->setProperty("errorLog", $errorLog);
    }


}
