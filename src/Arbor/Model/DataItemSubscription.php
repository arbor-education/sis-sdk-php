<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DataItemSubscription extends ModelBase
{
    const ENTITY_TYPE = 'entityType';

    const URL = 'url';

    const LAST_UPDATED_DATETIME = 'lastUpdatedDatetime';

    const DATA_SET_SUBSCRIPTION = 'dataSetSubscription';

    const DO_NOT_UPDATE = 'doNotUpdate';

    protected $_resourceType = ResourceType::DATA_ITEM_SUBSCRIPTION;

    /**
     * @param Query $query
     * @return DataItemSubscription[] | Collection
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

        $query->setResourceType(ResourceType::DATA_ITEM_SUBSCRIPTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataItemSubscription
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_ITEM_SUBSCRIPTION, $id);
    }

    /**
     * @return int
     */
    public function getEntityType()
    {
        return $this->getProperty('entityType');
    }

    /**
     * @param int $entityType
     */
    public function setEntityType($entityType = null)
    {
        $this->setProperty('entityType', $entityType);
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->getProperty('url');
    }

    /**
     * @param string $url
     */
    public function setUrl($url = null)
    {
        $this->setProperty('url', $url);
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdatedDatetime()
    {
        return $this->getProperty('lastUpdatedDatetime');
    }

    /**
     * @param \DateTime $lastUpdatedDatetime
     */
    public function setLastUpdatedDatetime(\DateTime $lastUpdatedDatetime = null)
    {
        $this->setProperty('lastUpdatedDatetime', $lastUpdatedDatetime);
    }

    /**
     * @return DataSetSubscription
     */
    public function getDataSetSubscription()
    {
        return $this->getProperty('dataSetSubscription');
    }

    /**
     * @param DataSetSubscription $dataSetSubscription
     */
    public function setDataSetSubscription(DataSetSubscription $dataSetSubscription = null)
    {
        $this->setProperty('dataSetSubscription', $dataSetSubscription);
    }

    /**
     * @return bool
     */
    public function getDoNotUpdate()
    {
        return $this->getProperty('doNotUpdate');
    }

    /**
     * @param bool $doNotUpdate
     */
    public function setDoNotUpdate($doNotUpdate = null)
    {
        $this->setProperty('doNotUpdate', $doNotUpdate);
    }
}
