<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentMetricSet extends ModelBase
{
    public const NAME = 'name';

    public const IS_KEY_METRIC = 'isKeyMetric';

    public const RULE_ITEM_TYPE = 'ruleItemType';

    public const UPWARD_TREND = 'upwardTrend';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_SET;

    /**
     * @param Query $query
     * @return AssessmentMetricSet[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_METRIC_SET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMetricSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_METRIC_SET, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return bool
     */
    public function getIsKeyMetric()
    {
        return $this->getProperty('isKeyMetric');
    }

    /**
     * @param bool $isKeyMetric
     */
    public function setIsKeyMetric(bool $isKeyMetric = null)
    {
        $this->setProperty('isKeyMetric', $isKeyMetric);
    }

    /**
     * @return string
     */
    public function getRuleItemType()
    {
        return $this->getProperty('ruleItemType');
    }

    /**
     * @param string $ruleItemType
     */
    public function setRuleItemType(string $ruleItemType = null)
    {
        $this->setProperty('ruleItemType', $ruleItemType);
    }

    /**
     * @return string
     */
    public function getUpwardTrend()
    {
        return $this->getProperty('upwardTrend');
    }

    /**
     * @param string $upwardTrend
     */
    public function setUpwardTrend(string $upwardTrend = null)
    {
        $this->setProperty('upwardTrend', $upwardTrend);
    }
}
