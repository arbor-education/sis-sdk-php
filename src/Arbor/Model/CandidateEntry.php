<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CandidateEntry extends ModelBase
{
    public const CANDIDATE = 'candidate';

    public const QUALIFICATION_LEARNING_UNIT = 'qualificationLearningUnit';

    public const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    public const ENTRY_STATUS = 'entryStatus';

    public const WITHDRAWAL_STATUS = 'withdrawalStatus';

    protected $_resourceType = ResourceType::CANDIDATE_ENTRY;

    /**
     * @param Query $query
     * @return CandidateEntry[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE_ENTRY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateEntry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_ENTRY, $id);
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
     * @return \Arbor\Model\QualificationLearningUnit
     */
    public function getQualificationLearningUnit()
    {
        return $this->getProperty('qualificationLearningUnit');
    }

    /**
     * @param \Arbor\Model\QualificationLearningUnit $qualificationLearningUnit
     */
    public function setQualificationLearningUnit(\Arbor\Model\QualificationLearningUnit $qualificationLearningUnit = null)
    {
        $this->setProperty('qualificationLearningUnit', $qualificationLearningUnit);
    }

    /**
     * @return \Arbor\Model\QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty('qualificationAvailabilityInstance');
    }

    /**
     * @param \Arbor\Model\QualificationAvailabilityInstance
     * $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(\Arbor\Model\QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty('qualificationAvailabilityInstance', $qualificationAvailabilityInstance);
    }

    /**
     * @return string
     */
    public function getEntryStatus()
    {
        return $this->getProperty('entryStatus');
    }

    /**
     * @param string $entryStatus
     */
    public function setEntryStatus(string $entryStatus = null)
    {
        $this->setProperty('entryStatus', $entryStatus);
    }

    /**
     * @return string
     */
    public function getWithdrawalStatus()
    {
        return $this->getProperty('withdrawalStatus');
    }

    /**
     * @param string $withdrawalStatus
     */
    public function setWithdrawalStatus(string $withdrawalStatus = null)
    {
        $this->setProperty('withdrawalStatus', $withdrawalStatus);
    }
}
