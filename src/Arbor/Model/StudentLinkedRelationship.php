<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentLinkedRelationship extends ModelBase
{
    public const STUDENT = 'student';

    public const LINKED_OBJECT = 'linkedObject';

    public const STUDENT_LINKED_RELATIONSHIP_TYPE = 'studentLinkedRelationshipType';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STUDENT_LINKED_RELATIONSHIP;

    /**
     * @param Query $query
     * @return StudentLinkedRelationship[] | Collection
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
     * @return ModelBase
     */
    public function getLinkedObject()
    {
        return $this->getProperty('linkedObject');
    }

    /**
     * @param ModelBase $linkedObject
     */
    public function setLinkedObject(\ModelBase $linkedObject = null)
    {
        $this->setProperty('linkedObject', $linkedObject);
    }

    /**
     * @return \Arbor\Model\StudentLinkedRelationshipType
     */
    public function getStudentLinkedRelationshipType()
    {
        return $this->getProperty('studentLinkedRelationshipType');
    }

    /**
     * @param \Arbor\Model\StudentLinkedRelationshipType $studentLinkedRelationshipType
     */
    public function setStudentLinkedRelationshipType(\Arbor\Model\StudentLinkedRelationshipType $studentLinkedRelationshipType = null)
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
