<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InHouseExamInstance extends ModelBase
{
    public const IN_HOUSE_EXAM = 'inHouseExam';

    public const EXPECTED_START_DATETIME = 'expectedStartDatetime';

    public const EXPECTED_END_DATETIME = 'expectedEndDatetime';

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_INSTANCE;

    /**
     * @param Query $query
     * @return InHouseExamInstance[] | Collection
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

        $query->setResourceType(ResourceType::IN_HOUSE_EXAM_INSTANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InHouseExamInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_HOUSE_EXAM_INSTANCE, $id);
    }

    /**
     * @return \Arbor\Model\InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty('inHouseExam');
    }

    /**
     * @param \Arbor\Model\InHouseExam $inHouseExam
     */
    public function setInHouseExam(\Arbor\Model\InHouseExam $inHouseExam = null)
    {
        $this->setProperty('inHouseExam', $inHouseExam);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedStartDatetime()
    {
        return $this->getProperty('expectedStartDatetime');
    }

    /**
     * @param \DateTime $expectedStartDatetime
     */
    public function setExpectedStartDatetime(\DateTime $expectedStartDatetime = null)
    {
        $this->setProperty('expectedStartDatetime', $expectedStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedEndDatetime()
    {
        return $this->getProperty('expectedEndDatetime');
    }

    /**
     * @param \DateTime $expectedEndDatetime
     */
    public function setExpectedEndDatetime(\DateTime $expectedEndDatetime = null)
    {
        $this->setProperty('expectedEndDatetime', $expectedEndDatetime);
    }
}
