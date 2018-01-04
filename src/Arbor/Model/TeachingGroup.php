<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TeachingGroup extends ModelBase
{
    const TEACHING_GROUP_NAME = 'teachingGroupName';

    const DESCRIPTION = 'description';

    const ACADEMIC_YEAR = 'academicYear';

    const PROGRAMME_INSTANCE = 'programmeInstance';

    protected $_resourceType = ResourceType::TEACHING_GROUP;

    /**
     * @param Query $query
     * @return TeachingGroup[] | Collection
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

        $query->setResourceType(ResourceType::TEACHING_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TeachingGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TEACHING_GROUP, $id);
    }

    /**
     * @return string
     */
    public function getTeachingGroupName()
    {
        return $this->getProperty('teachingGroupName');
    }

    /**
     * @param string $teachingGroupName
     */
    public function setTeachingGroupName($teachingGroupName = null)
    {
        $this->setProperty('teachingGroupName', $teachingGroupName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return ProgrammeInstance
     */
    public function getProgrammeInstance()
    {
        return $this->getProperty('programmeInstance');
    }

    /**
     * @param ProgrammeInstance $programmeInstance
     */
    public function setProgrammeInstance(ProgrammeInstance $programmeInstance = null)
    {
        $this->setProperty('programmeInstance', $programmeInstance);
    }
}
