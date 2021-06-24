<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SenStatus extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const SEN_STATUS_NAME = 'senStatusName';

    const DESCRIPTION = 'description';

    const COUNTS_AS_SEN_STATUS = 'countsAsSenStatus';

    const EXPORT_CODE = 'exportCode';

    const D00229 = 'd00229';

    protected $_resourceType = ResourceType::SEN_STATUS;

    /**
     * @param Query $query
     * @return SenStatus[] | Collection
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

        $query->setResourceType(ResourceType::SEN_STATUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SEN_STATUS, $id);
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
    public function getSenStatusName()
    {
        return $this->getProperty('senStatusName');
    }

    /**
     * @param string $senStatusName
     */
    public function setSenStatusName($senStatusName = null)
    {
        $this->setProperty('senStatusName', $senStatusName);
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
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return bool
     */
    public function getCountsAsSenStatus()
    {
        return $this->getProperty('countsAsSenStatus');
    }

    /**
     * @param bool $countsAsSenStatus
     */
    public function setCountsAsSenStatus($countsAsSenStatus = null)
    {
        $this->setProperty('countsAsSenStatus', $countsAsSenStatus);
    }

    /**
     * @return string
     */
    public function getExportCode()
    {
        return $this->getProperty('exportCode');
    }

    /**
     * @param string $exportCode
     */
    public function setExportCode($exportCode = null)
    {
        $this->setProperty('exportCode', $exportCode);
    }

    /**
     * @return string
     */
    public function getD00229()
    {
        return $this->getProperty('d00229');
    }

    /**
     * @param string $d00229
     */
    public function setD00229($d00229 = null)
    {
        $this->setProperty('d00229', $d00229);
    }
}
