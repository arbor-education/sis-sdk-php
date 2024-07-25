<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CandidateDisappliedAccessArrangement extends ModelBase
{
    public const CANDIDATE = 'candidate';

    public const ACCESS_ARRANGEMENT = 'accessArrangement';

    public const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    protected $_resourceType = ResourceType::CANDIDATE_DISAPPLIED_ACCESS_ARRANGEMENT;

    /**
     * @param Query $query
     * @return CandidateDisappliedAccessArrangement[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE_DISAPPLIED_ACCESS_ARRANGEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateDisappliedAccessArrangement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_DISAPPLIED_ACCESS_ARRANGEMENT, $id);
    }

    /**
     * @return \Arbor\Model\Candidate
     */
    public function getCandidate()
    {
        return $this->getProperty('candidate');
    }

    /**
     * @param \Arbor\Model\Candidate $candidate
     */
    public function setCandidate(\Arbor\Model\Candidate $candidate = null)
    {
        $this->setProperty('candidate', $candidate);
    }

    /**
     * @return \Arbor\Model\AccessArrangement
     */
    public function getAccessArrangement()
    {
        return $this->getProperty('accessArrangement');
    }

    /**
     * @param \Arbor\Model\AccessArrangement $accessArrangement
     */
    public function setAccessArrangement(\Arbor\Model\AccessArrangement $accessArrangement = null)
    {
        $this->setProperty('accessArrangement', $accessArrangement);
    }

    /**
     * @return \Arbor\Model\QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty('qualificationAssessable');
    }

    /**
     * @param \Arbor\Model\QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(\Arbor\Model\QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty('qualificationAssessable', $qualificationAssessable);
    }
}
