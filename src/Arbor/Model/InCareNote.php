<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InCareNote extends ModelBase
{
    public const STUDENT = 'student';

    public const SUMMARY = 'summary';

    public const CONTENT = 'content';

    public const NOTE_DATE = 'noteDate';

    protected $_resourceType = ResourceType::IN_CARE_NOTE;

    /**
     * @param Query $query
     * @return InCareNote[] | Collection
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

        $query->setResourceType(ResourceType::IN_CARE_NOTE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InCareNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_CARE_NOTE, $id);
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
    public function getNoteDate()
    {
        return $this->getProperty('noteDate');
    }

    /**
     * @param \DateTime $noteDate
     */
    public function setNoteDate(\DateTime $noteDate = null)
    {
        $this->setProperty('noteDate', $noteDate);
    }
}
