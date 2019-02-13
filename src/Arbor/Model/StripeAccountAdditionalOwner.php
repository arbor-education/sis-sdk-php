<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StripeAccountAdditionalOwner extends ModelBase
{

    const STRIPE_ACCOUNT = 'stripeAccount';

    const FIRST_NAME = 'firstName';

    const LAST_NAME = 'lastName';

    const DATE_OF_BIRTH = 'dateOfBirth';

    const ADDRESS_LINE1 = 'addressLine1';

    const ADDRESS_LINE2 = 'addressLine2';

    const CITY = 'city';

    const STATE = 'state';

    const POSTAL_CODE = 'postalCode';

    const COUNTRY = 'country';

    protected $_resourceType = ResourceType::STRIPE_ACCOUNT_ADDITIONAL_OWNER;

    /**
     * @param Query $query
     * @return StripeAccountAdditionalOwner[] | Collection
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

        $query->setResourceType(ResourceType::STRIPE_ACCOUNT_ADDITIONAL_OWNER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StripeAccountAdditionalOwner
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STRIPE_ACCOUNT_ADDITIONAL_OWNER, $id);
    }

    /**
     * @return StripeAccount
     */
    public function getStripeAccount()
    {
        return $this->getProperty('stripeAccount');
    }

    /**
     * @param StripeAccount $stripeAccount
     */
    public function setStripeAccount(StripeAccount $stripeAccount = null)
    {
        $this->setProperty('stripeAccount', $stripeAccount);
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getProperty('firstName');
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName = null)
    {
        $this->setProperty('firstName', $firstName);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getProperty('lastName');
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName = null)
    {
        $this->setProperty('lastName', $lastName);
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->getProperty('dateOfBirth');
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth(\DateTime $dateOfBirth = null)
    {
        $this->setProperty('dateOfBirth', $dateOfBirth);
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


}
