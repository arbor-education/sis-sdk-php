<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ObservationTypeGradeSet extends ModelBase
{

    const OBSERVATION_TYPE = 'observationType';

    const OBSERVATION_GRADE_SET = 'observationGradeSet';

    protected $_resourceType = ResourceType::OBSERVATION_TYPE_GRADE_SET;

    /**
     * @param Query $query
     * @return ObservationTypeGradeSet[] | Collection
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
     * @return ObservationType
     */
    public function getObservationType()
    {
        return $this->getProperty('observationType');
    }

    /**
     * @param ObservationType $observationType
     */
    public function setObservationType(ObservationType $observationType = null)
    {
        $this->setProperty('observationType', $observationType);
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


}
