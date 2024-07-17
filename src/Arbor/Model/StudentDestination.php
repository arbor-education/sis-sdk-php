<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentDestination extends ModelBase
{
    public const STUDENT = 'student';

    public const STUDENT_DESTINATION_TYPE = 'studentDestinationType';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const VERIFIED_DATE = 'verifiedDate';

    public const LINKED_RECORD = 'linkedRecord';

    protected $_resourceType = ResourceType::STUDENT_DESTINATION;

    /**
     * @param Query $query
     * @return StudentDestination[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_DESTINATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentDestination
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_DESTINATION, $id);
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
     * @return \Arbor\Model\StudentDestinationType
     */
    public function getStudentDestinationType()
    {
        return $this->getProperty('studentDestinationType');
    }

    /**
     * @param \Arbor\Model\StudentDestinationType $studentDestinationType
     */
    public function setStudentDestinationType(\Arbor\Model\StudentDestinationType $studentDestinationType = null)
    {
        $this->setProperty('studentDestinationType', $studentDestinationType);
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
     * @return \DateTime
     */
    public function getVerifiedDate()
    {
        return $this->getProperty('verifiedDate');
    }

    /**
     * @param \DateTime $verifiedDate
     */
    public function setVerifiedDate(\DateTime $verifiedDate = null)
    {
        $this->setProperty('verifiedDate', $verifiedDate);
    }

    /**
     * @return ModelBase
     */
    public function getLinkedRecord()
    {
        return $this->getProperty('linkedRecord');
    }

    /**
     * @param ModelBase $linkedRecord
     */
    public function setLinkedRecord(\ModelBase $linkedRecord = null)
    {
        $this->setProperty('linkedRecord', $linkedRecord);
    }
}
