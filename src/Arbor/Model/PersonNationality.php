<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Country;
use \Arbor\Model\NationalityStatus;

class PersonNationality extends ModelBase
{
    const PERSON = 'person';

    const COUNTRY = 'country';

    const NATIONALITY_STATUS = 'nationalityStatus';

    protected $_resourceType = ResourceType::PERSON_NATIONALITY;

    /**
     * @param \Arbor\Query\Query $query
     * @return PersonNationality[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PersonNationality");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PersonNationality
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PERSON_NATIONALITY, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty("person");
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty("person", $person);
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->getProperty("country");
    }

    /**
     * @param Country $country
     */
    public function setCountry(Country $country = null)
    {
        $this->setProperty("country", $country);
    }

    /**
     * @return NationalityStatus
     */
    public function getNationalityStatus()
    {
        return $this->getProperty("nationalityStatus");
    }

    /**
     * @param NationalityStatus $nationalityStatus
     */
    public function setNationalityStatus(NationalityStatus $nationalityStatus = null)
    {
        $this->setProperty("nationalityStatus", $nationalityStatus);
    }
}
