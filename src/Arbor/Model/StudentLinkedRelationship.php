<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentLinkedRelationship extends ModelBase
{
    const STUDENT = 'student';

    const LINKED_OBJECT = 'linkedObject';

    const STUDENT_LINKED_RELATIONSHIP_TYPE = 'studentLinkedRelationshipType';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STUDENT_LINKED_RELATIONSHIP;

    /**
     * @param Query $query
     * @return StudentLinkedRelationship[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_LINKED_RELATIONSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentLinkedRelationship
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_LINKED_RELATIONSHIP, $id);
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
     * @return ModelBase
     */
    public function getLinkedObject()
    {
        return $this->getProperty('linkedObject');
    }

    /**
     * @param ModelBase $linkedObject
     */
    public function setLinkedObject(ModelBase $linkedObject = null)
    {
        $this->setProperty('linkedObject', $linkedObject);
    }

    /**
     * @return StudentLinkedRelationshipType
     */
    public function getStudentLinkedRelationshipType()
    {
        return $this->getProperty('studentLinkedRelationshipType');
    }

    /**
     * @param StudentLinkedRelationshipType $studentLinkedRelationshipType
     */
    public function setStudentLinkedRelationshipType(StudentLinkedRelationshipType $studentLinkedRelationshipType = null)
    {
        $this->setProperty('studentLinkedRelationshipType', $studentLinkedRelationshipType);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
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

}
