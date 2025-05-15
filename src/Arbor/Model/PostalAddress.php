<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PostalAddress extends ModelBase
{
    public const ADDRESS1 = 'address1';

    public const ADDRESS2 = 'address2';

    public const ADDRESS3 = 'address3';

    public const POSTAL_TOWN = 'postalTown';

    public const POSTAL_STATE = 'postalState';

    public const POSTAL_CODE = 'postalCode';

    public const UNIQUE_PROPERTY_REFERENCE_NUMBER = 'uniquePropertyReferenceNumber';

    public const COUNTRY = 'country';

    public const LAT = 'lat';

    public const LNG = 'lng';

    public const GEOCODE_TYPE = 'geocodeType';

    protected $_resourceType = ResourceType::POSTAL_ADDRESS;

    /**
     * @param Query $query
     * @return PostalAddress[] | Collection
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

        $query->setResourceType(ResourceType::POSTAL_ADDRESS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PostalAddress
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::POSTAL_ADDRESS, $id);
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->getProperty('address1');
    }

    /**
     * @param string $address1
     */
    public function setAddress1(string $address1 = null)
    {
        $this->setProperty('address1', $address1);
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->getProperty('address2');
    }

    /**
     * @param string $address2
     */
    public function setAddress2(string $address2 = null)
    {
        $this->setProperty('address2', $address2);
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
        return $this->getProperty('address3');
    }

    /**
     * @param string $address3
     */
    public function setAddress3(string $address3 = null)
    {
        $this->setProperty('address3', $address3);
    }

    /**
     * @return string
     */
    public function getPostalTown()
    {
        return $this->getProperty('postalTown');
    }

    /**
     * @param string $postalTown
     */
    public function setPostalTown(string $postalTown = null)
    {
        $this->setProperty('postalTown', $postalTown);
    }

    /**
     * @return string
     */
    public function getPostalState()
    {
        return $this->getProperty('postalState');
    }

    /**
     * @param string $postalState
     */
    public function setPostalState(string $postalState = null)
    {
        $this->setProperty('postalState', $postalState);
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
    public function setPostalCode(string $postalCode = null)
    {
        $this->setProperty('postalCode', $postalCode);
    }

    /**
     * @return string
     */
    public function getUniquePropertyReferenceNumber()
    {
        return $this->getProperty('uniquePropertyReferenceNumber');
    }

    /**
     * @param string $uniquePropertyReferenceNumber
     */
    public function setUniquePropertyReferenceNumber(string $uniquePropertyReferenceNumber = null)
    {
        $this->setProperty('uniquePropertyReferenceNumber', $uniquePropertyReferenceNumber);
    }

    /**
     * @return \Arbor\Model\Country
     */
    public function getCountry()
    {
        return $this->getProperty('country');
    }

    /**
     * @param \Arbor\Model\Country $country
     */
    public function setCountry(\Arbor\Model\Country $country = null)
    {
        $this->setProperty('country', $country);
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->getProperty('lat');
    }

    /**
     * @param float $lat
     */
    public function setLat(float $lat = null)
    {
        $this->setProperty('lat', $lat);
    }

    /**
     * @return float
     */
    public function getLng()
    {
        return $this->getProperty('lng');
    }

    /**
     * @param float $lng
     */
    public function setLng(float $lng = null)
    {
        $this->setProperty('lng', $lng);
    }

    /**
     * @return string
     */
    public function getGeocodeType()
    {
        return $this->getProperty('geocodeType');
    }

    /**
     * @param string $geocodeType
     */
    public function setGeocodeType(string $geocodeType = null)
    {
        $this->setProperty('geocodeType', $geocodeType);
    }
}
