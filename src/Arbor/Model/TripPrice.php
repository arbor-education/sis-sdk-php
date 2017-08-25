<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TripPrice extends ModelBase
{
    const TRIP = 'trip';

    const APPLICABLE = 'applicable';

    const PRICE_EX_VAT = 'priceExVat';

    const VAT_RATE = 'vatRate';

    const VOLUNTARY_CONTRIBUTION = 'voluntaryContribution';

    protected $_resourceType = ResourceType::TRIP_PRICE;

    /**
     * @param Query $query
     * @return TripPrice[] | Collection
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

        $query->setResourceType(ResourceType::TRIP_PRICE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TripPrice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TRIP_PRICE, $id);
    }

    /**
     * @return Trip
     */
    public function getTrip()
    {
        return $this->getProperty('trip');
    }

    /**
     * @param Trip $trip
     */
    public function setTrip(Trip $trip = null)
    {
        $this->setProperty('trip', $trip);
    }

    /**
     * @return ModelBase
     */
    public function getApplicable()
    {
        return $this->getProperty('applicable');
    }

    /**
     * @param ModelBase $applicable
     */
    public function setApplicable(ModelBase $applicable = null)
    {
        $this->setProperty('applicable', $applicable);
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
    public function setPriceExVat($priceExVat = null)
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
    public function setVatRate(VatRate $vatRate = null)
    {
        $this->setProperty('vatRate', $vatRate);
    }

    /**
     * @return bool
     */
    public function getVoluntaryContribution()
    {
        return $this->getProperty('voluntaryContribution');
    }

    /**
     * @param bool $voluntaryContribution
     */
    public function setVoluntaryContribution($voluntaryContribution = null)
    {
        $this->setProperty('voluntaryContribution', $voluntaryContribution);
    }
}
