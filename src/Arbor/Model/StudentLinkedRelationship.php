<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\StudentLinkedRelationshipType;

class StudentLinkedRelationship extends ModelBase
{
    const STUDENT = 'student';

    const LINKED_OBJECT = 'linkedObject';

    const STUDENT_LINKED_RELATIONSHIP_TYPE = 'studentLinkedRelationshipType';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STUDENT_LINKED_RELATIONSHIP;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentLinkedRelationship[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StudentLinkedRelationship");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentLinkedRelationship
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STUDENT_LINKED_RELATIONSHIP, $id);
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
     * @return ModelBase
     */
    public function getLinkedObject()
    {
        return $this->getProperty("linkedObject");
    }

    /**
     * @param ModelBase $linkedObject
     */
    public function setLinkedObject(ModelBase $linkedObject = null)
    {
        $this->setProperty("linkedObject", $linkedObject);
    }

    /**
     * @return StudentLinkedRelationshipType
     */
    public function getStudentLinkedRelationshipType()
    {
        return $this->getProperty("studentLinkedRelationshipType");
    }

    /**
     * @param StudentLinkedRelationshipType $studentLinkedRelationshipType
     */
    public function setStudentLinkedRelationshipType(StudentLinkedRelationshipType $studentLinkedRelationshipType = null)
    {
        $this->setProperty("studentLinkedRelationshipType", $studentLinkedRelationshipType);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }
}
