<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class VatRate extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const IS_DEFAULT_VAT_RATE = 'isDefaultVatRate';

    const VAT_RATE_NAME = 'vatRateName';

    const VAT_RATE_SHORT_NAME = 'vatRateShortName';

    const RATE = 'rate';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::VAT_RATE;

    /**
     * @param Query $query
     * @return VatRate[] | Collection
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

        $query->setResourceType(ResourceType::VAT_RATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return VatRate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::VAT_RATE, $id);
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
     * @return bool
     */
    public function getIsDefaultVatRate()
    {
        return $this->getProperty('isDefaultVatRate');
    }

    /**
     * @param bool $isDefaultVatRate
     */
    public function setIsDefaultVatRate($isDefaultVatRate = null)
    {
        $this->setProperty('isDefaultVatRate', $isDefaultVatRate);
    }

    /**
     * @return string
     */
    public function getVatRateName()
    {
        return $this->getProperty('vatRateName');
    }

    /**
     * @param string $vatRateName
     */
    public function setVatRateName($vatRateName = null)
    {
        $this->setProperty('vatRateName', $vatRateName);
    }

    /**
     * @return string
     */
    public function getVatRateShortName()
    {
        return $this->getProperty('vatRateShortName');
    }

    /**
     * @param string $vatRateShortName
     */
    public function setVatRateShortName($vatRateShortName = null)
    {
        $this->setProperty('vatRateShortName', $vatRateShortName);
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->getProperty('rate');
    }

    /**
     * @param float $rate
     */
    public function setRate($rate = null)
    {
        $this->setProperty('rate', $rate);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }
}
