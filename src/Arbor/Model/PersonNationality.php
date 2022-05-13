<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PersonNationality extends ModelBase
{
    const PERSON = 'person';

    const COUNTRY = 'country';

    const NATIONALITY_STATUS = 'nationalityStatus';

    protected $_resourceType = ResourceType::PERSON_NATIONALITY;

    /**
     * @param Query $query
     * @return PersonNationality[] | Collection
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

        $query->setResourceType(ResourceType::PERSON_NATIONALITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonNationality
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON_NATIONALITY, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty('person', $person);
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
     * @return NationalityStatus
     */
    public function getNationalityStatus()
    {
        return $this->getProperty('nationalityStatus');
    }

    /**
     * @param NationalityStatus $nationalityStatus
     */
    public function setNationalityStatus(NationalityStatus $nationalityStatus = null)
    {
        $this->setProperty('nationalityStatus', $nationalityStatus);
    }

}
