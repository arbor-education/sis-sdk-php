<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Religion extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const LABEL = 'label';

    const D00009 = 'd00009';

    const D00195 = 'd00195';

    protected $_resourceType = ResourceType::RELIGION;

    /**
     * @param Query $query
     * @return Religion[] | Collection
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

        $query->setResourceType(ResourceType::RELIGION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Religion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::RELIGION, $id);
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
    public function getD00009()
    {
        return $this->getProperty('d00009');
    }

    /**
     * @param string $d00009
     */
    public function setD00009($d00009 = null)
    {
        $this->setProperty('d00009', $d00009);
    }

    /**
     * @return string
     */
    public function getD00195()
    {
        return $this->getProperty('d00195');
    }

    /**
     * @param string $d00195
     */
    public function setD00195($d00195 = null)
    {
        $this->setProperty('d00195', $d00195);
    }


}
