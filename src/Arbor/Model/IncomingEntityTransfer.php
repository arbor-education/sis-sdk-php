<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IncomingEntityTransfer extends ModelBase
{
    public const SOURCE_APPLICATION_ID = 'sourceApplicationId';

    public const SOURCE_ENTITY = 'sourceEntity';

    public const TRANSFER_CLASS_NAME = 'transferClassName';

    public const IMPORTED_ENTITY = 'importedEntity';

    public const SYNC_EFFECTIVE_DATE = 'syncEffectiveDate';

    public const SYNC_END_DATE = 'syncEndDate';

    public const SYNC_DISABLED = 'syncDisabled';

    public const LAST_SYNC_DATETIME = 'lastSyncDatetime';

    protected $_resourceType = ResourceType::INCOMING_ENTITY_TRANSFER;

    /**
     * @param Query $query
     * @return IncomingEntityTransfer[] | Collection
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

        $query->setResourceType(ResourceType::INCOMING_ENTITY_TRANSFER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IncomingEntityTransfer
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INCOMING_ENTITY_TRANSFER, $id);
    }

    /**
     * @return string
     */
    public function getSourceApplicationId()
    {
        return $this->getProperty('sourceApplicationId');
    }

    /**
     * @param string $sourceApplicationId
     */
    public function setSourceApplicationId(string $sourceApplicationId = null)
    {
        $this->setProperty('sourceApplicationId', $sourceApplicationId);
    }

    /**
     * @return string
     */
    public function getSourceEntity()
    {
        return $this->getProperty('sourceEntity');
    }

    /**
     * @param string $sourceEntity
     */
    public function setSourceEntity(string $sourceEntity = null)
    {
        $this->setProperty('sourceEntity', $sourceEntity);
    }

    /**
     * @return string
     */
    public function getTransferClassName()
    {
        return $this->getProperty('transferClassName');
    }

    /**
     * @param string $transferClassName
     */
    public function setTransferClassName(string $transferClassName = null)
    {
        $this->setProperty('transferClassName', $transferClassName);
    }

    /**
     * @return ModelBase
     */
    public function getImportedEntity()
    {
        return $this->getProperty('importedEntity');
    }

    /**
     * @param ModelBase $importedEntity
     */
    public function setImportedEntity(\ModelBase $importedEntity = null)
    {
        $this->setProperty('importedEntity', $importedEntity);
    }

    /**
     * @return \DateTime
     */
    public function getSyncEffectiveDate()
    {
        return $this->getProperty('syncEffectiveDate');
    }

    /**
     * @param \DateTime $syncEffectiveDate
     */
    public function setSyncEffectiveDate(\DateTime $syncEffectiveDate = null)
    {
        $this->setProperty('syncEffectiveDate', $syncEffectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getSyncEndDate()
    {
        return $this->getProperty('syncEndDate');
    }

    /**
     * @param \DateTime $syncEndDate
     */
    public function setSyncEndDate(\DateTime $syncEndDate = null)
    {
        $this->setProperty('syncEndDate', $syncEndDate);
    }

    /**
     * @return bool
     */
    public function getSyncDisabled()
    {
        return $this->getProperty('syncDisabled');
    }

    /**
     * @param bool $syncDisabled
     */
    public function setSyncDisabled(bool $syncDisabled = null)
    {
        $this->setProperty('syncDisabled', $syncDisabled);
    }

    /**
     * @return \DateTime
     */
    public function getLastSyncDatetime()
    {
        return $this->getProperty('lastSyncDatetime');
    }

    /**
     * @param \DateTime $lastSyncDatetime
     */
    public function setLastSyncDatetime(\DateTime $lastSyncDatetime = null)
    {
        $this->setProperty('lastSyncDatetime', $lastSyncDatetime);
    }
}
