<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ObservationTypeGradeSet extends ModelBase
{
    public const OBSERVATION_TYPE = 'observationType';

    public const OBSERVATION_GRADE_SET = 'observationGradeSet';

    protected $_resourceType = ResourceType::OBSERVATION_TYPE_GRADE_SET;

    /**
     * @param Query $query
     * @return ObservationTypeGradeSet[] | Collection
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

        $query->setResourceType(ResourceType::OBSERVATION_TYPE_GRADE_SET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ObservationTypeGradeSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OBSERVATION_TYPE_GRADE_SET, $id);
    }

    /**
     * @return \Arbor\Model\ObservationType
     */
    public function getObservationType()
    {
        return $this->getProperty('observationType');
    }

    /**
     * @param \Arbor\Model\ObservationType $observationType
     */
    public function setObservationType(\Arbor\Model\ObservationType $observationType = null)
    {
        $this->setProperty('observationType', $observationType);
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
}
