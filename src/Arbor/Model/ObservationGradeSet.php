<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ObservationGradeSet extends ModelBase
{

    const OBSERVATION_TYPE = 'observationType';

    const NAME = 'name';

    const SCALE_DIRECTION = 'scaleDirection';

    protected $_resourceType = ResourceType::OBSERVATION_GRADE_SET;

    /**
     * @param Query $query
     * @return ObservationGradeSet[] | Collection
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

        $query->setResourceType(ResourceType::OBSERVATION_GRADE_SET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ObservationGradeSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OBSERVATION_GRADE_SET, $id);
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
