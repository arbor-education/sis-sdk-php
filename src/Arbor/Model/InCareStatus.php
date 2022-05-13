<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InCareStatus extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const IN_CARE_STATUS_NAME = 'inCareStatusName';

    const COUNTS_AS_IN_CARE_STATUS = 'countsAsInCareStatus';

    protected $_resourceType = ResourceType::IN_CARE_STATUS;

    /**
     * @param Query $query
     * @return InCareStatus[] | Collection
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
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
    public function setInCareStatusName($inCareStatusName = null)
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
    public function setCountsAsInCareStatus($countsAsInCareStatus = null)
    {
        $this->setProperty('countsAsInCareStatus', $countsAsInCareStatus);
    }

}
