<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TargetJudgementRule extends ModelBase
{
    public const ASSESSMENT_ASPECT = 'assessmentAspect';

    public const TARGET_JUDGEMENT = 'targetJudgement';

    public const AMOUNT = 'amount';

    public const AMOUNT_UNIT = 'amountUnit';

    protected $_resourceType = ResourceType::TARGET_JUDGEMENT_RULE;

    /**
     * @param Query $query
     * @return TargetJudgementRule[] | Collection
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

        $query->setResourceType(ResourceType::TARGET_JUDGEMENT_RULE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TargetJudgementRule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TARGET_JUDGEMENT_RULE, $id);
    }

    /**
     * @return \Arbor\Model\AssessmentAspect
     */
    public function getAssessmentAspect()
    {
        return $this->getProperty('assessmentAspect');
    }

    /**
     * @param \Arbor\Model\AssessmentAspect $assessmentAspect
     */
    public function setAssessmentAspect(\Arbor\Model\AssessmentAspect $assessmentAspect = null)
    {
        $this->setProperty('assessmentAspect', $assessmentAspect);
    }

    /**
     * @return \Arbor\Model\TargetJudgement
     */
    public function getTargetJudgement()
    {
        return $this->getProperty('targetJudgement');
    }

    /**
     * @param \Arbor\Model\TargetJudgement $targetJudgement
     */
    public function setTargetJudgement(\Arbor\Model\TargetJudgement $targetJudgement = null)
    {
        $this->setProperty('targetJudgement', $targetJudgement);
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->getProperty('amount');
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount = null)
    {
        $this->setProperty('amount', $amount);
    }

    /**
     * @return string
     */
    public function getAmountUnit()
    {
        return $this->getProperty('amountUnit');
    }

    /**
     * @param string $amountUnit
     */
    public function setAmountUnit(string $amountUnit = null)
    {
        $this->setProperty('amountUnit', $amountUnit);
    }
}
