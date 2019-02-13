<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StripePayoutDestination extends ModelBase
{

    const ACCOUNT_HOLDER_NAME = 'accountHolderName';

    const ACCOUNT_NUMBER = 'accountNumber';

    const SORT_CODE = 'sortCode';

    const ACCOUNT_COUNTRY = 'accountCountry';

    const ACCOUNT_CURRENCY = 'accountCurrency';

    const STRIPE_BANK_ACCOUNT_IDENTIFIER = 'stripeBankAccountIdentifier';

    const STRIPE_STATUS = 'stripeStatus';

    const ACCOUNT_DETAILS_VERIFIED = 'accountDetailsVerified';

    protected $_resourceType = ResourceType::STRIPE_PAYOUT_DESTINATION;

    /**
     * @param Query $query
     * @return StripePayoutDestination[] | Collection
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

        $query->setResourceType(ResourceType::STRIPE_PAYOUT_DESTINATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StripePayoutDestination
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STRIPE_PAYOUT_DESTINATION, $id);
    }

    /**
     * @return string
     */
    public function getAccountHolderName()
    {
        return $this->getProperty('accountHolderName');
    }

    /**
     * @param string $accountHolderName
     */
    public function setAccountHolderName($accountHolderName = null)
    {
        $this->setProperty('accountHolderName', $accountHolderName);
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->getProperty('accountNumber');
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber($accountNumber = null)
    {
        $this->setProperty('accountNumber', $accountNumber);
    }

    /**
     * @return string
     */
    public function getSortCode()
    {
        return $this->getProperty('sortCode');
    }

    /**
     * @param string $sortCode
     */
    public function setSortCode($sortCode = null)
    {
        $this->setProperty('sortCode', $sortCode);
    }

    /**
     * @return Country
     */
    public function getAccountCountry()
    {
        return $this->getProperty('accountCountry');
    }

    /**
     * @param Country $accountCountry
     */
    public function setAccountCountry(Country $accountCountry = null)
    {
        $this->setProperty('accountCountry', $accountCountry);
    }

    /**
     * @return string
     */
    public function getAccountCurrency()
    {
        return $this->getProperty('accountCurrency');
    }

    /**
     * @param string $accountCurrency
     */
    public function setAccountCurrency($accountCurrency = null)
    {
        $this->setProperty('accountCurrency', $accountCurrency);
    }

    /**
     * @return string
     */
    public function getStripeBankAccountIdentifier()
    {
        return $this->getProperty('stripeBankAccountIdentifier');
    }

    /**
     * @param string $stripeBankAccountIdentifier
     */
    public function setStripeBankAccountIdentifier($stripeBankAccountIdentifier = null)
    {
        $this->setProperty('stripeBankAccountIdentifier', $stripeBankAccountIdentifier);
    }

    /**
     * @return string
     */
    public function getStripeStatus()
    {
        return $this->getProperty('stripeStatus');
    }

    /**
     * @param string $stripeStatus
     */
    public function setStripeStatus($stripeStatus = null)
    {
        $this->setProperty('stripeStatus', $stripeStatus);
    }

    /**
     * @return bool
     */
    public function getAccountDetailsVerified()
    {
        return $this->getProperty('accountDetailsVerified');
    }

    /**
     * @param bool $accountDetailsVerified
     */
    public function setAccountDetailsVerified($accountDetailsVerified = null)
    {
        $this->setProperty('accountDetailsVerified', $accountDetailsVerified);
    }


}
