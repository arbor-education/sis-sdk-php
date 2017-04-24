<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class CrmSyncJob extends ModelBase
{
    const TASK = 'task';

    const PARAMS = 'params';

    const STATUS = 'status';

    const STATUS_DATETIME = 'statusDatetime';

    protected $_resourceType = ResourceType::GROUP_CRM_SYNC_JOB;

    /**
     * @param \Arbor\Query\Query $query
     * @return CrmSyncJob[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Group_CrmSyncJob");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CrmSyncJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GROUP_CRM_SYNC_JOB, $id);
    }

    /**
     * @return string
     */
    public function getTask()
    {
        return $this->getProperty("task");
    }

    /**
     * @param string $task
     */
    public function setTask($task = null)
    {
        $this->setProperty("task", $task);
    }

    /**
     * @return string
     */
    public function getParams()
    {
        return $this->getProperty("params");
    }

    /**
     * @param string $params
     */
    public function setParams($params = null)
    {
        $this->setProperty("params", $params);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty("status");
    }

    /**
     * @param string $status
     */
    public function setStatus($status = null)
    {
        $this->setProperty("status", $status);
    }

    /**
     * @return \DateTime
     */
    public function getStatusDatetime()
    {
        return $this->getProperty("statusDatetime");
    }

    /**
     * @param \DateTime $statusDatetime
     */
    public function setStatusDatetime(\DateTime $statusDatetime = null)
    {
        $this->setProperty("statusDatetime", $statusDatetime);
    }
}
