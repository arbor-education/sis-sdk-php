<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Trigger extends ModelBase
{

    const CODE = 'code';

    const TRIGGER_CATEGORY = 'triggerCategory';

    const TRIGGER_NAME = 'triggerName';

    const DESCRIPTION = 'description';

    const TRIGGER_CLASS = 'triggerClass';

    const TRIGGER_CLASS_ARGS = 'triggerClassArgs';

    const TEST_FOR_SCHOOL = 'testForSchool';

    const TEST_FOR_GROUPS = 'testForGroups';

    const TEST_FOR_ACADEMIC_UNITS = 'testForAcademicUnits';

    const TEST_FOR_STUDENTS = 'testForStudents';

    const TEST_FOR_STUDENT_ACADEMIC_UNIT_ENROLMENTS = 'testForStudentAcademicUnitEnrolments';

    protected $_resourceType = ResourceType::TRIGGER;

    /**
     * @param \Arbor\Query\Query $query
     * @return Trigger[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Trigger");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Trigger
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::TRIGGER, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return string
     */
    public function getTriggerCategory()
    {
        return $this->getProperty("triggerCategory");
    }

    /**
     * @param string $triggerCategory
     */
    public function setTriggerCategory($triggerCategory = null)
    {
        $this->setProperty("triggerCategory", $triggerCategory);
    }

    /**
     * @return string
     */
    public function getTriggerName()
    {
        return $this->getProperty("triggerName");
    }

    /**
     * @param string $triggerName
     */
    public function setTriggerName($triggerName = null)
    {
        $this->setProperty("triggerName", $triggerName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }

    /**
     * @return string
     */
    public function getTriggerClass()
    {
        return $this->getProperty("triggerClass");
    }

    /**
     * @param string $triggerClass
     */
    public function setTriggerClass($triggerClass = null)
    {
        $this->setProperty("triggerClass", $triggerClass);
    }

    /**
     * @return string
     */
    public function getTriggerClassArgs()
    {
        return $this->getProperty("triggerClassArgs");
    }

    /**
     * @param string $triggerClassArgs
     */
    public function setTriggerClassArgs($triggerClassArgs = null)
    {
        $this->setProperty("triggerClassArgs", $triggerClassArgs);
    }

    /**
     * @return bool
     */
    public function getTestForSchool()
    {
        return $this->getProperty("testForSchool");
    }

    /**
     * @param bool $testForSchool
     */
    public function setTestForSchool($testForSchool = null)
    {
        $this->setProperty("testForSchool", $testForSchool);
    }

    /**
     * @return bool
     */
    public function getTestForGroups()
    {
        return $this->getProperty("testForGroups");
    }

    /**
     * @param bool $testForGroups
     */
    public function setTestForGroups($testForGroups = null)
    {
        $this->setProperty("testForGroups", $testForGroups);
    }

    /**
     * @return bool
     */
    public function getTestForAcademicUnits()
    {
        return $this->getProperty("testForAcademicUnits");
    }

    /**
     * @param bool $testForAcademicUnits
     */
    public function setTestForAcademicUnits($testForAcademicUnits = null)
    {
        $this->setProperty("testForAcademicUnits", $testForAcademicUnits);
    }

    /**
     * @return bool
     */
    public function getTestForStudents()
    {
        return $this->getProperty("testForStudents");
    }

    /**
     * @param bool $testForStudents
     */
    public function setTestForStudents($testForStudents = null)
    {
        $this->setProperty("testForStudents", $testForStudents);
    }

    /**
     * @return bool
     */
    public function getTestForStudentAcademicUnitEnrolments()
    {
        return $this->getProperty("testForStudentAcademicUnitEnrolments");
    }

    /**
     * @param bool $testForStudentAcademicUnitEnrolments
     */
    public function setTestForStudentAcademicUnitEnrolments($testForStudentAcademicUnitEnrolments = null)
    {
        $this->setProperty("testForStudentAcademicUnitEnrolments", $testForStudentAcademicUnitEnrolments);
    }


}
