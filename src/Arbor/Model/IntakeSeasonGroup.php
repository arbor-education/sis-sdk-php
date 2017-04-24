<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\IntakeSeason;

class IntakeSeasonGroup extends ModelBase
{
    const GROUP_NAME = 'groupName';

    const INTAKE_SEASON = 'intakeSeason';

    const EXPECTED_ADMISSION_DATE = 'expectedAdmissionDate';

    protected $_resourceType = ResourceType::INTAKE_SEASON_GROUP;

    /**
     * @param \Arbor\Query\Query $query
     * @return IntakeSeasonGroup[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("IntakeSeasonGroup");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return IntakeSeasonGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::INTAKE_SEASON_GROUP, $id);
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->getProperty("groupName");
    }

    /**
     * @param string $groupName
     */
    public function setGroupName($groupName = null)
    {
        $this->setProperty("groupName", $groupName);
    }

    /**
     * @return IntakeSeason
     */
    public function getIntakeSeason()
    {
        return $this->getProperty("intakeSeason");
    }

    /**
     * @param IntakeSeason $intakeSeason
     */
    public function setIntakeSeason(IntakeSeason $intakeSeason = null)
    {
        $this->setProperty("intakeSeason", $intakeSeason);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedAdmissionDate()
    {
        return $this->getProperty("expectedAdmissionDate");
    }

    /**
     * @param \DateTime $expectedAdmissionDate
     */
    public function setExpectedAdmissionDate(\DateTime $expectedAdmissionDate = null)
    {
        $this->setProperty("expectedAdmissionDate", $expectedAdmissionDate);
    }
}
