<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class GradeSet extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const GRADE_SET_NAME = 'gradeSetName';

    const SHORT_NAME = 'shortName';

    const GRADE_POINT_SCALE = 'gradePointScale';

    const IS_DISPLAY_GRADE_SET = 'isDisplayGradeSet';

    const SCALE_DIRECTION = 'scaleDirection';

    protected $_resourceType = ResourceType::GRADE_SET;

    /**
     * @param Query $query
     * @return GradeSet[] | Collection
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

        $query->setResourceType(ResourceType::GRADE_SET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return GradeSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GRADE_SET, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getGradeSetName()
    {
        return $this->getProperty('gradeSetName');
    }

    /**
     * @param string $gradeSetName
     */
    public function setGradeSetName($gradeSetName = null)
    {
        $this->setProperty('gradeSetName', $gradeSetName);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty('gradePointScale');
    }

    /**
     * @param GradePointScale $gradePointScale
     */
    public function setGradePointScale(GradePointScale $gradePointScale = null)
    {
        $this->setProperty('gradePointScale', $gradePointScale);
    }

    /**
     * @return bool
     */
    public function getIsDisplayGradeSet()
    {
        return $this->getProperty('isDisplayGradeSet');
    }

    /**
     * @param bool $isDisplayGradeSet
     */
    public function setIsDisplayGradeSet($isDisplayGradeSet = null)
    {
        $this->setProperty('isDisplayGradeSet', $isDisplayGradeSet);
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
