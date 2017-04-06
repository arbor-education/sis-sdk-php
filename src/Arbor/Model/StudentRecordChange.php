<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\Staff;

class StudentRecordChange extends ModelBase
{

    const STUDENT = 'student';

    const CHANGER_CLASS_NAME = 'changerClassName';

    const CHANGE_TYPE = 'changeType';

    const REFERENCE_OBJECT = 'referenceObject';

    const ACCEPTED_DATETIME = 'acceptedDatetime';

    const REJECTED_DATETIME = 'rejectedDatetime';

    const ACTIONED_BY_STAFF = 'actionedByStaff';

    const OLD_DATA = 'oldData';

    const NEW_DATA = 'newData';

    protected $_resourceType = ResourceType::STUDENT_RECORD_CHANGE;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentRecordChange[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentRecordChange");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentRecordChange
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_RECORD_CHANGE, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return string
     */
    public function getChangerClassName()
    {
        return $this->getProperty("changerClassName");
    }

    /**
     * @param string $changerClassName
     */
    public function setChangerClassName($changerClassName = null)
    {
        $this->setProperty("changerClassName", $changerClassName);
    }

    /**
     * @return string
     */
    public function getChangeType()
    {
        return $this->getProperty("changeType");
    }

    /**
     * @param string $changeType
     */
    public function setChangeType($changeType = null)
    {
        $this->setProperty("changeType", $changeType);
    }

    /**
     * @return ModelBase
     */
    public function getReferenceObject()
    {
        return $this->getProperty("referenceObject");
    }

    /**
     * @param ModelBase $referenceObject
     */
    public function setReferenceObject(ModelBase $referenceObject = null)
    {
        $this->setProperty("referenceObject", $referenceObject);
    }

    /**
     * @return \DateTime
     */
    public function getAcceptedDatetime()
    {
        return $this->getProperty("acceptedDatetime");
    }

    /**
     * @param \DateTime $acceptedDatetime
     */
    public function setAcceptedDatetime(\DateTime $acceptedDatetime = null)
    {
        $this->setProperty("acceptedDatetime", $acceptedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRejectedDatetime()
    {
        return $this->getProperty("rejectedDatetime");
    }

    /**
     * @param \DateTime $rejectedDatetime
     */
    public function setRejectedDatetime(\DateTime $rejectedDatetime = null)
    {
        $this->setProperty("rejectedDatetime", $rejectedDatetime);
    }

    /**
     * @return Staff
     */
    public function getActionedByStaff()
    {
        return $this->getProperty("actionedByStaff");
    }

    /**
     * @param Staff $actionedByStaff
     */
    public function setActionedByStaff(Staff $actionedByStaff = null)
    {
        $this->setProperty("actionedByStaff", $actionedByStaff);
    }

    /**
     * @return string
     */
    public function getOldData()
    {
        return $this->getProperty("oldData");
    }

    /**
     * @param string $oldData
     */
    public function setOldData($oldData = null)
    {
        $this->setProperty("oldData", $oldData);
    }

    /**
     * @return string
     */
    public function getNewData()
    {
        return $this->getProperty("newData");
    }

    /**
     * @param string $newData
     */
    public function setNewData($newData = null)
    {
        $this->setProperty("newData", $newData);
    }


}
