<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CurriculumTarget extends ModelBase
{
    public const CURRICULUM_TARGET_SET = 'curriculumTargetSet';

    public const ACADEMIC_YEAR_INDEX = 'academicYearIndex';

    public const ACADEMIC_YEAR_POINT = 'academicYearPoint';

    public const TARGET = 'target';

    protected $_resourceType = ResourceType::CURRICULUM_TARGET;

    /**
     * @param Query $query
     * @return CurriculumTarget[] | Collection
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

        $query->setResourceType(ResourceType::CURRICULUM_TARGET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CurriculumTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CURRICULUM_TARGET, $id);
    }

    /**
     * @return \Arbor\Model\CurriculumTargetSet
     */
    public function getCurriculumTargetSet()
    {
        return $this->getProperty('curriculumTargetSet');
    }

    /**
     * @param \Arbor\Model\CurriculumTargetSet $curriculumTargetSet
     */
    public function setCurriculumTargetSet(\Arbor\Model\CurriculumTargetSet $curriculumTargetSet = null)
    {
        $this->setProperty('curriculumTargetSet', $curriculumTargetSet);
    }

    /**
     * @return int
     */
    public function getAcademicYearIndex()
    {
        return $this->getProperty('academicYearIndex');
    }

    /**
     * @param int $academicYearIndex
     */
    public function setAcademicYearIndex(int $academicYearIndex = null)
    {
        $this->setProperty('academicYearIndex', $academicYearIndex);
    }

    /**
     * @return float
     */
    public function getAcademicYearPoint()
    {
        return $this->getProperty('academicYearPoint');
    }

    /**
     * @param float $academicYearPoint
     */
    public function setAcademicYearPoint(float $academicYearPoint = null)
    {
        $this->setProperty('academicYearPoint', $academicYearPoint);
    }

    /**
     * @return float
     */
    public function getTarget()
    {
        return $this->getProperty('target');
    }

    /**
     * @param float $target
     */
    public function setTarget(float $target = null)
    {
        $this->setProperty('target', $target);
    }
}
