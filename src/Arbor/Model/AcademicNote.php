<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicNote extends \ModelBase
{
    public const STUDENT = 'student';

    public const ACADEMIC_UNIT = 'academicUnit';

    public const SUMMARY = 'summary';

    public const CONTENT = 'content';

    public const NOTE_CREATED_DATETIME = 'noteCreatedDatetime';

    protected $_resourceType = ResourceType::ACADEMIC_NOTE;

    /**
     * @param Query $query
     * @return AcademicNote[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::ACADEMIC_NOTE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_NOTE, $id);
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
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(\AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty('summary');
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary = null)
    {
        $this->setProperty('summary', $summary);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getProperty('content');
    }

    /**
     * @param string $content
     */
    public function setContent(string $content = null)
    {
        $this->setProperty('content', $content);
    }

    /**
     * @return \DateTime
     */
    public function getNoteCreatedDatetime()
    {
        return $this->getProperty('noteCreatedDatetime');
    }

    /**
     * @param \DateTime $noteCreatedDatetime
     */
    public function setNoteCreatedDatetime(\DateTime $noteCreatedDatetime = null)
    {
        $this->setProperty('noteCreatedDatetime', $noteCreatedDatetime);
    }
}
