<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CurriculumTargetSet;

class CurriculumTarget extends ModelBase
{
    const CURRICULUM_TARGET_SET = 'curriculumTargetSet';

    const ACADEMIC_YEAR_INDEX = 'academicYearIndex';

    const ACADEMIC_YEAR_POINT = 'academicYearPoint';

    const TARGET = 'target';

    protected $_resourceType = ResourceType::CURRICULUM_TARGET;

    /**
     * @param \Arbor\Query\Query $query
     * @return CurriculumTarget[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CurriculumTarget");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CurriculumTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CURRICULUM_TARGET, $id);
    }

    /**
     * @return CurriculumTargetSet
     */
    public function getCurriculumTargetSet()
    {
        return $this->getProperty("curriculumTargetSet");
    }

    /**
     * @param CurriculumTargetSet $curriculumTargetSet
     */
    public function setCurriculumTargetSet(CurriculumTargetSet $curriculumTargetSet = null)
    {
        $this->setProperty("curriculumTargetSet", $curriculumTargetSet);
    }

    /**
     * @return int
     */
    public function getAcademicYearIndex()
    {
        return $this->getProperty("academicYearIndex");
    }

    /**
     * @param int $academicYearIndex
     */
    public function setAcademicYearIndex($academicYearIndex = null)
    {
        $this->setProperty("academicYearIndex", $academicYearIndex);
    }

    /**
     * @return float
     */
    public function getAcademicYearPoint()
    {
        return $this->getProperty("academicYearPoint");
    }

    /**
     * @param float $academicYearPoint
     */
    public function setAcademicYearPoint($academicYearPoint = null)
    {
        $this->setProperty("academicYearPoint", $academicYearPoint);
    }

    /**
     * @return float
     */
    public function getTarget()
    {
        return $this->getProperty("target");
    }

    /**
     * @param float $target
     */
    public function setTarget($target = null)
    {
        $this->setProperty("target", $target);
    }
}
