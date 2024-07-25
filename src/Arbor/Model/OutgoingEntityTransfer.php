<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OutgoingEntityTransfer extends ModelBase
{
    public const SOURCE_ENTITY = 'sourceEntity';

    public const TRANSFER_CLASS_NAME = 'transferClassName';

    public const DESTINATION_APPLICATION_ID = 'destinationApplicationId';

    public const SYNC_EFFECTIVE_DATE = 'syncEffectiveDate';

    public const SYNC_END_DATE = 'syncEndDate';

    public const SYNC_DISABLED = 'syncDisabled';

    public const LAST_SYNC_DATETIME = 'lastSyncDatetime';

    protected $_resourceType = ResourceType::OUTGOING_ENTITY_TRANSFER;

    /**
     * @param Query $query
     * @return OutgoingEntityTransfer[] | Collection
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

        $query->setResourceType(ResourceType::OUTGOING_ENTITY_TRANSFER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OutgoingEntityTransfer
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OUTGOING_ENTITY_TRANSFER, $id);
    }

    /**
     * @return ModelBase
     */
    public function getSourceEntity()
    {
        return $this->getProperty('sourceEntity');
    }

    /**
     * @param ModelBase $sourceEntity
     */
    public function setSourceEntity(\ModelBase $sourceEntity = null)
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
     * @return string
     */
    public function getDestinationApplicationId()
    {
        return $this->getProperty('destinationApplicationId');
    }

    /**
     * @param string $destinationApplicationId
     */
    public function setDestinationApplicationId(string $destinationApplicationId = null)
    {
        $this->setProperty('destinationApplicationId', $destinationApplicationId);
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
