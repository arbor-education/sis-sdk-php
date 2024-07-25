<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentRecordChange extends ModelBase
{
    public const STUDENT = 'student';

    public const CHANGER_CLASS_NAME = 'changerClassName';

    public const CHANGE_TYPE = 'changeType';

    public const REFERENCE_OBJECT = 'referenceObject';

    public const ACCEPTED_DATETIME = 'acceptedDatetime';

    public const REJECTED_DATETIME = 'rejectedDatetime';

    public const ACTIONED_BY_STAFF = 'actionedByStaff';

    public const OLD_DATA = 'oldData';

    public const NEW_DATA = 'newData';

    protected $_resourceType = ResourceType::STUDENT_RECORD_CHANGE;

    /**
     * @param Query $query
     * @return StudentRecordChange[] | Collection
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
    public function setChangerClassName(string $changerClassName = null)
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
    public function setChangeType(string $changeType = null)
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
    public function setReferenceObject(\ModelBase $referenceObject = null)
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
     * @return \Arbor\Model\Staff
     */
    public function getActionedByStaff()
    {
        return $this->getProperty('actionedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $actionedByStaff
     */
    public function setActionedByStaff(\Arbor\Model\Staff $actionedByStaff = null)
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
    public function setOldData(string $oldData = null)
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
    public function setNewData(string $newData = null)
    {
        $this->setProperty('newData', $newData);
    }
}
