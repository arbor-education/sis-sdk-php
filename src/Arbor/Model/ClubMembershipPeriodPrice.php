<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ClubMembershipPeriodPrice extends ModelBase
{
    public const CLUB_MEMBERSHIP_PERIOD = 'clubMembershipPeriod';

    public const PRICING_BASIS = 'pricingBasis';

    public const PRICE_EX_VAT = 'priceExVat';

    public const VAT_RATE = 'vatRate';

    public const APPLICABLE = 'applicable';

    public const VARIABLE_CONTRIBUTION = 'variableContribution';

    protected $_resourceType = ResourceType::CLUB_MEMBERSHIP_PERIOD_PRICE;

    /**
     * @param Query $query
     * @return ClubMembershipPeriodPrice[] | Collection
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
     * @return \Arbor\Model\ClubMembershipPeriod
     */
    public function getClubMembershipPeriod()
    {
        return $this->getProperty('clubMembershipPeriod');
    }

    /**
     * @param \Arbor\Model\ClubMembershipPeriod $clubMembershipPeriod
     */
    public function setClubMembershipPeriod(\Arbor\Model\ClubMembershipPeriod $clubMembershipPeriod = null)
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
    public function setPricingBasis(string $pricingBasis = null)
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
    public function setPriceExVat(string $priceExVat = null)
    {
        $this->setProperty('priceExVat', $priceExVat);
    }

    /**
     * @return \Arbor\Model\VatRate
     */
    public function getVatRate()
    {
        return $this->getProperty('vatRate');
    }

    /**
     * @param \Arbor\Model\VatRate $vatRate
     */
    public function setVatRate(\Arbor\Model\VatRate $vatRate = null)
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
    public function setApplicable(\ModelBase $applicable = null)
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
    public function setVariableContribution(bool $variableContribution = null)
    {
        $this->setProperty('variableContribution', $variableContribution);
    }
}
