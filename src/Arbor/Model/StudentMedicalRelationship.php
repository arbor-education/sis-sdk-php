<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentMedicalRelationship extends ModelBase
{
    public const STUDENT = 'student';

    public const MEDICAL_INSTITUTION = 'medicalInstitution';

    public const MEDICAL_INSTITUTION_STAFF = 'medicalInstitutionStaff';

    public const MEDICAL_RELATIONSHIP_TYPE = 'medicalRelationshipType';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const NOTES = 'notes';

    protected $_resourceType = ResourceType::STUDENT_MEDICAL_RELATIONSHIP;

    /**
     * @param Query $query
     * @return StudentMedicalRelationship[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_MEDICAL_RELATIONSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentMedicalRelationship
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_MEDICAL_RELATIONSHIP, $id);
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
     * @return \Arbor\Model\MedicalInstitution
     */
    public function getMedicalInstitution()
    {
        return $this->getProperty('medicalInstitution');
    }

    /**
     * @param \Arbor\Model\MedicalInstitution $medicalInstitution
     */
    public function setMedicalInstitution(\Arbor\Model\MedicalInstitution $medicalInstitution = null)
    {
        $this->setProperty('medicalInstitution', $medicalInstitution);
    }

    /**
     * @return \Arbor\Model\MedicalInstitutionStaff
     */
    public function getMedicalInstitutionStaff()
    {
        return $this->getProperty('medicalInstitutionStaff');
    }

    /**
     * @param \Arbor\Model\MedicalInstitutionStaff $medicalInstitutionStaff
     */
    public function setMedicalInstitutionStaff(\Arbor\Model\MedicalInstitutionStaff $medicalInstitutionStaff = null)
    {
        $this->setProperty('medicalInstitutionStaff', $medicalInstitutionStaff);
    }

    /**
     * @return \Arbor\Model\MedicalRelationshipType
     */
    public function getMedicalRelationshipType()
    {
        return $this->getProperty('medicalRelationshipType');
    }

    /**
     * @param \Arbor\Model\MedicalRelationshipType $medicalRelationshipType
     */
    public function setMedicalRelationshipType(\Arbor\Model\MedicalRelationshipType $medicalRelationshipType = null)
    {
        $this->setProperty('medicalRelationshipType', $medicalRelationshipType);
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

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty('notes');
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes = null)
    {
        $this->setProperty('notes', $notes);
    }
}
