<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SenNeedType extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const LABEL = 'label';

    public const MAIN_EXPORT_CODE = 'mainExportCode';

    public const D00237 = 'd00237';

    public const EXPORT_CODE = 'exportCode';

    protected $_resourceType = ResourceType::SEN_NEED_TYPE;

    /**
     * @param Query $query
     * @return SenNeedType[] | Collection
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

        $query->setResourceType(ResourceType::SEN_NEED_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenNeedType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SEN_NEED_TYPE, $id);
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
    public function getLabel()
    {
        return $this->getProperty('label');
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label = null)
    {
        $this->setProperty('label', $label);
    }

    /**
     * @return string
     */
    public function getMainExportCode()
    {
        return $this->getProperty('mainExportCode');
    }

    /**
     * @param string $mainExportCode
     */
    public function setMainExportCode(string $mainExportCode = null)
    {
        $this->setProperty('mainExportCode', $mainExportCode);
    }

    /**
     * @return string
     */
    public function getD00237()
    {
        return $this->getProperty('d00237');
    }

    /**
     * @param string $d00237
     */
    public function setD00237(string $d00237 = null)
    {
        $this->setProperty('d00237', $d00237);
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
