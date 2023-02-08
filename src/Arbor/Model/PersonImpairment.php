<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PersonImpairment extends ModelBase
{

    const PERSON = 'person';

    const PERSON_IMPAIRMENT_NAME = 'personImpairmentName';

    const IMPAIRMENT_CATEGORY = 'impairmentCategory';

    const DATE_ADVISED = 'dateAdvised';

    const AFFECTS_WORKING_ABILITY = 'affectsWorkingAbility';

    protected $_resourceType = ResourceType::PERSON_IMPAIRMENT;

    /**
     * @param Query $query
     * @return PersonImpairment[] | Collection
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

        $query->setResourceType(ResourceType::PERSON_IMPAIRMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonImpairment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON_IMPAIRMENT, $id);
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
     * @return string
     */
    public function getPersonImpairmentName()
    {
        return $this->getProperty('personImpairmentName');
    }

    /**
     * @param string $personImpairmentName
     */
    public function setPersonImpairmentName($personImpairmentName = null)
    {
        $this->setProperty('personImpairmentName', $personImpairmentName);
    }

    /**
     * @return ImpairmentCategory
     */
    public function getImpairmentCategory()
    {
        return $this->getProperty('impairmentCategory');
    }

    /**
     * @param ImpairmentCategory $impairmentCategory
     */
    public function setImpairmentCategory(ImpairmentCategory $impairmentCategory = null)
    {
        $this->setProperty('impairmentCategory', $impairmentCategory);
    }

    /**
     * @return \DateTime
     */
    public function getDateAdvised()
    {
        return $this->getProperty('dateAdvised');
    }

    /**
     * @param \DateTime $dateAdvised
     */
    public function setDateAdvised(\DateTime $dateAdvised = null)
    {
        $this->setProperty('dateAdvised', $dateAdvised);
    }

    /**
     * @return bool
     */
    public function getAffectsWorkingAbility()
    {
        return $this->getProperty('affectsWorkingAbility');
    }

    /**
     * @param bool $affectsWorkingAbility
     */
    public function setAffectsWorkingAbility($affectsWorkingAbility = null)
    {
        $this->setProperty('affectsWorkingAbility', $affectsWorkingAbility);
    }


}
