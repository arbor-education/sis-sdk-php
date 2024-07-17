<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomGroupMembership extends ModelBase
{
    public const CUSTOM_GROUP = 'customGroup';

    public const PERSON = 'person';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const GROUP_INSTITUTION = 'groupInstitution';

    protected $_resourceType = ResourceType::CUSTOM_GROUP_MEMBERSHIP;

    /**
     * @param Query $query
     * @return CustomGroupMembership[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_GROUP_MEMBERSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomGroupMembership
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_GROUP_MEMBERSHIP, $id);
    }

    /**
     * @return \Arbor\Model\Group\CustomGroup
     */
    public function getCustomGroup()
    {
        return $this->getProperty('customGroup');
    }

    /**
     * @param \Arbor\Model\Group\CustomGroup $customGroup
     */
    public function setCustomGroup(\Arbor\Model\Group\CustomGroup $customGroup = null)
    {
        $this->setProperty('customGroup', $customGroup);
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
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return \Arbor\Model\Group\Institution
     */
    public function getGroupInstitution()
    {
        return $this->getProperty('groupInstitution');
    }

    /**
     * @param \Arbor\Model\Group\Institution $groupInstitution
     */
    public function setGroupInstitution(\Arbor\Model\Group\Institution $groupInstitution = null)
    {
        $this->setProperty('groupInstitution', $groupInstitution);
    }
}
