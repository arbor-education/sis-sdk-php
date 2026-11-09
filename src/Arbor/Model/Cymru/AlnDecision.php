<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class AlnDecision extends ModelBase
{
    public const STUDENT = 'student';

    public const DECISION_OUTCOME = 'decisionOutcome';

    public const DECISION_BODY = 'decisionBody';

    public const DECISION_DATE = 'decisionDate';

    public const SUPPORTING_INFORMATION = 'supportingInformation';

    protected $_resourceType = ResourceType::CYMRU_ALN_DECISION;

    /**
     * @param Query $query
     * @return AlnDecision[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_ALN_DECISION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AlnDecision
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_ALN_DECISION, $id);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return string
     */
    public function getDecisionOutcome()
    {
        return $this->getProperty('decisionOutcome');
    }

    /**
     * @param string $decisionOutcome
     */
    public function setDecisionOutcome(string $decisionOutcome = null)
    {
        $this->setProperty('decisionOutcome', $decisionOutcome);
    }

    /**
     * @return string
     */
    public function getDecisionBody()
    {
        return $this->getProperty('decisionBody');
    }

    /**
     * @param string $decisionBody
     */
    public function setDecisionBody(string $decisionBody = null)
    {
        $this->setProperty('decisionBody', $decisionBody);
    }

    /**
     * @return \DateTime
     */
    public function getDecisionDate()
    {
        return $this->getProperty('decisionDate');
    }

    /**
     * @param \DateTime $decisionDate
     */
    public function setDecisionDate(\DateTime $decisionDate = null)
    {
        $this->setProperty('decisionDate', $decisionDate);
    }

    /**
     * @return string
     */
    public function getSupportingInformation()
    {
        return $this->getProperty('supportingInformation');
    }

    /**
     * @param string $supportingInformation
     */
    public function setSupportingInformation(string $supportingInformation = null)
    {
        $this->setProperty('supportingInformation', $supportingInformation);
    }
}
