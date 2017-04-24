<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Person;
use \Arbor\Model\NextOfKinRelationship;

class PersonNextOfKin extends ModelBase
{
    const PERSON = 'person';

    const RELATED_PERSON = 'relatedPerson';

    const RELATIONSHIP = 'relationship';

    protected $_resourceType = ResourceType::PERSON_NEXT_OF_KIN;

    /**
     * @param \Arbor\Query\Query $query
     * @return PersonNextOfKin[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PersonNextOfKin");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PersonNextOfKin
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PERSON_NEXT_OF_KIN, $id);
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->getProperty("person");
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person = null)
    {
        $this->setProperty("person", $person);
    }

    /**
     * @return ModelBase
     */
    public function getRelatedPerson()
    {
        return $this->getProperty("relatedPerson");
    }

    /**
     * @param ModelBase $relatedPerson
     */
    public function setRelatedPerson(ModelBase $relatedPerson = null)
    {
        $this->setProperty("relatedPerson", $relatedPerson);
    }

    /**
     * @return NextOfKinRelationship
     */
    public function getRelationship()
    {
        return $this->getProperty("relationship");
    }

    /**
     * @param NextOfKinRelationship $relationship
     */
    public function setRelationship(NextOfKinRelationship $relationship = null)
    {
        $this->setProperty("relationship", $relationship);
    }
}
