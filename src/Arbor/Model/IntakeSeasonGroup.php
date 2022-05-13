<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IntakeSeasonGroup extends ModelBase
{
    const GROUP_NAME = 'groupName';

    const INTAKE_SEASON = 'intakeSeason';

    const EXPECTED_ADMISSION_DATE = 'expectedAdmissionDate';

    protected $_resourceType = ResourceType::INTAKE_SEASON_GROUP;

    /**
     * @param Query $query
     * @return IntakeSeasonGroup[] | Collection
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

        $query->setResourceType(ResourceType::INTAKE_SEASON_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntakeSeasonGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTAKE_SEASON_GROUP, $id);
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->getProperty('groupName');
    }

    /**
     * @param string $groupName
     */
    public function setGroupName($groupName = null)
    {
        $this->setProperty('groupName', $groupName);
    }

    /**
     * @return IntakeSeason
     */
    public function getIntakeSeason()
    {
        return $this->getProperty('intakeSeason');
    }

    /**
     * @param IntakeSeason $intakeSeason
     */
    public function setIntakeSeason(IntakeSeason $intakeSeason = null)
    {
        $this->setProperty('intakeSeason', $intakeSeason);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedAdmissionDate()
    {
        return $this->getProperty('expectedAdmissionDate');
    }

    /**
     * @param \DateTime $expectedAdmissionDate
     */
    public function setExpectedAdmissionDate(\DateTime $expectedAdmissionDate = null)
    {
        $this->setProperty('expectedAdmissionDate', $expectedAdmissionDate);
    }
}
