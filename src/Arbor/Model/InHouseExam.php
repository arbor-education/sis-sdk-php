<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\QualificationAssessable;
use \Arbor\Model\QualificationLearningUnit;

class InHouseExam extends ModelBase
{

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\InHouseExam[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("InHouseExam");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\InHouseExam
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("InHouseExam", $id);
    }

    /**
     * @return QualificationAssessable
     */
    public function getMockQualificationAssessable()
    {
        return $this->getProperty("mockQualificationAssessable");
    }

    /**
     * @param QualificationAssessable $mockQualificationAssessable
     */
    public function setMockQualificationAssessable(QualificationAssessable $mockQualificationAssessable = null)
    {
        $this->setProperty("mockQualificationAssessable", $mockQualificationAssessable);
    }

    /**
     * @return QualificationLearningUnit
     */
    public function getMockQualificationLearningUnit()
    {
        return $this->getProperty("mockQualificationLearningUnit");
    }

    /**
     * @param QualificationLearningUnit $mockQualificationLearningUnit
     */
    public function setMockQualificationLearningUnit(QualificationLearningUnit $mockQualificationLearningUnit = null)
    {
        $this->setProperty("mockQualificationLearningUnit", $mockQualificationLearningUnit);
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->getProperty("duration");
    }

    /**
     * @param string $duration
     */
    public function setDuration($duration = null)
    {
        $this->setProperty("duration", $duration);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("name");
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty("name", $name);
    }


}
