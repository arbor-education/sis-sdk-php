<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CandidateProposal extends ModelBase
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
    public static function query(\Arbor\Query\Query $query = null)
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
     * @return \Arbor\Model\Staff
     */
    public function getSuggestedByStaff()
    {
        return $this->getProperty('suggestedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $suggestedByStaff
     */
    public function setSuggestedByStaff(\Arbor\Model\Staff $suggestedByStaff = null)
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
