<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SenEventOutcome extends ModelBase
{
    const SEN_EVENT = 'senEvent';

    const SEN_EVENT_OUTCOME_TYPE = 'senEventOutcomeType';

    const COMMENTS = 'comments';

    protected $_resourceType = ResourceType::SEN_EVENT_OUTCOME;

    /**
     * @param Query $query
     * @return SenEventOutcome[] | Collection
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

        $query->setResourceType(ResourceType::SEN_EVENT_OUTCOME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenEventOutcome
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SEN_EVENT_OUTCOME, $id);
    }

    /**
     * @return SenEvent
     */
    public function getSenEvent()
    {
        return $this->getProperty('senEvent');
    }

    /**
     * @param SenEvent $senEvent
     */
    public function setSenEvent(SenEvent $senEvent = null)
    {
        $this->setProperty('senEvent', $senEvent);
    }

    /**
     * @return SenEventOutcomeType
     */
    public function getSenEventOutcomeType()
    {
        return $this->getProperty('senEventOutcomeType');
    }

    /**
     * @param SenEventOutcomeType $senEventOutcomeType
     */
    public function setSenEventOutcomeType(SenEventOutcomeType $senEventOutcomeType = null)
    {
        $this->setProperty('senEventOutcomeType', $senEventOutcomeType);
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->getProperty('comments');
    }

    /**
     * @param string $comments
     */
    public function setComments($comments = null)
    {
        $this->setProperty('comments', $comments);
    }
}
