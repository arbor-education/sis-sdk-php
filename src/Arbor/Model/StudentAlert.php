<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentAlert extends ModelBase
{
    const STAFF = 'staff';

    const STUDENT = 'student';

    const TYPE = 'type';

    const ALERT_DATETIME = 'alertDatetime';

    const PARAMS = 'params';

    protected $_resourceType = ResourceType::STUDENT_ALERT;

    /**
     * @param Query $query
     * @return StudentAlert[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_ALERT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentAlert
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_ALERT, $id);
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
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType($type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return \DateTime
     */
    public function getAlertDatetime()
    {
        return $this->getProperty('alertDatetime');
    }

    /**
     * @param \DateTime $alertDatetime
     */
    public function setAlertDatetime(\DateTime $alertDatetime = null)
    {
        $this->setProperty('alertDatetime', $alertDatetime);
    }

    /**
     * @return string
     */
    public function getParams()
    {
        return $this->getProperty('params');
    }

    /**
     * @param string $params
     */
    public function setParams($params = null)
    {
        $this->setProperty('params', $params);
    }
}
