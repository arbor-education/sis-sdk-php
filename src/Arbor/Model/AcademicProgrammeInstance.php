<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicProgrammeInstance extends ModelBase
{
    public const ACADEMIC_PROGRAMME = 'academicProgramme';

    public const INSTANCE_NAME = 'instanceName';

    public const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::ACADEMIC_PROGRAMME_INSTANCE;

    /**
     * @param Query $query
     * @return AcademicProgrammeInstance[] | Collection
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
     * @return \Arbor\Model\AcademicProgramme
     */
    public function getAcademicProgramme()
    {
        return $this->getProperty('academicProgramme');
    }

    /**
     * @param \Arbor\Model\AcademicProgramme $academicProgramme
     */
    public function setAcademicProgramme(\Arbor\Model\AcademicProgramme $academicProgramme = null)
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
    public function setInstanceName(string $instanceName = null)
    {
        $this->setProperty('instanceName', $instanceName);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
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
