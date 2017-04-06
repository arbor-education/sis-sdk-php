<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\MedicalInstitution;
use \Arbor\Model\MedicalInstitutionStaff;
use \Arbor\Model\MedicalRelationshipType;

class StudentMedicalRelationship extends ModelBase
{

    const STUDENT = 'student';

    const MEDICAL_INSTITUTION = 'medicalInstitution';

    const MEDICAL_INSTITUTION_STAFF = 'medicalInstitutionStaff';

    const MEDICAL_RELATIONSHIP_TYPE = 'medicalRelationshipType';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const NOTES = 'notes';

    protected $_resourceType = ResourceType::STUDENT_MEDICAL_RELATIONSHIP;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentMedicalRelationship[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentMedicalRelationship");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentMedicalRelationship
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_MEDICAL_RELATIONSHIP, $id);
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
     * @return MedicalInstitution
     */
    public function getMedicalInstitution()
    {
        return $this->getProperty("medicalInstitution");
    }

    /**
     * @param MedicalInstitution $medicalInstitution
     */
    public function setMedicalInstitution(MedicalInstitution $medicalInstitution = null)
    {
        $this->setProperty("medicalInstitution", $medicalInstitution);
    }

    /**
     * @return MedicalInstitutionStaff
     */
    public function getMedicalInstitutionStaff()
    {
        return $this->getProperty("medicalInstitutionStaff");
    }

    /**
     * @param MedicalInstitutionStaff $medicalInstitutionStaff
     */
    public function setMedicalInstitutionStaff(MedicalInstitutionStaff $medicalInstitutionStaff = null)
    {
        $this->setProperty("medicalInstitutionStaff", $medicalInstitutionStaff);
    }

    /**
     * @return MedicalRelationshipType
     */
    public function getMedicalRelationshipType()
    {
        return $this->getProperty("medicalRelationshipType");
    }

    /**
     * @param MedicalRelationshipType $medicalRelationshipType
     */
    public function setMedicalRelationshipType(MedicalRelationshipType $medicalRelationshipType = null)
    {
        $this->setProperty("medicalRelationshipType", $medicalRelationshipType);
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

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty("notes");
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes = null)
    {
        $this->setProperty("notes", $notes);
    }


}
