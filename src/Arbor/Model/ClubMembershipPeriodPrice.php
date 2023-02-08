<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClubMembershipPeriodPrice extends ModelBase
{

    const CLUB_MEMBERSHIP_PERIOD = 'clubMembershipPeriod';

    const PRICING_BASIS = 'pricingBasis';

    const PRICE_EX_VAT = 'priceExVat';

    const VAT_RATE = 'vatRate';

    const APPLICABLE = 'applicable';

    const VARIABLE_CONTRIBUTION = 'variableContribution';

    protected $_resourceType = ResourceType::CLUB_MEMBERSHIP_PERIOD_PRICE;

    /**
     * @param Query $query
     * @return ClubMembershipPeriodPrice[] | Collection
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

        $query->setResourceType(ResourceType::CLUB_MEMBERSHIP_PERIOD_PRICE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClubMembershipPeriodPrice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLUB_MEMBERSHIP_PERIOD_PRICE, $id);
    }

    /**
     * @return ClubMembershipPeriod
     */
    public function getClubMembershipPeriod()
    {
        return $this->getProperty('clubMembershipPeriod');
    }

    /**
     * @param ClubMembershipPeriod $clubMembershipPeriod
     */
    public function setClubMembershipPeriod(ClubMembershipPeriod $clubMembershipPeriod = null)
    {
        $this->setProperty('clubMembershipPeriod', $clubMembershipPeriod);
    }

    /**
     * @return string
     */
    public function getPricingBasis()
    {
        return $this->getProperty('pricingBasis');
    }

    /**
     * @param string $pricingBasis
     */
    public function setPricingBasis($pricingBasis = null)
    {
        $this->setProperty('pricingBasis', $pricingBasis);
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
     * @return bool
     */
    public function getVariableContribution()
    {
        return $this->getProperty('variableContribution');
    }

    /**
     * @param bool $variableContribution
     */
    public function setVariableContribution($variableContribution = null)
    {
        $this->setProperty('variableContribution', $variableContribution);
    }


}
