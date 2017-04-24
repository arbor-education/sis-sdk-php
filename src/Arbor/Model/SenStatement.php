<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;

class SenStatement extends ModelBase
{
    const STUDENT = 'student';

    const DATE_REQUESTED = 'dateRequested';

    const DATE_PARENT_CONSULTED = 'dateParentConsulted';

    const DISAPPLICATION_FROM_NC_PERMANENT_SUBJECTS = 'disapplicationFromNcPermanentSubjects';

    const DISAPPLICATION_FROM_NC_TEMPORARY_SUBJECTS = 'disapplicationFromNcTemporarySubjects';

    const LOCAL_AUTHORITY_OFFICER = 'localAuthorityOfficer';

    const DECISION_STATUS = 'decisionStatus';

    const SUBJECT_TO_SEN_TRIBUNAL = 'subjectToSenTribunal';

    const APPEAL_NOTES = 'appealNotes';

    const DATE_FINALIZED = 'dateFinalized';

    const DATE_CEASED = 'dateCeased';

    const COMMENTS = 'comments';

    protected $_resourceType = ResourceType::SEN_STATEMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return SenStatement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("SenStatement");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SenStatement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::SEN_STATEMENT, $id);
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
     * @return \DateTime
     */
    public function getDateRequested()
    {
        return $this->getProperty("dateRequested");
    }

    /**
     * @param \DateTime $dateRequested
     */
    public function setDateRequested(\DateTime $dateRequested = null)
    {
        $this->setProperty("dateRequested", $dateRequested);
    }

    /**
     * @return \DateTime
     */
    public function getDateParentConsulted()
    {
        return $this->getProperty("dateParentConsulted");
    }

    /**
     * @param \DateTime $dateParentConsulted
     */
    public function setDateParentConsulted(\DateTime $dateParentConsulted = null)
    {
        $this->setProperty("dateParentConsulted", $dateParentConsulted);
    }

    /**
     * @return string
     */
    public function getDisapplicationFromNcPermanentSubjects()
    {
        return $this->getProperty("disapplicationFromNcPermanentSubjects");
    }

    /**
     * @param string $disapplicationFromNcPermanentSubjects
     */
    public function setDisapplicationFromNcPermanentSubjects($disapplicationFromNcPermanentSubjects = null)
    {
        $this->setProperty("disapplicationFromNcPermanentSubjects", $disapplicationFromNcPermanentSubjects);
    }

    /**
     * @return string
     */
    public function getDisapplicationFromNcTemporarySubjects()
    {
        return $this->getProperty("disapplicationFromNcTemporarySubjects");
    }

    /**
     * @param string $disapplicationFromNcTemporarySubjects
     */
    public function setDisapplicationFromNcTemporarySubjects($disapplicationFromNcTemporarySubjects = null)
    {
        $this->setProperty("disapplicationFromNcTemporarySubjects", $disapplicationFromNcTemporarySubjects);
    }

    /**
     * @return string
     */
    public function getLocalAuthorityOfficer()
    {
        return $this->getProperty("localAuthorityOfficer");
    }

    /**
     * @param string $localAuthorityOfficer
     */
    public function setLocalAuthorityOfficer($localAuthorityOfficer = null)
    {
        $this->setProperty("localAuthorityOfficer", $localAuthorityOfficer);
    }

    /**
     * @return string
     */
    public function getDecisionStatus()
    {
        return $this->getProperty("decisionStatus");
    }

    /**
     * @param string $decisionStatus
     */
    public function setDecisionStatus($decisionStatus = null)
    {
        $this->setProperty("decisionStatus", $decisionStatus);
    }

    /**
     * @return bool
     */
    public function getSubjectToSenTribunal()
    {
        return $this->getProperty("subjectToSenTribunal");
    }

    /**
     * @param bool $subjectToSenTribunal
     */
    public function setSubjectToSenTribunal($subjectToSenTribunal = null)
    {
        $this->setProperty("subjectToSenTribunal", $subjectToSenTribunal);
    }

    /**
     * @return string
     */
    public function getAppealNotes()
    {
        return $this->getProperty("appealNotes");
    }

    /**
     * @param string $appealNotes
     */
    public function setAppealNotes($appealNotes = null)
    {
        $this->setProperty("appealNotes", $appealNotes);
    }

    /**
     * @return \DateTime
     */
    public function getDateFinalized()
    {
        return $this->getProperty("dateFinalized");
    }

    /**
     * @param \DateTime $dateFinalized
     */
    public function setDateFinalized(\DateTime $dateFinalized = null)
    {
        $this->setProperty("dateFinalized", $dateFinalized);
    }

    /**
     * @return \DateTime
     */
    public function getDateCeased()
    {
        return $this->getProperty("dateCeased");
    }

    /**
     * @param \DateTime $dateCeased
     */
    public function setDateCeased(\DateTime $dateCeased = null)
    {
        $this->setProperty("dateCeased", $dateCeased);
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->getProperty("comments");
    }

    /**
     * @param string $comments
     */
    public function setComments($comments = null)
    {
        $this->setProperty("comments", $comments);
    }
}
