<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SenEventOutcome extends ModelBase
{
    public const SEN_EVENT = 'senEvent';

    public const SEN_EVENT_OUTCOME_TYPE = 'senEventOutcomeType';

    public const COMMENTS = 'comments';

    protected $_resourceType = ResourceType::SEN_EVENT_OUTCOME;

    /**
     * @param Query $query
     * @return SenEventOutcome[] | Collection
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
     * @return \Arbor\Model\SenEvent
     */
    public function getSenEvent()
    {
        return $this->getProperty('senEvent');
    }

    /**
     * @param \Arbor\Model\SenEvent $senEvent
     */
    public function setSenEvent(\Arbor\Model\SenEvent $senEvent = null)
    {
        $this->setProperty('senEvent', $senEvent);
    }

    /**
     * @return \Arbor\Model\SenEventOutcomeType
     */
    public function getSenEventOutcomeType()
    {
        return $this->getProperty('senEventOutcomeType');
    }

    /**
     * @param \Arbor\Model\SenEventOutcomeType $senEventOutcomeType
     */
    public function setSenEventOutcomeType(\Arbor\Model\SenEventOutcomeType $senEventOutcomeType = null)
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
    public function setComments(string $comments = null)
    {
        $this->setProperty('comments', $comments);
    }
}
