<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CandidateRegistrationAudit extends ModelBase
{
    public const CANDIDATE_REGISTRATION = 'candidateRegistration';

    public const TYPE = 'type';

    public const ACTION_DATETIME = 'actionDatetime';

    protected $_resourceType = ResourceType::CANDIDATE_REGISTRATION_AUDIT;

    /**
     * @param Query $query
     * @return CandidateRegistrationAudit[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE_REGISTRATION_AUDIT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateRegistrationAudit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_REGISTRATION_AUDIT, $id);
    }

    /**
     * @return \Arbor\Model\CandidateRegistration
     */
    public function getCandidateRegistration()
    {
        return $this->getProperty('candidateRegistration');
    }

    /**
     * @param \Arbor\Model\CandidateRegistration $candidateRegistration
     */
    public function setCandidateRegistration(\Arbor\Model\CandidateRegistration $candidateRegistration = null)
    {
        $this->setProperty('candidateRegistration', $candidateRegistration);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return \DateTime
     */
    public function getActionDatetime()
    {
        return $this->getProperty('actionDatetime');
    }

    /**
     * @param \DateTime $actionDatetime
     */
    public function setActionDatetime(\DateTime $actionDatetime = null)
    {
        $this->setProperty('actionDatetime', $actionDatetime);
    }
}
