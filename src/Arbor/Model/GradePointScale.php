<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class GradePointScale extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const GRADE_POINT_SCALE_NAME = 'gradePointScaleName';

    public const SHORT_NAME = 'shortName';

    public const POINT_NAME = 'pointName';

    public const MINIMUM_VALUE = 'minimumValue';

    public const MAXIMUM_VALUE = 'maximumValue';

    public const SCALE_INCREMENT = 'scaleIncrement';

    public const DEFAULT_GRADE_SET = 'defaultGradeSet';

    protected $_resourceType = ResourceType::GRADE_POINT_SCALE;

    /**
     * @param Query $query
     * @return GradePointScale[] | Collection
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

        $query->setResourceType(ResourceType::GRADE_POINT_SCALE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return GradePointScale
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GRADE_POINT_SCALE, $id);
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
    public function getGradePointScaleName()
    {
        return $this->getProperty('gradePointScaleName');
    }

    /**
     * @param string $gradePointScaleName
     */
    public function setGradePointScaleName(string $gradePointScaleName = null)
    {
        $this->setProperty('gradePointScaleName', $gradePointScaleName);
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
     * @return string
     */
    public function getPointName()
    {
        return $this->getProperty('pointName');
    }

    /**
     * @param string $pointName
     */
    public function setPointName(string $pointName = null)
    {
        $this->setProperty('pointName', $pointName);
    }

    /**
     * @return int
     */
    public function getMinimumValue()
    {
        return $this->getProperty('minimumValue');
    }

    /**
     * @param int $minimumValue
     */
    public function setMinimumValue(int $minimumValue = null)
    {
        $this->setProperty('minimumValue', $minimumValue);
    }

    /**
     * @return int
     */
    public function getMaximumValue()
    {
        return $this->getProperty('maximumValue');
    }

    /**
     * @param int $maximumValue
     */
    public function setMaximumValue(int $maximumValue = null)
    {
        $this->setProperty('maximumValue', $maximumValue);
    }

    /**
     * @return float
     */
    public function getScaleIncrement()
    {
        return $this->getProperty('scaleIncrement');
    }

    /**
     * @param float $scaleIncrement
     */
    public function setScaleIncrement(float $scaleIncrement = null)
    {
        $this->setProperty('scaleIncrement', $scaleIncrement);
    }

    /**
     * @return \Arbor\Model\GradeSet
     */
    public function getDefaultGradeSet()
    {
        return $this->getProperty('defaultGradeSet');
    }

    /**
     * @param \Arbor\Model\GradeSet $defaultGradeSet
     */
    public function setDefaultGradeSet(\Arbor\Model\GradeSet $defaultGradeSet = null)
    {
        $this->setProperty('defaultGradeSet', $defaultGradeSet);
    }
}
