<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;

class CustomGroup extends ModelBase
{
    const CUSTOM_GROUP_NAME = 'customGroupName';

    const DESCRIPTION = 'description';

    const ACADEMIC_YEAR = 'academicYear';

    const CONTAINS_STUDENTS = 'containsStudents';

    const CONTAINS_GUARDIANS = 'containsGuardians';

    const CONTAINS_STAFF = 'containsStaff';

    protected $_resourceType = ResourceType::CUSTOM_GROUP;

    /**
     * @param \Arbor\Query\Query $query
     * @return CustomGroup[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CustomGroup");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CustomGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CUSTOM_GROUP, $id);
    }

    /**
     * @return string
     */
    public function getCustomGroupName()
    {
        return $this->getProperty("customGroupName");
    }

    /**
     * @param string $customGroupName
     */
    public function setCustomGroupName($customGroupName = null)
    {
        $this->setProperty("customGroupName", $customGroupName);
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
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty("academicYear");
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty("academicYear", $academicYear);
    }

    /**
     * @return string
     */
    public function getContainsStudents()
    {
        return $this->getProperty("containsStudents");
    }

    /**
     * @param string $containsStudents
     */
    public function setContainsStudents($containsStudents = null)
    {
        $this->setProperty("containsStudents", $containsStudents);
    }

    /**
     * @return string
     */
    public function getContainsGuardians()
    {
        return $this->getProperty("containsGuardians");
    }

    /**
     * @param string $containsGuardians
     */
    public function setContainsGuardians($containsGuardians = null)
    {
        $this->setProperty("containsGuardians", $containsGuardians);
    }

    /**
     * @return string
     */
    public function getContainsStaff()
    {
        return $this->getProperty("containsStaff");
    }

    /**
     * @param string $containsStaff
     */
    public function setContainsStaff($containsStaff = null)
    {
        $this->setProperty("containsStaff", $containsStaff);
    }
}
