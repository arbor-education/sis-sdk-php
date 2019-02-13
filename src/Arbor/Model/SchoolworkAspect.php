<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SchoolworkAspect extends ModelBase
{

    const SCHOOLWORK = 'schoolwork';

    const ASPECT_NAME = 'aspectName';

    const ASPECT_DATA_TYPE = 'aspectDataType';

    const GRADE_SET = 'gradeSet';

    const MARK_MIN_VALUE = 'markMinValue';

    const MARK_MAX_VALUE = 'markMaxValue';

    const SCALE_DIRECTION = 'scaleDirection';

    protected $_resourceType = ResourceType::SCHOOLWORK_ASPECT;

    /**
     * @param Query $query
     * @return SchoolworkAspect[] | Collection
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

        $query->setResourceType(ResourceType::SCHOOLWORK_ASPECT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolworkAspect
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SCHOOLWORK_ASPECT, $id);
    }

    /**
     * @return Schoolwork
     */
    public function getSchoolwork()
    {
        return $this->getProperty('schoolwork');
    }

    /**
     * @param Schoolwork $schoolwork
     */
    public function setSchoolwork(Schoolwork $schoolwork = null)
    {
        $this->setProperty('schoolwork', $schoolwork);
    }

    /**
     * @return string
     */
    public function getAspectName()
    {
        return $this->getProperty('aspectName');
    }

    /**
     * @param string $aspectName
     */
    public function setAspectName($aspectName = null)
    {
        $this->setProperty('aspectName', $aspectName);
    }

    /**
     * @return string
     */
    public function getAspectDataType()
    {
        return $this->getProperty('aspectDataType');
    }

    /**
     * @param string $aspectDataType
     */
    public function setAspectDataType($aspectDataType = null)
    {
        $this->setProperty('aspectDataType', $aspectDataType);
    }

    /**
     * @return GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty('gradeSet');
    }

    /**
     * @param GradeSet $gradeSet
     */
    public function setGradeSet(GradeSet $gradeSet = null)
    {
        $this->setProperty('gradeSet', $gradeSet);
    }

    /**
     * @return float
     */
    public function getMarkMinValue()
    {
        return $this->getProperty('markMinValue');
    }

    /**
     * @param float $markMinValue
     */
    public function setMarkMinValue($markMinValue = null)
    {
        $this->setProperty('markMinValue', $markMinValue);
    }

    /**
     * @return float
     */
    public function getMarkMaxValue()
    {
        return $this->getProperty('markMaxValue');
    }

    /**
     * @param float $markMaxValue
     */
    public function setMarkMaxValue($markMaxValue = null)
    {
        $this->setProperty('markMaxValue', $markMaxValue);
    }

    /**
     * @return string
     */
    public function getScaleDirection()
    {
        return $this->getProperty('scaleDirection');
    }

    /**
     * @param string $scaleDirection
     */
    public function setScaleDirection($scaleDirection = null)
    {
        $this->setProperty('scaleDirection', $scaleDirection);
    }


}
