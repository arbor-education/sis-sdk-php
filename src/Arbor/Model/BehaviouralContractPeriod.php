<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BehaviouralContractPeriod extends ModelBase
{

    const BEHAVIOURAL_CONTRACT = 'behaviouralContract';

    const BEHAVIOURAL_CONTRACT_GOAL = 'behaviouralContractGoal';

    const SESSION = 'session';

    const GOAL_ACHIEVED = 'goalAchieved';

    const COMMENT = 'comment';

    const PERIOD_START_DATETIME = 'periodStartDatetime';

    const PERIOD_END_DATETIME = 'periodEndDatetime';

    const SIGNED_DATETIME = 'signedDatetime';

    const SIGNED_PERSON = 'signedPerson';

    protected $_resourceType = ResourceType::BEHAVIOURAL_CONTRACT_PERIOD;

    /**
     * @param Query $query
     * @return BehaviouralContractPeriod[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOURAL_CONTRACT_PERIOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviouralContractPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOURAL_CONTRACT_PERIOD, $id);
    }

    /**
     * @return BehaviouralContract
     */
    public function getBehaviouralContract()
    {
        return $this->getProperty('behaviouralContract');
    }

    /**
     * @param BehaviouralContract $behaviouralContract
     */
    public function setBehaviouralContract(BehaviouralContract $behaviouralContract = null)
    {
        $this->setProperty('behaviouralContract', $behaviouralContract);
    }

    /**
     * @return BehaviouralContractGoal
     */
    public function getBehaviouralContractGoal()
    {
        return $this->getProperty('behaviouralContractGoal');
    }

    /**
     * @param BehaviouralContractGoal $behaviouralContractGoal
     */
    public function setBehaviouralContractGoal(BehaviouralContractGoal $behaviouralContractGoal = null)
    {
        $this->setProperty('behaviouralContractGoal', $behaviouralContractGoal);
    }

    /**
     * @return Session
     */
    public function getSession()
    {
        return $this->getProperty('session');
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session = null)
    {
        $this->setProperty('session', $session);
    }

    /**
     * @return bool
     */
    public function getGoalAchieved()
    {
        return $this->getProperty('goalAchieved');
    }

    /**
     * @param bool $goalAchieved
     */
    public function setGoalAchieved($goalAchieved = null)
    {
        $this->setProperty('goalAchieved', $goalAchieved);
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

    /**
     * @return \DateTime
     */
    public function getPeriodStartDatetime()
    {
        return $this->getProperty('periodStartDatetime');
    }

    /**
     * @param \DateTime $periodStartDatetime
     */
    public function setPeriodStartDatetime(\DateTime $periodStartDatetime = null)
    {
        $this->setProperty('periodStartDatetime', $periodStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPeriodEndDatetime()
    {
        return $this->getProperty('periodEndDatetime');
    }

    /**
     * @param \DateTime $periodEndDatetime
     */
    public function setPeriodEndDatetime(\DateTime $periodEndDatetime = null)
    {
        $this->setProperty('periodEndDatetime', $periodEndDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSignedDatetime()
    {
        return $this->getProperty('signedDatetime');
    }

    /**
     * @param \DateTime $signedDatetime
     */
    public function setSignedDatetime(\DateTime $signedDatetime = null)
    {
        $this->setProperty('signedDatetime', $signedDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getSignedPerson()
    {
        return $this->getProperty('signedPerson');
    }

    /**
     * @param ModelBase $signedPerson
     */
    public function setSignedPerson(ModelBase $signedPerson = null)
    {
        $this->setProperty('signedPerson', $signedPerson);
    }


}
