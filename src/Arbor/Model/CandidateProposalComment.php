<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CandidateProposalComment extends ModelBase
{
    const CANDIDATE_PROPOSAL = 'candidateProposal';

    const AUTHOR_STAFF = 'authorStaff';

    const COMMENT_DATETIME = 'commentDatetime';

    const COMMENT = 'comment';

    protected $_resourceType = ResourceType::CANDIDATE_PROPOSAL_COMMENT;

    /**
     * @param Query $query
     * @return CandidateProposalComment[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE_PROPOSAL_COMMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateProposalComment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_PROPOSAL_COMMENT, $id);
    }

    /**
     * @return CandidateProposal
     */
    public function getCandidateProposal()
    {
        return $this->getProperty('candidateProposal');
    }

    /**
     * @param CandidateProposal $candidateProposal
     */
    public function setCandidateProposal(CandidateProposal $candidateProposal = null)
    {
        $this->setProperty('candidateProposal', $candidateProposal);
    }

    /**
     * @return Staff
     */
    public function getAuthorStaff()
    {
        return $this->getProperty('authorStaff');
    }

    /**
     * @param Staff $authorStaff
     */
    public function setAuthorStaff(Staff $authorStaff = null)
    {
        $this->setProperty('authorStaff', $authorStaff);
    }

    /**
     * @return \DateTime
     */
    public function getCommentDatetime()
    {
        return $this->getProperty('commentDatetime');
    }

    /**
     * @param \DateTime $commentDatetime
     */
    public function setCommentDatetime(\DateTime $commentDatetime = null)
    {
        $this->setProperty('commentDatetime', $commentDatetime);
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
