<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ObservationGrade extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const OBSERVATION_GRADE_SET = 'observationGradeSet';

    const SHORT_NAME = 'shortName';

    const NAME = 'name';

    const OBSERVATION_GRADE_VALUE = 'observationGradeValue';

    const LOWER_VALUE = 'lowerValue';

    const UPPER_VALUE = 'upperValue';

    const STATISTICAL_VALUE = 'statisticalValue';

    const GRADE_ORDER = 'gradeOrder';

    protected $_resourceType = ResourceType::OBSERVATION_GRADE;

    /**
     * @param Query $query
     * @return ObservationGrade[] | Collection
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
     * @return ObservationGradeSet
     */
    public function getObservationGradeSet()
    {
        return $this->getProperty('observationGradeSet');
    }

    /**
     * @param ObservationGradeSet $observationGradeSet
     */
    public function setObservationGradeSet(ObservationGradeSet $observationGradeSet = null)
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
    public function setShortName($shortName = null)
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
    public function setName($name = null)
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
    public function setObservationGradeValue($observationGradeValue = null)
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
    public function setLowerValue($lowerValue = null)
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
    public function setUpperValue($upperValue = null)
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
    public function setStatisticalValue($statisticalValue = null)
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
    public function setGradeOrder($gradeOrder = null)
    {
        $this->setProperty('gradeOrder', $gradeOrder);
    }


}
