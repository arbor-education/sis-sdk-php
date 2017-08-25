<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Bank extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const BANK_NAME = 'bankName';

    const COUNTRY_CODE = 'countryCode';

    protected $_resourceType = ResourceType::BANK;

    /**
     * @param Query $query
     * @return Bank[] | Collection
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

        $query->setResourceType(ResourceType::BANK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Bank
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BANK, $id);
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
    public function getBankName()
    {
        return $this->getProperty('bankName');
    }

    /**
     * @param string $bankName
     */
    public function setBankName($bankName = null)
    {
        $this->setProperty('bankName', $bankName);
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getProperty('countryCode');
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode = null)
    {
        $this->setProperty('countryCode', $countryCode);
    }
}
