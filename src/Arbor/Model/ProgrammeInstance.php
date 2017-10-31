<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProgrammeInstance extends ModelBase
{

    const PROGRAMME = 'programme';

    const NAME = 'name';

    const PLANNED_START_DATE = 'plannedStartDate';

    const PLANNED_END_DATE = 'plannedEndDate';

    protected $_resourceType = ResourceType::PROGRAMME_INSTANCE;

    /**
     * @param Query $query
     * @return ProgrammeInstance[] | Collection
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

        $query->setResourceType(ResourceType::PROGRAMME_INSTANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRAMME_INSTANCE, $id);
    }

    /**
     * @return Programme
     */
    public function getProgramme()
    {
        return $this->getProperty('programme');
    }

    /**
     * @param Programme $programme
     */
    public function setProgramme(Programme $programme = null)
    {
        $this->setProperty('programme', $programme);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return \DateTime
     */
    public function getPlannedStartDate()
    {
        return $this->getProperty('plannedStartDate');
    }

    /**
     * @param \DateTime $plannedStartDate
     */
    public function setPlannedStartDate(\DateTime $plannedStartDate = null)
    {
        $this->setProperty('plannedStartDate', $plannedStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getPlannedEndDate()
    {
        return $this->getProperty('plannedEndDate');
    }

    /**
     * @param \DateTime $plannedEndDate
     */
    public function setPlannedEndDate(\DateTime $plannedEndDate = null)
    {
        $this->setProperty('plannedEndDate', $plannedEndDate);
    }


}
