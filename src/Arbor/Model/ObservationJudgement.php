<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ObservationJudgement extends ModelBase
{
    public const OBSERVATION = 'observation';

    public const OBSERVATION_STRAND = 'observationStrand';

    public const OBSERVATION_GRADE = 'observationGrade';

    public const COMMENT = 'comment';

    protected $_resourceType = ResourceType::OBSERVATION_JUDGEMENT;

    /**
     * @param Query $query
     * @return ObservationJudgement[] | Collection
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
     * @return \Arbor\Model\Observation
     */
    public function getObservation()
    {
        return $this->getProperty('observation');
    }

    /**
     * @param \Arbor\Model\Observation $observation
     */
    public function setObservation(\Arbor\Model\Observation $observation = null)
    {
        $this->setProperty('observation', $observation);
    }

    /**
     * @return \Arbor\Model\ObservationStrand
     */
    public function getObservationStrand()
    {
        return $this->getProperty('observationStrand');
    }

    /**
     * @param \Arbor\Model\ObservationStrand $observationStrand
     */
    public function setObservationStrand(\Arbor\Model\ObservationStrand $observationStrand = null)
    {
        $this->setProperty('observationStrand', $observationStrand);
    }

    /**
     * @return \Arbor\Model\ObservationGrade
     */
    public function getObservationGrade()
    {
        return $this->getProperty('observationGrade');
    }

    /**
     * @param \Arbor\Model\ObservationGrade $observationGrade
     */
    public function setObservationGrade(\Arbor\Model\ObservationGrade $observationGrade = null)
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
    public function setComment(string $comment = null)
    {
        $this->setProperty('comment', $comment);
    }
}
