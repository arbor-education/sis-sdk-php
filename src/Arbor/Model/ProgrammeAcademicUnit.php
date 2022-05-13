<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProgrammeAcademicUnit extends ModelBase
{
    const PROGRAMME_INSTANCE = 'programmeInstance';

    const ACADEMIC_UNIT = 'academicUnit';

    protected $_resourceType = ResourceType::PROGRAMME_ACADEMIC_UNIT;

    /**
     * @param Query $query
     * @return ProgrammeAcademicUnit[] | Collection
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

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }

}
