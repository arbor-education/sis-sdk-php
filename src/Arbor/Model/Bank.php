<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Bank extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const BANK_NAME = 'bankName';

    public const COUNTRY_CODE = 'countryCode';

    protected $_resourceType = ResourceType::BANK;

    /**
     * @param Query $query
     * @return Bank[] | Collection
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
    public function getBankName()
    {
        return $this->getProperty('bankName');
    }

    /**
     * @param string $bankName
     */
    public function setBankName(string $bankName = null)
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
    public function setCountryCode(string $countryCode = null)
    {
        $this->setProperty('countryCode', $countryCode);
    }
}
