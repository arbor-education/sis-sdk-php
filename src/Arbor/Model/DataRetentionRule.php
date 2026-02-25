<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DataRetentionRule extends ModelBase
{
    public const ENTITY_TYPE = 'entityType';

    public const DOMAIN_AREA_CODE = 'domainAreaCode';

    public const TARGET_GROUP_CODE = 'targetGroupCode';

    public const RETAIN_MONTHS = 'retainMonths';

    public const RETAIN_UNTIL_AGE_MONTHS = 'retainUntilAgeMonths';

    public const DESCRIPTION = 'description';

    public const IS_ACTIVE = 'isActive';

    protected $_resourceType = ResourceType::DATA_RETENTION_RULE;

    /**
     * @param Query $query
     * @return DataRetentionRule[] | Collection
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

        $query->setResourceType(ResourceType::DATA_RETENTION_RULE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataRetentionRule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_RETENTION_RULE, $id);
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
     * @return string
     */
    public function getDomainAreaCode()
    {
        return $this->getProperty('domainAreaCode');
    }

    /**
     * @param string $domainAreaCode
     */
    public function setDomainAreaCode(string $domainAreaCode = null)
    {
        $this->setProperty('domainAreaCode', $domainAreaCode);
    }

    /**
     * @return string
     */
    public function getTargetGroupCode()
    {
        return $this->getProperty('targetGroupCode');
    }

    /**
     * @param string $targetGroupCode
     */
    public function setTargetGroupCode(string $targetGroupCode = null)
    {
        $this->setProperty('targetGroupCode', $targetGroupCode);
    }

    /**
     * @return int
     */
    public function getRetainMonths()
    {
        return $this->getProperty('retainMonths');
    }

    /**
     * @param int $retainMonths
     */
    public function setRetainMonths(int $retainMonths = null)
    {
        $this->setProperty('retainMonths', $retainMonths);
    }

    /**
     * @return int
     */
    public function getRetainUntilAgeMonths()
    {
        return $this->getProperty('retainUntilAgeMonths');
    }

    /**
     * @param int $retainUntilAgeMonths
     */
    public function setRetainUntilAgeMonths(int $retainUntilAgeMonths = null)
    {
        $this->setProperty('retainUntilAgeMonths', $retainUntilAgeMonths);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->getProperty('isActive');
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive = null)
    {
        $this->setProperty('isActive', $isActive);
    }
}
