<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class VisionTest extends ModelBase
{
    public const STUDENT = 'student';

    public const TEST_DATE = 'testDate';

    public const COLOR_BLINDNESS = 'colorBlindness';

    public const NOTES = 'notes';

    protected $_resourceType = ResourceType::VISION_TEST;

    /**
     * @param Query $query
     * @return VisionTest[] | Collection
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

        $query->setResourceType(ResourceType::VISION_TEST);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return VisionTest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::VISION_TEST, $id);
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
    public function getTestDate()
    {
        return $this->getProperty('testDate');
    }

    /**
     * @param \DateTime $testDate
     */
    public function setTestDate(\DateTime $testDate = null)
    {
        $this->setProperty('testDate', $testDate);
    }

    /**
     * @return string
     */
    public function getColorBlindness()
    {
        return $this->getProperty('colorBlindness');
    }

    /**
     * @param string $colorBlindness
     */
    public function setColorBlindness(string $colorBlindness = null)
    {
        $this->setProperty('colorBlindness', $colorBlindness);
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
