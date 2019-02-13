<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SenNeedType extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const LABEL = 'label';

    const D00237 = 'd00237';

    const EXPORT_CODE = 'exportCode';

    protected $_resourceType = ResourceType::SEN_NEED_TYPE;

    /**
     * @param Query $query
     * @return SenNeedType[] | Collection
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
    public function getLabel()
    {
        return $this->getProperty('label');
    }

    /**
     * @param string $label
     */
    public function setLabel($label = null)
    {
        $this->setProperty('label', $label);
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
    public function setD00237($d00237 = null)
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
    public function setExportCode($exportCode = null)
    {
        $this->setProperty('exportCode', $exportCode);
    }


}
