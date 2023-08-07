<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PersonNextOfKin extends \ModelBase
{
    public const PERSON = 'person';

    public const RELATED_PERSON = 'relatedPerson';

    public const RELATIONSHIP = 'relationship';

    protected $_resourceType = ResourceType::PERSON_NEXT_OF_KIN;

    /**
     * @param Query $query
     * @return PersonNextOfKin[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::PERSON_NEXT_OF_KIN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonNextOfKin
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON_NEXT_OF_KIN, $id);
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param Person $person
     */
    public function setPerson(\Person $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return ModelBase
     */
    public function getRelatedPerson()
    {
        return $this->getProperty('relatedPerson');
    }

    /**
     * @param ModelBase $relatedPerson
     */
    public function setRelatedPerson(\ModelBase $relatedPerson = null)
    {
        $this->setProperty('relatedPerson', $relatedPerson);
    }

    /**
     * @return NextOfKinRelationship
     */
    public function getRelationship()
    {
        return $this->getProperty('relationship');
    }

    /**
     * @param NextOfKinRelationship $relationship
     */
    public function setRelationship(\NextOfKinRelationship $relationship = null)
    {
        $this->setProperty('relationship', $relationship);
    }
}
