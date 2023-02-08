<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ObservationJudgement extends ModelBase
{

    const OBSERVATION = 'observation';

    const OBSERVATION_STRAND = 'observationStrand';

    const OBSERVATION_GRADE = 'observationGrade';

    const COMMENT = 'comment';

    protected $_resourceType = ResourceType::OBSERVATION_JUDGEMENT;

    /**
     * @param Query $query
     * @return ObservationJudgement[] | Collection
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

        $query->setResourceType(ResourceType::OBSERVATION_JUDGEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ObservationJudgement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OBSERVATION_JUDGEMENT, $id);
    }

    /**
     * @return Observation
     */
    public function getObservation()
    {
        return $this->getProperty('observation');
    }

    /**
     * @param Observation $observation
     */
    public function setObservation(Observation $observation = null)
    {
        $this->setProperty('observation', $observation);
    }

    /**
     * @return ObservationStrand
     */
    public function getObservationStrand()
    {
        return $this->getProperty('observationStrand');
    }

    /**
     * @param ObservationStrand $observationStrand
     */
    public function setObservationStrand(ObservationStrand $observationStrand = null)
    {
        $this->setProperty('observationStrand', $observationStrand);
    }

    /**
     * @return ObservationGrade
     */
    public function getObservationGrade()
    {
        return $this->getProperty('observationGrade');
    }

    /**
     * @param ObservationGrade $observationGrade
     */
    public function setObservationGrade(ObservationGrade $observationGrade = null)
    {
        $this->setProperty('observationGrade', $observationGrade);
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->getProperty('comment');
    }

    /**
     * @param string $comment
     */
    public function setComment($comment = null)
    {
        $this->setProperty('comment', $comment);
    }


}
