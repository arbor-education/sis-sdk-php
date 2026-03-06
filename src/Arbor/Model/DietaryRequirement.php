<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DietaryRequirement extends ModelBase
{
    public const PERSON = 'person';

    public const DIETARY_REQUIREMENT_TYPE = 'dietaryRequirementType';

    public const NOTE = 'note';

    protected $_resourceType = ResourceType::DIETARY_REQUIREMENT;

    /**
     * @param Query $query
     * @return DietaryRequirement[] | Collection
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

        $query->setResourceType(ResourceType::DIETARY_REQUIREMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DietaryRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DIETARY_REQUIREMENT, $id);
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
     * @return \Arbor\Model\DietaryRequirementType
     */
    public function getDietaryRequirementType()
    {
        return $this->getProperty('dietaryRequirementType');
    }

    /**
     * @param \Arbor\Model\DietaryRequirementType $dietaryRequirementType
     */
    public function setDietaryRequirementType(\Arbor\Model\DietaryRequirementType $dietaryRequirementType = null)
    {
        $this->setProperty('dietaryRequirementType', $dietaryRequirementType);
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->getProperty('note');
    }

    /**
     * @param string $note
     */
    public function setNote(string $note = null)
    {
        $this->setProperty('note', $note);
    }
}
