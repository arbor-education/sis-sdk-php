<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClubSessionIntervalPrice extends \ModelBase
{
    public const CLUB_SESSION_INTERVAL = 'clubSessionInterval';

    public const GROUP = 'group';

    public const PRICE_EX_VAT = 'priceExVat';

    public const VAT_RATE = 'vatRate';

    protected $_resourceType = ResourceType::CLUB_SESSION_INTERVAL_PRICE;

    /**
     * @param Query $query
     * @return ClubSessionIntervalPrice[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::CLUB_SESSION_INTERVAL_PRICE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClubSessionIntervalPrice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLUB_SESSION_INTERVAL_PRICE, $id);
    }

    /**
     * @return ClubSessionInterval
     */
    public function getClubSessionInterval()
    {
        return $this->getProperty('clubSessionInterval');
    }

    /**
     * @param ClubSessionInterval $clubSessionInterval
     */
    public function setClubSessionInterval(\ClubSessionInterval $clubSessionInterval = null)
    {
        $this->setProperty('clubSessionInterval', $clubSessionInterval);
    }

    /**
     * @return ModelBase
     */
    public function getGroup()
    {
        return $this->getProperty('group');
    }

    /**
     * @param ModelBase $group
     */
    public function setGroup(\ModelBase $group = null)
    {
        $this->setProperty('group', $group);
    }

    /**
     * @return string
     */
    public function getPriceExVat()
    {
        return $this->getProperty('priceExVat');
    }

    /**
     * @param string $priceExVat
     */
    public function setPriceExVat(string $priceExVat = null)
    {
        $this->setProperty('priceExVat', $priceExVat);
    }

    /**
     * @return VatRate
     */
    public function getVatRate()
    {
        return $this->getProperty('vatRate');
    }

    /**
     * @param VatRate $vatRate
     */
    public function setVatRate(\VatRate $vatRate = null)
    {
        $this->setProperty('vatRate', $vatRate);
    }
}
