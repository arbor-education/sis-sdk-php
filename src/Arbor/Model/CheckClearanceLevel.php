<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CheckClearanceLevel extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const LABEL = 'label';

    const CHECK_TYPE = 'checkType';

    protected $_resourceType = ResourceType::CHECK_CLEARANCE_LEVEL;

    /**
     * @param Query $query
     * @return CheckClearanceLevel[] | Collection
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

        $query->setResourceType(ResourceType::CHECK_CLEARANCE_LEVEL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CheckClearanceLevel
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CHECK_CLEARANCE_LEVEL, $id);
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
     * @return CheckType
     */
    public function getCheckType()
    {
        return $this->getProperty('checkType');
    }

    /**
     * @param CheckType $checkType
     */
    public function setCheckType(CheckType $checkType = null)
    {
        $this->setProperty('checkType', $checkType);
    }


}
