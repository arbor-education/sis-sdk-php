<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmergencyAlertStudent extends \ModelBase
{
    public const EMERGENCY_ALERT = 'emergencyAlert';

    public const STUDENT = 'student';

    protected $_resourceType = ResourceType::EMERGENCY_ALERT_STUDENT;

    /**
     * @param Query $query
     * @return EmergencyAlertStudent[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
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
     * @return EmergencyAlert
     */
    public function getEmergencyAlert()
    {
        return $this->getProperty('emergencyAlert');
    }

    /**
     * @param EmergencyAlert $emergencyAlert
     */
    public function setEmergencyAlert(\EmergencyAlert $emergencyAlert = null)
    {
        $this->setProperty('emergencyAlert', $emergencyAlert);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }
}
