<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SenStatement extends ModelBase
{
    public const STUDENT = 'student';

    public const DATE_REQUESTED = 'dateRequested';

    public const DATE_PARENT_CONSULTED = 'dateParentConsulted';

    public const DISAPPLICATION_FROM_NC_PERMANENT_SUBJECTS = 'disapplicationFromNcPermanentSubjects';

    public const DISAPPLICATION_FROM_NC_TEMPORARY_SUBJECTS = 'disapplicationFromNcTemporarySubjects';

    public const LOCAL_AUTHORITY_OFFICER = 'localAuthorityOfficer';

    public const DECISION_STATUS = 'decisionStatus';

    public const SUBJECT_TO_SEN_TRIBUNAL = 'subjectToSenTribunal';

    public const APPEAL_NOTES = 'appealNotes';

    public const DATE_FINALIZED = 'dateFinalized';

    public const DATE_CEASED = 'dateCeased';

    public const COMMENTS = 'comments';

    protected $_resourceType = ResourceType::SEN_STATEMENT;

    /**
     * @param Query $query
     * @return SenStatement[] | Collection
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

        $query->setResourceType(ResourceType::SEN_STATEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenStatement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SEN_STATEMENT, $id);
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
     * @return \DateTime
     */
    public function getDateRequested()
    {
        return $this->getProperty('dateRequested');
    }

    /**
     * @param \DateTime $dateRequested
     */
    public function setDateRequested(\DateTime $dateRequested = null)
    {
        $this->setProperty('dateRequested', $dateRequested);
    }

    /**
     * @return \DateTime
     */
    public function getDateParentConsulted()
    {
        return $this->getProperty('dateParentConsulted');
    }

    /**
     * @param \DateTime $dateParentConsulted
     */
    public function setDateParentConsulted(\DateTime $dateParentConsulted = null)
    {
        $this->setProperty('dateParentConsulted', $dateParentConsulted);
    }

    /**
     * @return string
     */
    public function getDisapplicationFromNcPermanentSubjects()
    {
        return $this->getProperty('disapplicationFromNcPermanentSubjects');
    }

    /**
     * @param string $disapplicationFromNcPermanentSubjects
     */
    public function setDisapplicationFromNcPermanentSubjects(string $disapplicationFromNcPermanentSubjects = null)
    {
        $this->setProperty('disapplicationFromNcPermanentSubjects', $disapplicationFromNcPermanentSubjects);
    }

    /**
     * @return string
     */
    public function getDisapplicationFromNcTemporarySubjects()
    {
        return $this->getProperty('disapplicationFromNcTemporarySubjects');
    }

    /**
     * @param string $disapplicationFromNcTemporarySubjects
     */
    public function setDisapplicationFromNcTemporarySubjects(string $disapplicationFromNcTemporarySubjects = null)
    {
        $this->setProperty('disapplicationFromNcTemporarySubjects', $disapplicationFromNcTemporarySubjects);
    }

    /**
     * @return string
     */
    public function getLocalAuthorityOfficer()
    {
        return $this->getProperty('localAuthorityOfficer');
    }

    /**
     * @param string $localAuthorityOfficer
     */
    public function setLocalAuthorityOfficer(string $localAuthorityOfficer = null)
    {
        $this->setProperty('localAuthorityOfficer', $localAuthorityOfficer);
    }

    /**
     * @return string
     */
    public function getDecisionStatus()
    {
        return $this->getProperty('decisionStatus');
    }

    /**
     * @param string $decisionStatus
     */
    public function setDecisionStatus(string $decisionStatus = null)
    {
        $this->setProperty('decisionStatus', $decisionStatus);
    }

    /**
     * @return bool
     */
    public function getSubjectToSenTribunal()
    {
        return $this->getProperty('subjectToSenTribunal');
    }

    /**
     * @param bool $subjectToSenTribunal
     */
    public function setSubjectToSenTribunal(bool $subjectToSenTribunal = null)
    {
        $this->setProperty('subjectToSenTribunal', $subjectToSenTribunal);
    }

    /**
     * @return string
     */
    public function getAppealNotes()
    {
        return $this->getProperty('appealNotes');
    }

    /**
     * @param string $appealNotes
     */
    public function setAppealNotes(string $appealNotes = null)
    {
        $this->setProperty('appealNotes', $appealNotes);
    }

    /**
     * @return \DateTime
     */
    public function getDateFinalized()
    {
        return $this->getProperty('dateFinalized');
    }

    /**
     * @param \DateTime $dateFinalized
     */
    public function setDateFinalized(\DateTime $dateFinalized = null)
    {
        $this->setProperty('dateFinalized', $dateFinalized);
    }

    /**
     * @return \DateTime
     */
    public function getDateCeased()
    {
        return $this->getProperty('dateCeased');
    }

    /**
     * @param \DateTime $dateCeased
     */
    public function setDateCeased(\DateTime $dateCeased = null)
    {
        $this->setProperty('dateCeased', $dateCeased);
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->getProperty('comments');
    }

    /**
     * @param string $comments
     */
    public function setComments(string $comments = null)
    {
        $this->setProperty('comments', $comments);
    }
}
