<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\InHouseExam;

class InHouseExamInstance extends ModelBase
{

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_INSTANCE;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\InHouseExamInstance[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("InHouseExamInstance");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\InHouseExamInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("InHouseExamInstance", $id);
    }

    /**
     * @return InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty("inHouseExam");
    }

    /**
     * @param InHouseExam $inHouseExam
     */
    public function setInHouseExam(InHouseExam $inHouseExam = null)
    {
        $this->setProperty("inHouseExam", $inHouseExam);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedStartDatetime()
    {
        return $this->getProperty("expectedStartDatetime");
    }

    /**
     * @param \DateTime $expectedStartDatetime
     */
    public function setExpectedStartDatetime(\DateTime $expectedStartDatetime = null)
    {
        $this->setProperty("expectedStartDatetime", $expectedStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedEndDatetime()
    {
        return $this->getProperty("expectedEndDatetime");
    }

    /**
     * @param \DateTime $expectedEndDatetime
     */
    public function setExpectedEndDatetime(\DateTime $expectedEndDatetime = null)
    {
        $this->setProperty("expectedEndDatetime", $expectedEndDatetime);
    }


}
