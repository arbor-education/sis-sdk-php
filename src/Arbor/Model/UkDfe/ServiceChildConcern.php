<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;

class ServiceChildConcern extends ModelBase
{

    const STUDENT = 'student';

    const MOVE_CONCERN = 'moveConcern';

    const DEPLOYMENT_CONCERN = 'deploymentConcern';

    const SEPARATION_CONCERN = 'separationConcern';

    const NOTES = 'notes';

    const ASSESSMENT_DATE = 'assessmentDate';

    const IMPORTED = 'imported';

    const CTF_IMPORT_JOB_STUDENT = 'ctfImportJobStudent';

    protected $_resourceType = ResourceType::UK_DFE_SERVICE_CHILD_CONCERN;

    /**
     * @param Query $query
     * @return ServiceChildConcern[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SERVICE_CHILD_CONCERN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ServiceChildConcern
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SERVICE_CHILD_CONCERN, $id);
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
    public function getMoveConcern()
    {
        return $this->getProperty('moveConcern');
    }

    /**
     * @param string $moveConcern
     */
    public function setMoveConcern($moveConcern = null)
    {
        $this->setProperty('moveConcern', $moveConcern);
    }

    /**
     * @return string
     */
    public function getDeploymentConcern()
    {
        return $this->getProperty('deploymentConcern');
    }

    /**
     * @param string $deploymentConcern
     */
    public function setDeploymentConcern($deploymentConcern = null)
    {
        $this->setProperty('deploymentConcern', $deploymentConcern);
    }

    /**
     * @return string
     */
    public function getSeparationConcern()
    {
        return $this->getProperty('separationConcern');
    }

    /**
     * @param string $separationConcern
     */
    public function setSeparationConcern($separationConcern = null)
    {
        $this->setProperty('separationConcern', $separationConcern);
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
    public function setNotes($notes = null)
    {
        $this->setProperty('notes', $notes);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentDate()
    {
        return $this->getProperty('assessmentDate');
    }

    /**
     * @param \DateTime $assessmentDate
     */
    public function setAssessmentDate(\DateTime $assessmentDate = null)
    {
        $this->setProperty('assessmentDate', $assessmentDate);
    }

    /**
     * @return bool
     */
    public function getImported()
    {
        return $this->getProperty('imported');
    }

    /**
     * @param bool $imported
     */
    public function setImported($imported = null)
    {
        $this->setProperty('imported', $imported);
    }

    /**
     * @return CtfImportJobStudent
     */
    public function getCtfImportJobStudent()
    {
        return $this->getProperty('ctfImportJobStudent');
    }

    /**
     * @param CtfImportJobStudent $ctfImportJobStudent
     */
    public function setCtfImportJobStudent(CtfImportJobStudent $ctfImportJobStudent = null)
    {
        $this->setProperty('ctfImportJobStudent', $ctfImportJobStudent);
    }


}
