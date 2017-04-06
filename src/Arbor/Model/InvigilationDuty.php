<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\InvigilationSession;
use \Arbor\Model\Staff;

class InvigilationDuty extends ModelBase
{

    const INVIGILATION_SESSION = 'invigilationSession';

    const STAFF = 'staff';

    const ADDITIONAL_ROLE = 'additionalRole';

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::INVIGILATION_DUTY;

    /**
     * @param \Arbor\Query\Query $query
     * @return InvigilationDuty[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("InvigilationDuty");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return InvigilationDuty
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::INVIGILATION_DUTY, $id);
    }

    /**
     * @return InvigilationSession
     */
    public function getInvigilationSession()
    {
        return $this->getProperty("invigilationSession");
    }

    /**
     * @param InvigilationSession $invigilationSession
     */
    public function setInvigilationSession(InvigilationSession $invigilationSession = null)
    {
        $this->setProperty("invigilationSession", $invigilationSession);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty("staff");
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty("staff", $staff);
    }

    /**
     * @return string
     */
    public function getAdditionalRole()
    {
        return $this->getProperty("additionalRole");
    }

    /**
     * @param string $additionalRole
     */
    public function setAdditionalRole($additionalRole = null)
    {
        $this->setProperty("additionalRole", $additionalRole);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty("startDatetime");
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty("startDatetime", $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty("endDatetime");
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty("endDatetime", $endDatetime);
    }


}
