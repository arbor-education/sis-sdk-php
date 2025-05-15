<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicUnitBlockAssignment extends ModelBase
{
    public const ACADEMIC_UNIT = 'academicUnit';

    public const BLOCK_NAME = 'blockName';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_BLOCK_ASSIGNMENT;

    /**
     * @param Query $query
     * @return AcademicUnitBlockAssignment[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_BLOCK_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitBlockAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_BLOCK_ASSIGNMENT, $id);
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

    /**
     * @return string
     */
    public function getBlockName()
    {
        return $this->getProperty('blockName');
    }

    /**
     * @param string $blockName
     */
    public function setBlockName(string $blockName = null)
    {
        $this->setProperty('blockName', $blockName);
    }
}
