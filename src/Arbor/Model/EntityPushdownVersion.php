<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EntityPushdownVersion extends \ModelBase
{
    public const ENTITY_PUSHDOWN = 'entityPushdown';

    public const VERSION_DATA = 'versionData';

    public const VERSION_NUMBER = 'versionNumber';

    protected $_resourceType = ResourceType::ENTITY_PUSHDOWN_VERSION;

    /**
     * @param Query $query
     * @return EntityPushdownVersion[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::ENTITY_PUSHDOWN_VERSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EntityPushdownVersion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ENTITY_PUSHDOWN_VERSION, $id);
    }

    /**
     * @return EntityPushdown
     */
    public function getEntityPushdown()
    {
        return $this->getProperty('entityPushdown');
    }

    /**
     * @param EntityPushdown $entityPushdown
     */
    public function setEntityPushdown(\EntityPushdown $entityPushdown = null)
    {
        $this->setProperty('entityPushdown', $entityPushdown);
    }

    /**
     * @return string
     */
    public function getVersionData()
    {
        return $this->getProperty('versionData');
    }

    /**
     * @param string $versionData
     */
    public function setVersionData(string $versionData = null)
    {
        $this->setProperty('versionData', $versionData);
    }

    /**
     * @return int
     */
    public function getVersionNumber()
    {
        return $this->getProperty('versionNumber');
    }

    /**
     * @param int $versionNumber
     */
    public function setVersionNumber(int $versionNumber = null)
    {
        $this->setProperty('versionNumber', $versionNumber);
    }
}
