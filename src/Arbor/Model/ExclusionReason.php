<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ExclusionReason extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const EXCLUSION_REASON_NAME = 'exclusionReasonName';

    public const EXPORT_CODE = 'exportCode';

    protected $_resourceType = ResourceType::EXCLUSION_REASON;

    /**
     * @param Query $query
     * @return ExclusionReason[] | Collection
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

        $query->setResourceType(ResourceType::EXCLUSION_REASON);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ExclusionReason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EXCLUSION_REASON, $id);
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
    public function getExclusionReasonName()
    {
        return $this->getProperty('exclusionReasonName');
    }

    /**
     * @param string $exclusionReasonName
     */
    public function setExclusionReasonName(string $exclusionReasonName = null)
    {
        $this->setProperty('exclusionReasonName', $exclusionReasonName);
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
}
