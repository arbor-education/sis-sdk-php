<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicProgrammeInstance extends ModelBase
{

    const ACADEMIC_PROGRAMME = 'academicProgramme';

    const INSTANCE_NAME = 'instanceName';

    const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::ACADEMIC_PROGRAMME_INSTANCE;

    /**
     * @param Query $query
     * @return AcademicProgrammeInstance[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_PROGRAMME_INSTANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicProgrammeInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_PROGRAMME_INSTANCE, $id);
    }

    /**
     * @return AcademicProgramme
     */
    public function getAcademicProgramme()
    {
        return $this->getProperty('academicProgramme');
    }

    /**
     * @param AcademicProgramme $academicProgramme
     */
    public function setAcademicProgramme(AcademicProgramme $academicProgramme = null)
    {
        $this->setProperty('academicProgramme', $academicProgramme);
    }

    /**
     * @return string
     */
    public function getInstanceName()
    {
        return $this->getProperty('instanceName');
    }

    /**
     * @param string $instanceName
     */
    public function setInstanceName($instanceName = null)
    {
        $this->setProperty('instanceName', $instanceName);
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
     * @return Collection|\Arbor\Model\AcademicUnit[]
     */
    public function getTopLevelAcademicUnits()
    {
        return $this->getCollectionProperty('topLevelAcademicUnits');
    }


}
