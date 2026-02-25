<?php

namespace Arbor\Model;

use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\ResourceType;

class DataRetentionStatus extends ModelBase
{
    public const PERSON = 'person';

    public const DOMAIN_AREA_CODE = 'domainAreaCode';

    public const STATUS = 'status';

    protected $_resourceType = ResourceType::DATA_RETENTION_STATUS;

    /**
     * @param Query $query
     * @return DataRetentionStatus[] | Collection
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

        $query->setResourceType(ResourceType::DATA_RETENTION_STATUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataRetentionStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_RETENTION_STATUS, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(\ModelBase $person = null)
    {
        $this->setProperty('person', $person);
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
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }
}
