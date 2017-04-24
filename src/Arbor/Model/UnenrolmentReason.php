<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class UnenrolmentReason extends ModelBase
{
    const D00206 = 'd00206';

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const UNENROLMENT_REASON = 'unenrolmentReason';

    protected $_resourceType = ResourceType::UNENROLMENT_REASON;

    /**
     * @param \Arbor\Query\Query $query
     * @return UnenrolmentReason[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UnenrolmentReason");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return UnenrolmentReason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UNENROLMENT_REASON, $id);
    }

    /**
     * @return string
     */
    public function getD00206()
    {
        return $this->getProperty("d00206");
    }

    /**
     * @param string $d00206
     */
    public function setD00206($d00206 = null)
    {
        $this->setProperty("d00206", $d00206);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getUnenrolmentReason()
    {
        return $this->getProperty("unenrolmentReason");
    }

    /**
     * @param string $unenrolmentReason
     */
    public function setUnenrolmentReason($unenrolmentReason = null)
    {
        $this->setProperty("unenrolmentReason", $unenrolmentReason);
    }
}
