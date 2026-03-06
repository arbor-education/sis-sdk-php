<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InCareStatus extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const IN_CARE_STATUS_NAME = 'inCareStatusName';

    public const COUNTS_AS_IN_CARE_STATUS = 'countsAsInCareStatus';

    protected $_resourceType = ResourceType::IN_CARE_STATUS;

    /**
     * @param Query $query
     * @return InCareStatus[] | Collection
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

        $query->setResourceType(ResourceType::IN_CARE_STATUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InCareStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_CARE_STATUS, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getInCareStatusName()
    {
        return $this->getProperty('inCareStatusName');
    }

    /**
     * @param string $inCareStatusName
     */
    public function setInCareStatusName(string $inCareStatusName = null)
    {
        $this->setProperty('inCareStatusName', $inCareStatusName);
    }

    /**
     * @return bool
     */
    public function getCountsAsInCareStatus()
    {
        return $this->getProperty('countsAsInCareStatus');
    }

    /**
     * @param bool $countsAsInCareStatus
     */
    public function setCountsAsInCareStatus(bool $countsAsInCareStatus = null)
    {
        $this->setProperty('countsAsInCareStatus', $countsAsInCareStatus);
    }
}
