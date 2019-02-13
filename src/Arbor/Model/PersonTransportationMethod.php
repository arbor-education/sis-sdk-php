<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PersonTransportationMethod extends ModelBase
{

    const PERSON = 'person';

    const TRANSPORTATION_METHOD = 'transportationMethod';

    const NOTES = 'notes';

    protected $_resourceType = ResourceType::PERSON_TRANSPORTATION_METHOD;

    /**
     * @param Query $query
     * @return PersonTransportationMethod[] | Collection
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

        $query->setResourceType(ResourceType::PERSON_TRANSPORTATION_METHOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonTransportationMethod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON_TRANSPORTATION_METHOD, $id);
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
     * @return TransportationMethod
     */
    public function getTransportationMethod()
    {
        return $this->getProperty('transportationMethod');
    }

    /**
     * @param TransportationMethod $transportationMethod
     */
    public function setTransportationMethod(TransportationMethod $transportationMethod = null)
    {
        $this->setProperty('transportationMethod', $transportationMethod);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty('notes');
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes = null)
    {
        $this->setProperty('notes', $notes);
    }


}
