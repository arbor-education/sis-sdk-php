<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TeachingAssistantAllocation extends ModelBase
{
    const STAFF = 'staff';

    const DAY_OF_CYCLE = 'dayOfCycle';

    const START_TIME = 'startTime';

    const END_TIME = 'endTime';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const ALLOCATED_TO = 'allocatedTo';

    protected $_resourceType = ResourceType::TEACHING_ASSISTANT_ALLOCATION;

    /**
     * @param Query $query
     * @return TeachingAssistantAllocation[] | Collection
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

        $query->setResourceType(ResourceType::TEACHING_ASSISTANT_ALLOCATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TeachingAssistantAllocation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TEACHING_ASSISTANT_ALLOCATION, $id);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return int
     */
    public function getDayOfCycle()
    {
        return $this->getProperty('dayOfCycle');
    }

    /**
     * @param int $dayOfCycle
     */
    public function setDayOfCycle($dayOfCycle = null)
    {
        $this->setProperty('dayOfCycle', $dayOfCycle);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getProperty('startTime');
    }

    /**
     * @param string $startTime
     */
    public function setStartTime($startTime = null)
    {
        $this->setProperty('startTime', $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty('endTime');
    }

    /**
     * @param string $endTime
     */
    public function setEndTime($endTime = null)
    {
        $this->setProperty('endTime', $endTime);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
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
     * @return ModelBase
     */
    public function getAllocatedTo()
    {
        return $this->getProperty('allocatedTo');
    }

    /**
     * @param ModelBase $allocatedTo
     */
    public function setAllocatedTo(ModelBase $allocatedTo = null)
    {
        $this->setProperty('allocatedTo', $allocatedTo);
    }
}
