<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PersonTransportationMethod extends ModelBase
{
    public const PERSON = 'person';

    public const TRANSPORTATION_METHOD = 'transportationMethod';

    public const NOTES = 'notes';

    protected $_resourceType = ResourceType::PERSON_TRANSPORTATION_METHOD;

    /**
     * @param Query $query
     * @return PersonTransportationMethod[] | Collection
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
    public function setPerson(\ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return \Arbor\Model\TransportationMethod
     */
    public function getTransportationMethod()
    {
        return $this->getProperty('transportationMethod');
    }

    /**
     * @param \Arbor\Model\TransportationMethod $transportationMethod
     */
    public function setTransportationMethod(\Arbor\Model\TransportationMethod $transportationMethod = null)
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
    public function setNotes(string $notes = null)
    {
        $this->setProperty('notes', $notes);
    }
}
