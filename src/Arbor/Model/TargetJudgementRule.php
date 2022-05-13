<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TargetJudgementRule extends ModelBase
{
    const ASSESSMENT_ASPECT = 'assessmentAspect';

    const TARGET_JUDGEMENT = 'targetJudgement';

    const AMOUNT = 'amount';

    const AMOUNT_UNIT = 'amountUnit';

    protected $_resourceType = ResourceType::TARGET_JUDGEMENT_RULE;

    /**
     * @param Query $query
     * @return TargetJudgementRule[] | Collection
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
     * @return AssessmentAspect
     */
    public function getAssessmentAspect()
    {
        return $this->getProperty('assessmentAspect');
    }

    /**
     * @param AssessmentAspect $assessmentAspect
     */
    public function setAssessmentAspect(AssessmentAspect $assessmentAspect = null)
    {
        $this->setProperty('assessmentAspect', $assessmentAspect);
    }

    /**
     * @return TargetJudgement
     */
    public function getTargetJudgement()
    {
        return $this->getProperty('targetJudgement');
    }

    /**
     * @param TargetJudgement $targetJudgement
     */
    public function setTargetJudgement(TargetJudgement $targetJudgement = null)
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
    public function setAmount($amount = null)
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
    public function setAmountUnit($amountUnit = null)
    {
        $this->setProperty('amountUnit', $amountUnit);
    }

}
