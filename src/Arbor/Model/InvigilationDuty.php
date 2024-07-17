<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InvigilationDuty extends ModelBase
{
    public const INVIGILATION_SESSION = 'invigilationSession';

    public const STAFF = 'staff';

    public const ADDITIONAL_ROLE = 'additionalRole';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::INVIGILATION_DUTY;

    /**
     * @param Query $query
     * @return InvigilationDuty[] | Collection
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

        $query->setResourceType(ResourceType::INVIGILATION_DUTY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InvigilationDuty
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INVIGILATION_DUTY, $id);
    }

    /**
     * @return \Arbor\Model\InvigilationSession
     */
    public function getInvigilationSession()
    {
        return $this->getProperty('invigilationSession');
    }

    /**
     * @param \Arbor\Model\InvigilationSession $invigilationSession
     */
    public function setInvigilationSession(\Arbor\Model\InvigilationSession $invigilationSession = null)
    {
        $this->setProperty('invigilationSession', $invigilationSession);
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
     * @return string
     */
    public function getAdditionalRole()
    {
        return $this->getProperty('additionalRole');
    }

    /**
     * @param string $additionalRole
     */
    public function setAdditionalRole(string $additionalRole = null)
    {
        $this->setProperty('additionalRole', $additionalRole);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }
}
