<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class GradeSet extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const GRADE_SET_NAME = 'gradeSetName';

    public const SHORT_NAME = 'shortName';

    public const GRADE_POINT_SCALE = 'gradePointScale';

    public const IS_DISPLAY_GRADE_SET = 'isDisplayGradeSet';

    public const SCALE_DIRECTION = 'scaleDirection';

    protected $_resourceType = ResourceType::GRADE_SET;

    /**
     * @param Query $query
     * @return GradeSet[] | Collection
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
    public function setCode(string $code = null)
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
    public function setActive(bool $active = null)
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
    public function setDataOrder(int $dataOrder = null)
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
    public function setGradeSetName(string $gradeSetName = null)
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
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return \Arbor\Model\GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty('gradePointScale');
    }

    /**
     * @param \Arbor\Model\GradePointScale $gradePointScale
     */
    public function setGradePointScale(\Arbor\Model\GradePointScale $gradePointScale = null)
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
    public function setIsDisplayGradeSet(bool $isDisplayGradeSet = null)
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
    public function setScaleDirection(string $scaleDirection = null)
    {
        $this->setProperty('scaleDirection', $scaleDirection);
    }
}
