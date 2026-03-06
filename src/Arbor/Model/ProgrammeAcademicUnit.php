<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProgrammeAcademicUnit extends ModelBase
{
    public const PROGRAMME_INSTANCE = 'programmeInstance';

    public const ACADEMIC_UNIT = 'academicUnit';

    protected $_resourceType = ResourceType::PROGRAMME_ACADEMIC_UNIT;

    /**
     * @param Query $query
     * @return ProgrammeAcademicUnit[] | Collection
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

        $query->setResourceType(ResourceType::PROGRAMME_ACADEMIC_UNIT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeAcademicUnit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRAMME_ACADEMIC_UNIT, $id);
    }

    /**
     * @return \Arbor\Model\ProgrammeInstance
     */
    public function getProgrammeInstance()
    {
        return $this->getProperty('programmeInstance');
    }

    /**
     * @param \Arbor\Model\ProgrammeInstance $programmeInstance
     */
    public function setProgrammeInstance(\Arbor\Model\ProgrammeInstance $programmeInstance = null)
    {
        $this->setProperty('programmeInstance', $programmeInstance);
    }

    /**
     * @return \Arbor\Model\AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $academicUnit
     */
    public function setAcademicUnit(\Arbor\Model\AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }
}
