<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StripeAccount extends ModelBase
{

    const STRIPE_ACCOUNT_IDENTIFIER = 'stripeAccountIdentifier';

    const SECRET_KEY = 'secretKey';

    const PUBLISHABLE_KEY = 'publishableKey';

    const ADDRESS_LINE1 = 'addressLine1';

    const ADDRESS_LINE2 = 'addressLine2';

    const CITY = 'city';

    const STATE = 'state';

    const POSTAL_CODE = 'postalCode';

    const COUNTRY = 'country';

    const BUSINESS_NAME = 'businessName';

    const BUSINESS_TAX_ID = 'businessTaxId';

    const REPRESENTATIVE_DATE_OF_BIRTH = 'representativeDateOfBirth';

    const REPRESENTATIVE_FIRST_NAME = 'representativeFirstName';

    const REPRESENTATIVE_LAST_NAME = 'representativeLastName';

    const REPRESENTATIVE_ADDRESS_LINE1 = 'representativeAddressLine1';

    const REPRESENTATIVE_ADDRESS_LINE2 = 'representativeAddressLine2';

    const REPRESENTATIVE_CITY = 'representativeCity';

    const REPRESENTATIVE_STATE = 'representativeState';

    const REPRESENTATIVE_POSTAL_CODE = 'representativePostalCode';

    const REPRESENTATIVE_COUNTRY = 'representativeCountry';

    const TOS_ACCEPTANCE_DATETIME = 'tosAcceptanceDatetime';

    const TOS_ACCEPTANCE_IP_ADDRESS = 'tosAcceptanceIpAddress';

    const ADDITIONAL_DOCUMENT_NEEDED = 'additionalDocumentNeeded';

    const VERIFICATION_STATUS = 'verificationStatus';

    protected $_resourceType = ResourceType::STRIPE_ACCOUNT;

    /**
     * @param Query $query
     * @return StripeAccount[] | Collection
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

        $query->setResourceType(ResourceType::STRIPE_ACCOUNT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StripeAccount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STRIPE_ACCOUNT, $id);
    }

    /**
     * @return string
     */
    public function getStripeAccountIdentifier()
    {
        return $this->getProperty('stripeAccountIdentifier');
    }

    /**
     * @param string $stripeAccountIdentifier
     */
    public function setStripeAccountIdentifier($stripeAccountIdentifier = null)
    {
        $this->setProperty('stripeAccountIdentifier', $stripeAccountIdentifier);
    }

    /**
     * @return string
     */
    public function getSecretKey()
    {
        return $this->getProperty('secretKey');
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey($secretKey = null)
    {
        $this->setProperty('secretKey', $secretKey);
    }

    /**
     * @return string
     */
    public function getPublishableKey()
    {
        return $this->getProperty('publishableKey');
    }

    /**
     * @param string $publishableKey
     */
    public function setPublishableKey($publishableKey = null)
    {
        $this->setProperty('publishableKey', $publishableKey);
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->getProperty('addressLine1');
    }

    /**
     * @param string $addressLine1
     */
    public function setAddressLine1($addressLine1 = null)
    {
        $this->setProperty('addressLine1', $addressLine1);
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->getProperty('addressLine2');
    }

    /**
     * @param string $addressLine2
     */
    public function setAddressLine2($addressLine2 = null)
    {
        $this->setProperty('addressLine2', $addressLine2);
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->getProperty('city');
    }

    /**
     * @param string $city
     */
    public function setCity($city = null)
    {
        $this->setProperty('city', $city);
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->getProperty('state');
    }

    /**
     * @param string $state
     */
    public function setState($state = null)
    {
        $this->setProperty('state', $state);
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->getProperty('postalCode');
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode = null)
    {
        $this->setProperty('postalCode', $postalCode);
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->getProperty('country');
    }

    /**
     * @param Country $country
     */
    public function setCountry(Country $country = null)
    {
        $this->setProperty('country', $country);
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
        return $this->getProperty('businessName');
    }

    /**
     * @param string $businessName
     */
    public function setBusinessName($businessName = null)
    {
        $this->setProperty('businessName', $businessName);
    }

    /**
     * @return string
     */
    public function getBusinessTaxId()
    {
        return $this->getProperty('businessTaxId');
    }

    /**
     * @param string $businessTaxId
     */
    public function setBusinessTaxId($businessTaxId = null)
    {
        $this->setProperty('businessTaxId', $businessTaxId);
    }

    /**
     * @return \DateTime
     */
    public function getRepresentativeDateOfBirth()
    {
        return $this->getProperty('representativeDateOfBirth');
    }

    /**
     * @param \DateTime $representativeDateOfBirth
     */
    public function setRepresentativeDateOfBirth(\DateTime $representativeDateOfBirth = null)
    {
        $this->setProperty('representativeDateOfBirth', $representativeDateOfBirth);
    }

    /**
     * @return string
     */
    public function getRepresentativeFirstName()
    {
        return $this->getProperty('representativeFirstName');
    }

    /**
     * @param string $representativeFirstName
     */
    public function setRepresentativeFirstName($representativeFirstName = null)
    {
        $this->setProperty('representativeFirstName', $representativeFirstName);
    }

    /**
     * @return string
     */
    public function getRepresentativeLastName()
    {
        return $this->getProperty('representativeLastName');
    }

    /**
     * @param string $representativeLastName
     */
    public function setRepresentativeLastName($representativeLastName = null)
    {
        $this->setProperty('representativeLastName', $representativeLastName);
    }

    /**
     * @return string
     */
    public function getRepresentativeAddressLine1()
    {
        return $this->getProperty('representativeAddressLine1');
    }

    /**
     * @param string $representativeAddressLine1
     */
    public function setRepresentativeAddressLine1($representativeAddressLine1 = null)
    {
        $this->setProperty('representativeAddressLine1', $representativeAddressLine1);
    }

    /**
     * @return string
     */
    public function getRepresentativeAddressLine2()
    {
        return $this->getProperty('representativeAddressLine2');
    }

    /**
     * @param string $representativeAddressLine2
     */
    public function setRepresentativeAddressLine2($representativeAddressLine2 = null)
    {
        $this->setProperty('representativeAddressLine2', $representativeAddressLine2);
    }

    /**
     * @return string
     */
    public function getRepresentativeCity()
    {
        return $this->getProperty('representativeCity');
    }

    /**
     * @param string $representativeCity
     */
    public function setRepresentativeCity($representativeCity = null)
    {
        $this->setProperty('representativeCity', $representativeCity);
    }

    /**
     * @return string
     */
    public function getRepresentativeState()
    {
        return $this->getProperty('representativeState');
    }

    /**
     * @param string $representativeState
     */
    public function setRepresentativeState($representativeState = null)
    {
        $this->setProperty('representativeState', $representativeState);
    }

    /**
     * @return string
     */
    public function getRepresentativePostalCode()
    {
        return $this->getProperty('representativePostalCode');
    }

    /**
     * @param string $representativePostalCode
     */
    public function setRepresentativePostalCode($representativePostalCode = null)
    {
        $this->setProperty('representativePostalCode', $representativePostalCode);
    }

    /**
     * @return Country
     */
    public function getRepresentativeCountry()
    {
        return $this->getProperty('representativeCountry');
    }

    /**
     * @param Country $representativeCountry
     */
    public function setRepresentativeCountry(Country $representativeCountry = null)
    {
        $this->setProperty('representativeCountry', $representativeCountry);
    }

    /**
     * @return \DateTime
     */
    public function getTosAcceptanceDatetime()
    {
        return $this->getProperty('tosAcceptanceDatetime');
    }

    /**
     * @param \DateTime $tosAcceptanceDatetime
     */
    public function setTosAcceptanceDatetime(\DateTime $tosAcceptanceDatetime = null)
    {
        $this->setProperty('tosAcceptanceDatetime', $tosAcceptanceDatetime);
    }

    /**
     * @return string
     */
    public function getTosAcceptanceIpAddress()
    {
        return $this->getProperty('tosAcceptanceIpAddress');
    }

    /**
     * @param string $tosAcceptanceIpAddress
     */
    public function setTosAcceptanceIpAddress($tosAcceptanceIpAddress = null)
    {
        $this->setProperty('tosAcceptanceIpAddress', $tosAcceptanceIpAddress);
    }

    /**
     * @return bool
     */
    public function getAdditionalDocumentNeeded()
    {
        return $this->getProperty('additionalDocumentNeeded');
    }

    /**
     * @param bool $additionalDocumentNeeded
     */
    public function setAdditionalDocumentNeeded($additionalDocumentNeeded = null)
    {
        $this->setProperty('additionalDocumentNeeded', $additionalDocumentNeeded);
    }

    /**
     * @return string
     */
    public function getVerificationStatus()
    {
        return $this->getProperty('verificationStatus');
    }

    /**
     * @param string $verificationStatus
     */
    public function setVerificationStatus($verificationStatus = null)
    {
        $this->setProperty('verificationStatus', $verificationStatus);
    }


}
