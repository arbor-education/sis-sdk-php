<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SafeguardingNote extends ModelBase
{
    const STUDENT = 'student';

    const DATE_LOGGED = 'dateLogged';

    const SUMMARY = 'summary';

    const CONTENT = 'content';

    protected $_resourceType = ResourceType::SAFEGUARDING_NOTE;

    /**
     * @param Query $query
     * @return SafeguardingNote[] | Collection
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

        $query->setResourceType(ResourceType::SAFEGUARDING_NOTE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SafeguardingNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SAFEGUARDING_NOTE, $id);
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
     * @return \DateTime
     */
    public function getDateLogged()
    {
        return $this->getProperty('dateLogged');
    }

    /**
     * @param \DateTime $dateLogged
     */
    public function setDateLogged(\DateTime $dateLogged = null)
    {
        $this->setProperty('dateLogged', $dateLogged);
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
    public function setSummary($summary = null)
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
    public function setContent($content = null)
    {
        $this->setProperty('content', $content);
    }
}
