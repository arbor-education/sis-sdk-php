<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmergencyAlertStudent extends ModelBase
{
    public const EMERGENCY_ALERT = 'emergencyAlert';

    public const STUDENT = 'student';

    protected $_resourceType = ResourceType::EMERGENCY_ALERT_STUDENT;

    /**
     * @param Query $query
     * @return EmergencyAlertStudent[] | Collection
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

        $query->setResourceType(ResourceType::EMERGENCY_ALERT_STUDENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmergencyAlertStudent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMERGENCY_ALERT_STUDENT, $id);
    }

    /**
     * @return \Arbor\Model\EmergencyAlert
     */
    public function getEmergencyAlert()
    {
        return $this->getProperty('emergencyAlert');
    }

    /**
     * @param \Arbor\Model\EmergencyAlert $emergencyAlert
     */
    public function setEmergencyAlert(\Arbor\Model\EmergencyAlert $emergencyAlert = null)
    {
        $this->setProperty('emergencyAlert', $emergencyAlert);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }
}
