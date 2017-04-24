<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\QualificationAward;
use \Arbor\Model\QualificationLearningUnit;

class QualificationAwardLearningUnit extends ModelBase
{
    const QUALIFICATION_AWARD = 'qualificationAward';

    const QUALIFICATION_LEARNING_UNIT = 'qualificationLearningUnit';

    protected $_resourceType = ResourceType::QUALIFICATION_AWARD_LEARNING_UNIT;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationAwardLearningUnit[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("QualificationAwardLearningUnit");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationAwardLearningUnit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::QUALIFICATION_AWARD_LEARNING_UNIT, $id);
    }

    /**
     * @return QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty("qualificationAward");
    }

    /**
     * @param QualificationAward $qualificationAward
     */
    public function setQualificationAward(QualificationAward $qualificationAward = null)
    {
        $this->setProperty("qualificationAward", $qualificationAward);
    }

    /**
     * @return QualificationLearningUnit
     */
    public function getQualificationLearningUnit()
    {
        return $this->getProperty("qualificationLearningUnit");
    }

    /**
     * @param QualificationLearningUnit $qualificationLearningUnit
     */
    public function setQualificationLearningUnit(QualificationLearningUnit $qualificationLearningUnit = null)
    {
        $this->setProperty("qualificationLearningUnit", $qualificationLearningUnit);
    }
}
