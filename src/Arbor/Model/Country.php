<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Country extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const SHORT_NAME = 'shortName';

    const LONG_NAME = 'longName';

    const ISO31661_ALPHA2 = 'iso31661Alpha2';

    const ISO31661_ALPHA3 = 'iso31661Alpha3';

    const ISO31661_NUMERIC = 'iso31661Numeric';

    const NOTE = 'note';

    const APPLIES_TO_POSTAL_ADDRESS = 'appliesToPostalAddress';

    protected $_resourceType = ResourceType::COUNTRY;

    /**
     * @param \Arbor\Query\Query $query
     * @return Country[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Country");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Country
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::COUNTRY, $id);
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
    public function getShortName()
    {
        return $this->getProperty("shortName");
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty("shortName", $shortName);
    }

    /**
     * @return string
     */
    public function getLongName()
    {
        return $this->getProperty("longName");
    }

    /**
     * @param string $longName
     */
    public function setLongName($longName = null)
    {
        $this->setProperty("longName", $longName);
    }

    /**
     * @return string
     */
    public function getIso31661Alpha2()
    {
        return $this->getProperty("iso31661Alpha2");
    }

    /**
     * @param string $iso31661Alpha2
     */
    public function setIso31661Alpha2($iso31661Alpha2 = null)
    {
        $this->setProperty("iso31661Alpha2", $iso31661Alpha2);
    }

    /**
     * @return string
     */
    public function getIso31661Alpha3()
    {
        return $this->getProperty("iso31661Alpha3");
    }

    /**
     * @param string $iso31661Alpha3
     */
    public function setIso31661Alpha3($iso31661Alpha3 = null)
    {
        $this->setProperty("iso31661Alpha3", $iso31661Alpha3);
    }

    /**
     * @return string
     */
    public function getIso31661Numeric()
    {
        return $this->getProperty("iso31661Numeric");
    }

    /**
     * @param string $iso31661Numeric
     */
    public function setIso31661Numeric($iso31661Numeric = null)
    {
        $this->setProperty("iso31661Numeric", $iso31661Numeric);
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->getProperty("note");
    }

    /**
     * @param string $note
     */
    public function setNote($note = null)
    {
        $this->setProperty("note", $note);
    }

    /**
     * @return bool
     */
    public function getAppliesToPostalAddress()
    {
        return $this->getProperty("appliesToPostalAddress");
    }

    /**
     * @param bool $appliesToPostalAddress
     */
    public function setAppliesToPostalAddress($appliesToPostalAddress = null)
    {
        $this->setProperty("appliesToPostalAddress", $appliesToPostalAddress);
    }


}
