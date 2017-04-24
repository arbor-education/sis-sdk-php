<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\DietaryRequirementType;

class DietaryRequirement extends ModelBase
{
    const PERSON = 'person';

    const DIETARY_REQUIREMENT_TYPE = 'dietaryRequirementType';

    const NOTE = 'note';

    protected $_resourceType = ResourceType::DIETARY_REQUIREMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return DietaryRequirement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("DietaryRequirement");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DietaryRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::DIETARY_REQUIREMENT, $id);
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
     * @return DietaryRequirementType
     */
    public function getDietaryRequirementType()
    {
        return $this->getProperty("dietaryRequirementType");
    }

    /**
     * @param DietaryRequirementType $dietaryRequirementType
     */
    public function setDietaryRequirementType(DietaryRequirementType $dietaryRequirementType = null)
    {
        $this->setProperty("dietaryRequirementType", $dietaryRequirementType);
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->getProperty("note");
    }

    /**
     * @param string $note
     */
    public function setNote($note = null)
    {
        $this->setProperty("note", $note);
    }
}
