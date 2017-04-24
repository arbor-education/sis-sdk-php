<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\ImpairmentCategory;

class PersonImpairment extends ModelBase
{
    const PERSON = 'person';

    const PERSON_IMPAIRMENT_NAME = 'personImpairmentName';

    const IMPAIRMENT_CATEGORY = 'impairmentCategory';

    const DATE_ADVISED = 'dateAdvised';

    const AFFECTS_WORKING_ABILITY = 'affectsWorkingAbility';

    protected $_resourceType = ResourceType::PERSON_IMPAIRMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return PersonImpairment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PersonImpairment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PersonImpairment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PERSON_IMPAIRMENT, $id);
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
     * @return string
     */
    public function getPersonImpairmentName()
    {
        return $this->getProperty("personImpairmentName");
    }

    /**
     * @param string $personImpairmentName
     */
    public function setPersonImpairmentName($personImpairmentName = null)
    {
        $this->setProperty("personImpairmentName", $personImpairmentName);
    }

    /**
     * @return ImpairmentCategory
     */
    public function getImpairmentCategory()
    {
        return $this->getProperty("impairmentCategory");
    }

    /**
     * @param ImpairmentCategory $impairmentCategory
     */
    public function setImpairmentCategory(ImpairmentCategory $impairmentCategory = null)
    {
        $this->setProperty("impairmentCategory", $impairmentCategory);
    }

    /**
     * @return \DateTime
     */
    public function getDateAdvised()
    {
        return $this->getProperty("dateAdvised");
    }

    /**
     * @param \DateTime $dateAdvised
     */
    public function setDateAdvised(\DateTime $dateAdvised = null)
    {
        $this->setProperty("dateAdvised", $dateAdvised);
    }

    /**
     * @return bool
     */
    public function getAffectsWorkingAbility()
    {
        return $this->getProperty("affectsWorkingAbility");
    }

    /**
     * @param bool $affectsWorkingAbility
     */
    public function setAffectsWorkingAbility($affectsWorkingAbility = null)
    {
        $this->setProperty("affectsWorkingAbility", $affectsWorkingAbility);
    }
}
