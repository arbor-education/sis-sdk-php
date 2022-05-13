<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AccessArrangement extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const NAME = 'name';

    const DEFAULT_EXTRA_TIME_PERCENTAGE = 'defaultExtraTimePercentage';

    protected $_resourceType = ResourceType::ACCESS_ARRANGEMENT;

    /**
     * @param Query $query
     * @return AccessArrangement[] | Collection
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

        $query->setResourceType(ResourceType::ACCESS_ARRANGEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AccessArrangement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACCESS_ARRANGEMENT, $id);
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
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return float
     */
    public function getDefaultExtraTimePercentage()
    {
        return $this->getProperty('defaultExtraTimePercentage');
    }

    /**
     * @param float $defaultExtraTimePercentage
     */
    public function setDefaultExtraTimePercentage($defaultExtraTimePercentage = null)
    {
        $this->setProperty('defaultExtraTimePercentage', $defaultExtraTimePercentage);
    }

}
