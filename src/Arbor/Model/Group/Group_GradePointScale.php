<?php
namespace Arbor\Model\Group;

use Arbor\Resource\Group\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Group_GradePointScale extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const GRADE_POINT_SCALE_NAME = 'gradePointScaleName';

    const SHORT_NAME = 'shortName';

    const POINT_NAME = 'pointName';

    const MINIMUM_VALUE = 'minimumValue';

    const MAXIMUM_VALUE = 'maximumValue';

    const SCALE_INCREMENT = 'scaleIncrement';

    const DEFAULT_GRADE_SET = 'defaultGradeSet';

    protected $_resourceType = ResourceType::GROUP_GRADE_POINT_SCALE;

    /**
     * @param Query $query
     * @return Group_GradePointScale[] | Collection
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

        $query->setResourceType(ResourceType::GROUP_GRADE_POINT_SCALE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Group_GradePointScale
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GROUP_GRADE_POINT_SCALE, $id);
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
    public function getGradePointScaleName()
    {
        return $this->getProperty('gradePointScaleName');
    }

    /**
     * @param string $gradePointScaleName
     */
    public function setGradePointScaleName($gradePointScaleName = null)
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
    public function setShortName($shortName = null)
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
    public function setPointName($pointName = null)
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
    public function setMinimumValue($minimumValue = null)
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
    public function setMaximumValue($maximumValue = null)
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
    public function setScaleIncrement($scaleIncrement = null)
    {
        $this->setProperty('scaleIncrement', $scaleIncrement);
    }

    /**
     * @return GradeSet
     */
    public function getDefaultGradeSet()
    {
        return $this->getProperty('defaultGradeSet');
    }

    /**
     * @param GradeSet $defaultGradeSet
     */
    public function setDefaultGradeSet(GradeSet $defaultGradeSet = null)
    {
        $this->setProperty('defaultGradeSet', $defaultGradeSet);
    }


}
