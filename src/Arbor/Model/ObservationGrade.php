<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ObservationGrade extends ModelBase
{

    const OBSERVATION_GRADE_SET = 'observationGradeSet';

    const SHORT_NAME = 'shortName';

    const NAME = 'name';

    const OBSERVATION_GRADE_VALUE = 'observationGradeValue';

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


}
