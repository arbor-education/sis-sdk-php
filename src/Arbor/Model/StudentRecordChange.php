<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

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
     * @param Query $query
     * @return StudentRecordChange[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_RECORD_CHANGE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentRecordChange
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_RECORD_CHANGE, $id);
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
    public function getChangerClassName()
    {
        return $this->getProperty('changerClassName');
    }

    /**
     * @param string $changerClassName
     */
    public function setChangerClassName($changerClassName = null)
    {
        $this->setProperty('changerClassName', $changerClassName);
    }

    /**
     * @return string
     */
    public function getChangeType()
    {
        return $this->getProperty('changeType');
    }

    /**
     * @param string $changeType
     */
    public function setChangeType($changeType = null)
    {
        $this->setProperty('changeType', $changeType);
    }

    /**
     * @return ModelBase
     */
    public function getReferenceObject()
    {
        return $this->getProperty('referenceObject');
    }

    /**
     * @param ModelBase $referenceObject
     */
    public function setReferenceObject(ModelBase $referenceObject = null)
    {
        $this->setProperty('referenceObject', $referenceObject);
    }

    /**
     * @return \DateTime
     */
    public function getAcceptedDatetime()
    {
        return $this->getProperty('acceptedDatetime');
    }

    /**
     * @param \DateTime $acceptedDatetime
     */
    public function setAcceptedDatetime(\DateTime $acceptedDatetime = null)
    {
        $this->setProperty('acceptedDatetime', $acceptedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRejectedDatetime()
    {
        return $this->getProperty('rejectedDatetime');
    }

    /**
     * @param \DateTime $rejectedDatetime
     */
    public function setRejectedDatetime(\DateTime $rejectedDatetime = null)
    {
        $this->setProperty('rejectedDatetime', $rejectedDatetime);
    }

    /**
     * @return Staff
     */
    public function getActionedByStaff()
    {
        return $this->getProperty('actionedByStaff');
    }

    /**
     * @param Staff $actionedByStaff
     */
    public function setActionedByStaff(Staff $actionedByStaff = null)
    {
        $this->setProperty('actionedByStaff', $actionedByStaff);
    }

    /**
     * @return string
     */
    public function getOldData()
    {
        return $this->getProperty('oldData');
    }

    /**
     * @param string $oldData
     */
    public function setOldData($oldData = null)
    {
        $this->setProperty('oldData', $oldData);
    }

    /**
     * @return string
     */
    public function getNewData()
    {
        return $this->getProperty('newData');
    }

    /**
     * @param string $newData
     */
    public function setNewData($newData = null)
    {
        $this->setProperty('newData', $newData);
    }


}
