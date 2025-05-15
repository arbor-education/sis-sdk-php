<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InterventionGroup extends ModelBase
{
    public const NAME = 'name';

    public const INTERVENTION = 'intervention';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const AIMS = 'aims';

    public const SUCCESS_CRITERIA = 'successCriteria';

    public const STAFF = 'staff';

    public const IS_ATTENDANCE_REGISTERED = 'isAttendanceRegistered';

    protected $_resourceType = ResourceType::INTERVENTION_GROUP;

    /**
     * @param Query $query
     * @return InterventionGroup[] | Collection
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

        $query->setResourceType(ResourceType::INTERVENTION_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InterventionGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERVENTION_GROUP, $id);
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
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return \Arbor\Model\Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param \Arbor\Model\Intervention $intervention
     */
    public function setIntervention(\Arbor\Model\Intervention $intervention = null)
    {
        $this->setProperty('intervention', $intervention);
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
     * @return string
     */
    public function getAims()
    {
        return $this->getProperty('aims');
    }

    /**
     * @param string $aims
     */
    public function setAims(string $aims = null)
    {
        $this->setProperty('aims', $aims);
    }

    /**
     * @return string
     */
    public function getSuccessCriteria()
    {
        return $this->getProperty('successCriteria');
    }

    /**
     * @param string $successCriteria
     */
    public function setSuccessCriteria(string $successCriteria = null)
    {
        $this->setProperty('successCriteria', $successCriteria);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return bool
     */
    public function getIsAttendanceRegistered()
    {
        return $this->getProperty('isAttendanceRegistered');
    }

    /**
     * @param bool $isAttendanceRegistered
     */
    public function setIsAttendanceRegistered(bool $isAttendanceRegistered = null)
    {
        $this->setProperty('isAttendanceRegistered', $isAttendanceRegistered);
    }
}
