<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;

class VisionTest extends ModelBase
{
    const STUDENT = 'student';

    const TEST_DATE = 'testDate';

    const COLOR_BLINDNESS = 'colorBlindness';

    const NOTES = 'notes';

    protected $_resourceType = ResourceType::VISION_TEST;

    /**
     * @param \Arbor\Query\Query $query
     * @return VisionTest[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("VisionTest");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return VisionTest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::VISION_TEST, $id);
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
    public function getTestDate()
    {
        return $this->getProperty("testDate");
    }

    /**
     * @param \DateTime $testDate
     */
    public function setTestDate(\DateTime $testDate = null)
    {
        $this->setProperty("testDate", $testDate);
    }

    /**
     * @return string
     */
    public function getColorBlindness()
    {
        return $this->getProperty("colorBlindness");
    }

    /**
     * @param string $colorBlindness
     */
    public function setColorBlindness($colorBlindness = null)
    {
        $this->setProperty("colorBlindness", $colorBlindness);
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
