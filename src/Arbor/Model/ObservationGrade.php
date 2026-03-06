<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ObservationGrade extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const OBSERVATION_GRADE_SET = 'observationGradeSet';

    public const SHORT_NAME = 'shortName';

    public const NAME = 'name';

    public const OBSERVATION_GRADE_VALUE = 'observationGradeValue';

    public const LOWER_VALUE = 'lowerValue';

    public const UPPER_VALUE = 'upperValue';

    public const STATISTICAL_VALUE = 'statisticalValue';

    public const GRADE_ORDER = 'gradeOrder';

    protected $_resourceType = ResourceType::OBSERVATION_GRADE;

    /**
     * @param Query $query
     * @return ObservationGrade[] | Collection
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

        $query->setResourceType(ResourceType::OBSERVATION_GRADE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ObservationGrade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OBSERVATION_GRADE, $id);
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
     * @return \Arbor\Model\ObservationGradeSet
     */
    public function getObservationGradeSet()
    {
        return $this->getProperty('observationGradeSet');
    }

    /**
     * @param \Arbor\Model\ObservationGradeSet $observationGradeSet
     */
    public function setObservationGradeSet(\Arbor\Model\ObservationGradeSet $observationGradeSet = null)
    {
        $this->setProperty('observationGradeSet', $observationGradeSet);
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
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return float
     */
    public function getObservationGradeValue()
    {
        return $this->getProperty('observationGradeValue');
    }

    /**
     * @param float $observationGradeValue
     */
    public function setObservationGradeValue(float $observationGradeValue = null)
    {
        $this->setProperty('observationGradeValue', $observationGradeValue);
    }

    /**
     * @return float
     */
    public function getLowerValue()
    {
        return $this->getProperty('lowerValue');
    }

    /**
     * @param float $lowerValue
     */
    public function setLowerValue(float $lowerValue = null)
    {
        $this->setProperty('lowerValue', $lowerValue);
    }

    /**
     * @return float
     */
    public function getUpperValue()
    {
        return $this->getProperty('upperValue');
    }

    /**
     * @param float $upperValue
     */
    public function setUpperValue(float $upperValue = null)
    {
        $this->setProperty('upperValue', $upperValue);
    }

    /**
     * @return float
     */
    public function getStatisticalValue()
    {
        return $this->getProperty('statisticalValue');
    }

    /**
     * @param float $statisticalValue
     */
    public function setStatisticalValue(float $statisticalValue = null)
    {
        $this->setProperty('statisticalValue', $statisticalValue);
    }

    /**
     * @return int
     */
    public function getGradeOrder()
    {
        return $this->getProperty('gradeOrder');
    }

    /**
     * @param int $gradeOrder
     */
    public function setGradeOrder(int $gradeOrder = null)
    {
        $this->setProperty('gradeOrder', $gradeOrder);
    }
}
