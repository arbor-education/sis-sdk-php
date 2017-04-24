<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class BusinessRoleAssignment extends ModelBase
{
    const STUDENT_ACCESS_LEVEL = 'studentAccessLevel';

    const STUDENT_INSTITUTION_FILTER = 'studentInstitutionFilter';

    const STUDENT_FILTER1 = 'studentFilter1';

    const STUDENT_FILTER2 = 'studentFilter2';

    const STUDENT_FILTER3 = 'studentFilter3';

    const STAFF_ACCESS_LEVEL = 'staffAccessLevel';

    const STAFF_INSTITUTION_FILTER = 'staffInstitutionFilter';

    protected $_resourceType = ResourceType::GROUP_BUSINESS_ROLE_ASSIGNMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return BusinessRoleAssignment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Group_BusinessRoleAssignment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BusinessRoleAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GROUP_BUSINESS_ROLE_ASSIGNMENT, $id);
    }

    /**
     * @return string
     */
    public function getStudentAccessLevel()
    {
        return $this->getProperty("studentAccessLevel");
    }

    /**
     * @param string $studentAccessLevel
     */
    public function setStudentAccessLevel($studentAccessLevel = null)
    {
        $this->setProperty("studentAccessLevel", $studentAccessLevel);
    }

    /**
     * @return string
     */
    public function getStudentInstitutionFilter()
    {
        return $this->getProperty("studentInstitutionFilter");
    }

    /**
     * @param string $studentInstitutionFilter
     */
    public function setStudentInstitutionFilter($studentInstitutionFilter = null)
    {
        $this->setProperty("studentInstitutionFilter", $studentInstitutionFilter);
    }

    /**
     * @return string
     */
    public function getStudentFilter1()
    {
        return $this->getProperty("studentFilter1");
    }

    /**
     * @param string $studentFilter1
     */
    public function setStudentFilter1($studentFilter1 = null)
    {
        $this->setProperty("studentFilter1", $studentFilter1);
    }

    /**
     * @return string
     */
    public function getStudentFilter2()
    {
        return $this->getProperty("studentFilter2");
    }

    /**
     * @param string $studentFilter2
     */
    public function setStudentFilter2($studentFilter2 = null)
    {
        $this->setProperty("studentFilter2", $studentFilter2);
    }

    /**
     * @return string
     */
    public function getStudentFilter3()
    {
        return $this->getProperty("studentFilter3");
    }

    /**
     * @param string $studentFilter3
     */
    public function setStudentFilter3($studentFilter3 = null)
    {
        $this->setProperty("studentFilter3", $studentFilter3);
    }

    /**
     * @return string
     */
    public function getStaffAccessLevel()
    {
        return $this->getProperty("staffAccessLevel");
    }

    /**
     * @param string $staffAccessLevel
     */
    public function setStaffAccessLevel($staffAccessLevel = null)
    {
        $this->setProperty("staffAccessLevel", $staffAccessLevel);
    }

    /**
     * @return string
     */
    public function getStaffInstitutionFilter()
    {
        return $this->getProperty("staffInstitutionFilter");
    }

    /**
     * @param string $staffInstitutionFilter
     */
    public function setStaffInstitutionFilter($staffInstitutionFilter = null)
    {
        $this->setProperty("staffInstitutionFilter", $staffInstitutionFilter);
    }
}
