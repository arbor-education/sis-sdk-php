<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\AcademicUnit;

class AcademicNote extends ModelBase
{
    const STUDENT = 'student';

    const ACADEMIC_UNIT = 'academicUnit';

    const SUMMARY = 'summary';

    const CONTENT = 'content';

    const NOTE_CREATED_DATETIME = 'noteCreatedDatetime';

    protected $_resourceType = ResourceType::ACADEMIC_NOTE;

    /**
     * @param \Arbor\Query\Query $query
     * @return AcademicNote[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("AcademicNote");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AcademicNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ACADEMIC_NOTE, $id);
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
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty("academicUnit");
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty("academicUnit", $academicUnit);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty("summary");
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary = null)
    {
        $this->setProperty("summary", $summary);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getProperty("content");
    }

    /**
     * @param string $content
     */
    public function setContent($content = null)
    {
        $this->setProperty("content", $content);
    }

    /**
     * @return \DateTime
     */
    public function getNoteCreatedDatetime()
    {
        return $this->getProperty("noteCreatedDatetime");
    }

    /**
     * @param \DateTime $noteCreatedDatetime
     */
    public function setNoteCreatedDatetime(\DateTime $noteCreatedDatetime = null)
    {
        $this->setProperty("noteCreatedDatetime", $noteCreatedDatetime);
    }
}
