<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PersonNextOfKin extends ModelBase
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
    public static function query(\Arbor\Query\Query $query = null)
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
     * @return \Arbor\Model\Person
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param \Arbor\Model\Person $person
     */
    public function setPerson(\Arbor\Model\Person $person = null)
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
     * @return \Arbor\Model\NextOfKinRelationship
     */
    public function getRelationship()
    {
        return $this->getProperty('relationship');
    }

    /**
     * @param \Arbor\Model\NextOfKinRelationship $relationship
     */
    public function setRelationship(\Arbor\Model\NextOfKinRelationship $relationship = null)
    {
        $this->setProperty('relationship', $relationship);
    }
}
