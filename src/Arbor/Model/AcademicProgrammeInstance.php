<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicProgramme;
use \Arbor\Model\AcademicYear;

class AcademicProgrammeInstance extends ModelBase
{
    const ACADEMIC_PROGRAMME = 'academicProgramme';

    const INSTANCE_NAME = 'instanceName';

    const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::ACADEMIC_PROGRAMME_INSTANCE;

    /**
     * @param \Arbor\Query\Query $query
     * @return AcademicProgrammeInstance[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("AcademicProgrammeInstance");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AcademicProgrammeInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ACADEMIC_PROGRAMME_INSTANCE, $id);
    }

    /**
     * @return AcademicProgramme
     */
    public function getAcademicProgramme()
    {
        return $this->getProperty("academicProgramme");
    }

    /**
     * @param AcademicProgramme $academicProgramme
     */
    public function setAcademicProgramme(AcademicProgramme $academicProgramme = null)
    {
        $this->setProperty("academicProgramme", $academicProgramme);
    }

    /**
     * @return string
     */
    public function getInstanceName()
    {
        return $this->getProperty("instanceName");
    }

    /**
     * @param string $instanceName
     */
    public function setInstanceName($instanceName = null)
    {
        $this->setProperty("instanceName", $instanceName);
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
     * @return Collection|\Arbor\Model\AcademicUnit[]
     */
    public function getTopLevelAcademicUnits()
    {
        return $this->getCollectionProperty("topLevelAcademicUnits");
    }
}
