<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CandidateProposalComment extends ModelBase
{

    public const CANDIDATE_PROPOSAL = 'candidateProposal';

    public const AUTHOR_STAFF = 'authorStaff';

    public const COMMENT_DATETIME = 'commentDatetime';

    public const COMMENT = 'comment';

    protected $_resourceType = ResourceType::CANDIDATE_PROPOSAL_COMMENT;

    /**
     * @param Query $query
     * @return CandidateProposalComment[] | Collection
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
     * @return \Arbor\Model\CandidateProposal
     */
    public function getCandidateProposal()
    {
        return $this->getProperty('candidateProposal');
    }

    /**
     * @param \Arbor\Model\CandidateProposal $candidateProposal
     */
    public function setCandidateProposal(\Arbor\Model\CandidateProposal $candidateProposal = null)
    {
        $this->setProperty('candidateProposal', $candidateProposal);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getAuthorStaff()
    {
        return $this->getProperty('authorStaff');
    }

    /**
     * @param \Arbor\Model\Staff $authorStaff
     */
    public function setAuthorStaff(\Arbor\Model\Staff $authorStaff = null)
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
    public function setComment(string $comment = null)
    {
        $this->setProperty('comment', $comment);
    }

}
