<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TripPrice extends \ModelBase
{
    public const TRIP = 'trip';

    public const APPLICABLE = 'applicable';

    public const PRICE_EX_VAT = 'priceExVat';

    public const VAT_RATE = 'vatRate';

    public const VOLUNTARY_CONTRIBUTION = 'voluntaryContribution';

    public const INSTALMENTS_PERMITTED = 'instalmentsPermitted';

    public const MINIMUM_INSTALMENT_AMOUNT = 'minimumInstalmentAmount';

    public const AUTO_CONFIRM_INSTALMENT_THRESHOLD = 'autoConfirmInstalmentThreshold';

    protected $_resourceType = ResourceType::TRIP_PRICE;

    /**
     * @param Query $query
     * @return TripPrice[] | Collection
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
    public function setTrip(\Trip $trip = null)
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
    public function setApplicable(\ModelBase $applicable = null)
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
    public function setVoluntaryContribution(bool $voluntaryContribution = null)
    {
        $this->setProperty('voluntaryContribution', $voluntaryContribution);
    }

    /**
     * @return bool
     */
    public function getInstalmentsPermitted()
    {
        return $this->getProperty('instalmentsPermitted');
    }

    /**
     * @param bool $instalmentsPermitted
     */
    public function setInstalmentsPermitted(bool $instalmentsPermitted = null)
    {
        $this->setProperty('instalmentsPermitted', $instalmentsPermitted);
    }

    /**
     * @return string
     */
    public function getMinimumInstalmentAmount()
    {
        return $this->getProperty('minimumInstalmentAmount');
    }

    /**
     * @param string $minimumInstalmentAmount
     */
    public function setMinimumInstalmentAmount(string $minimumInstalmentAmount = null)
    {
        $this->setProperty('minimumInstalmentAmount', $minimumInstalmentAmount);
    }

    /**
     * @return string
     */
    public function getAutoConfirmInstalmentThreshold()
    {
        return $this->getProperty('autoConfirmInstalmentThreshold');
    }

    /**
     * @param string $autoConfirmInstalmentThreshold
     */
    public function setAutoConfirmInstalmentThreshold(string $autoConfirmInstalmentThreshold = null)
    {
        $this->setProperty('autoConfirmInstalmentThreshold', $autoConfirmInstalmentThreshold);
    }
}
