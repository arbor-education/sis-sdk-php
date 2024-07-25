<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PersonNationality extends ModelBase
{
    public const PERSON = 'person';

    public const COUNTRY = 'country';

    public const NATIONALITY_STATUS = 'nationalityStatus';

    protected $_resourceType = ResourceType::PERSON_NATIONALITY;

    /**
     * @param Query $query
     * @return PersonNationality[] | Collection
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
    public function setPerson(\ModelBase $person = null)
    {
        $this->setProperty('person', $person);
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
     * @return \Arbor\Model\NationalityStatus
     */
    public function getNationalityStatus()
    {
        return $this->getProperty('nationalityStatus');
    }

    /**
     * @param \Arbor\Model\NationalityStatus $nationalityStatus
     */
    public function setNationalityStatus(\Arbor\Model\NationalityStatus $nationalityStatus = null)
    {
        $this->setProperty('nationalityStatus', $nationalityStatus);
    }
}
