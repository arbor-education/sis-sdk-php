<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CandidateProposal extends \ModelBase
{
    public const CANDIDATE = 'candidate';

    public const SUGGESTED_BY_STAFF = 'suggestedByStaff';

    public const SUGGESTED_DATETIME = 'suggestedDatetime';

    protected $_resourceType = ResourceType::CANDIDATE_PROPOSAL;

    /**
     * @param Query $query
     * @return CandidateProposal[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::CANDIDATE_PROPOSAL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateProposal
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_PROPOSAL, $id);
    }

    /**
     * @return Candidate
     */
    public function getCandidate()
    {
        return $this->getProperty('candidate');
    }

    /**
     * @param Candidate $candidate
     */
    public function setCandidate(\Candidate $candidate = null)
    {
        $this->setProperty('candidate', $candidate);
    }

    /**
     * @return Staff
     */
    public function getSuggestedByStaff()
    {
        return $this->getProperty('suggestedByStaff');
    }

    /**
     * @param Staff $suggestedByStaff
     */
    public function setSuggestedByStaff(\Staff $suggestedByStaff = null)
    {
        $this->setProperty('suggestedByStaff', $suggestedByStaff);
    }

    /**
     * @return \DateTime
     */
    public function getSuggestedDatetime()
    {
        return $this->getProperty('suggestedDatetime');
    }

    /**
     * @param \DateTime $suggestedDatetime
     */
    public function setSuggestedDatetime(\DateTime $suggestedDatetime = null)
    {
        $this->setProperty('suggestedDatetime', $suggestedDatetime);
    }
}
