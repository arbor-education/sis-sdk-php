<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\QualificationLearningUnit;
use \Arbor\Model\QualificationAssessable;

class QualificationLearningUnitAssessable extends ModelBase
{

    const QUALIFICATION_LEARNING_UNIT = 'qualificationLearningUnit';

    const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    protected $_resourceType = ResourceType::QUALIFICATION_LEARNING_UNIT_ASSESSABLE;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationLearningUnitAssessable[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("QualificationLearningUnitAssessable");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationLearningUnitAssessable
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::QUALIFICATION_LEARNING_UNIT_ASSESSABLE, $id);
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

    /**
     * @return QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty("qualificationAssessable");
    }

    /**
     * @param QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty("qualificationAssessable", $qualificationAssessable);
    }


}
