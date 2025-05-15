<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UnenrolmentReason extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const UNENROLMENT_REASON = 'unenrolmentReason';

    public const EXPORT_CODE = 'exportCode';

    public const D00206 = 'd00206';

    protected $_resourceType = ResourceType::UNENROLMENT_REASON;

    /**
     * @param Query $query
     * @return UnenrolmentReason[] | Collection
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

        $query->setResourceType(ResourceType::UNENROLMENT_REASON);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UnenrolmentReason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UNENROLMENT_REASON, $id);
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
    public function getUnenrolmentReason()
    {
        return $this->getProperty('unenrolmentReason');
    }

    /**
     * @param string $unenrolmentReason
     */
    public function setUnenrolmentReason(string $unenrolmentReason = null)
    {
        $this->setProperty('unenrolmentReason', $unenrolmentReason);
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
    public function setExportCode(string $exportCode = null)
    {
        $this->setProperty('exportCode', $exportCode);
    }

    /**
     * @return string
     */
    public function getD00206()
    {
        return $this->getProperty('d00206');
    }

    /**
     * @param string $d00206
     */
    public function setD00206(string $d00206 = null)
    {
        $this->setProperty('d00206', $d00206);
    }
}
