<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DataSetSubscription extends ModelBase
{
    public const DATA_SET_NAME = 'dataSetName';

    public const DATA_SET_IDENTIFIER = 'dataSetIdentifier';

    public const SUPPLIER_IDENTIFIER = 'supplierIdentifier';

    public const ENTITY_TYPE = 'entityType';

    public const CURRENT_DATA_SET_VERSION = 'currentDataSetVersion';

    public const LAST_UPDATED_DATETIME = 'lastUpdatedDatetime';

    protected $_resourceType = ResourceType::DATA_SET_SUBSCRIPTION;

    /**
     * @param Query $query
     * @return DataSetSubscription[] | Collection
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

        $query->setResourceType(ResourceType::DATA_SET_SUBSCRIPTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataSetSubscription
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_SET_SUBSCRIPTION, $id);
    }

    /**
     * @return string
     */
    public function getDataSetName()
    {
        return $this->getProperty('dataSetName');
    }

    /**
     * @param string $dataSetName
     */
    public function setDataSetName(string $dataSetName = null)
    {
        $this->setProperty('dataSetName', $dataSetName);
    }

    /**
     * @return string
     */
    public function getDataSetIdentifier()
    {
        return $this->getProperty('dataSetIdentifier');
    }

    /**
     * @param string $dataSetIdentifier
     */
    public function setDataSetIdentifier(string $dataSetIdentifier = null)
    {
        $this->setProperty('dataSetIdentifier', $dataSetIdentifier);
    }

    /**
     * @return string
     */
    public function getSupplierIdentifier()
    {
        return $this->getProperty('supplierIdentifier');
    }

    /**
     * @param string $supplierIdentifier
     */
    public function setSupplierIdentifier(string $supplierIdentifier = null)
    {
        $this->setProperty('supplierIdentifier', $supplierIdentifier);
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
    public function setEntityType(int $entityType = null)
    {
        $this->setProperty('entityType', $entityType);
    }

    /**
     * @return int
     */
    public function getCurrentDataSetVersion()
    {
        return $this->getProperty('currentDataSetVersion');
    }

    /**
     * @param int $currentDataSetVersion
     */
    public function setCurrentDataSetVersion(int $currentDataSetVersion = null)
    {
        $this->setProperty('currentDataSetVersion', $currentDataSetVersion);
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
}
