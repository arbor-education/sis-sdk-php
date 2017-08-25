<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SearchIndexJob extends ModelBase
{
    const OBJECT = 'object';

    const STARTED_DATETIME = 'startedDatetime';

    const THREAD_IDENTIFIER = 'threadIdentifier';

    const COMPLETED_DATETIME = 'completedDatetime';

    protected $_resourceType = ResourceType::SEARCH_INDEX_JOB;

    /**
     * @param Query $query
     * @return SearchIndexJob[] | Collection
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

        $query->setResourceType(ResourceType::SEARCH_INDEX_JOB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SearchIndexJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SEARCH_INDEX_JOB, $id);
    }

    /**
     * @return ModelBase
     */
    public function getObject()
    {
        return $this->getProperty('object');
    }

    /**
     * @param ModelBase $object
     */
    public function setObject(ModelBase $object = null)
    {
        $this->setProperty('object', $object);
    }

    /**
     * @return \DateTime
     */
    public function getStartedDatetime()
    {
        return $this->getProperty('startedDatetime');
    }

    /**
     * @param \DateTime $startedDatetime
     */
    public function setStartedDatetime(\DateTime $startedDatetime = null)
    {
        $this->setProperty('startedDatetime', $startedDatetime);
    }

    /**
     * @return int
     */
    public function getThreadIdentifier()
    {
        return $this->getProperty('threadIdentifier');
    }

    /**
     * @param int $threadIdentifier
     */
    public function setThreadIdentifier($threadIdentifier = null)
    {
        $this->setProperty('threadIdentifier', $threadIdentifier);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }
}
