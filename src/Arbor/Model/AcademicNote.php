<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicNote extends ModelBase
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
    public static function query(\Arbor\Query\Query $query = null)
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
     * @return \Arbor\Model\AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $academicUnit
     */
    public function setAcademicUnit(\Arbor\Model\AcademicUnit $academicUnit = null)
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
