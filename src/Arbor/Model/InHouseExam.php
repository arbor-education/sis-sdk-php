<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InHouseExam extends ModelBase
{
    public const MOCK_QUALIFICATION_ASSESSABLE = 'mockQualificationAssessable';

    public const MOCK_QUALIFICATION_LEARNING_UNIT = 'mockQualificationLearningUnit';

    public const DURATION = 'duration';

    public const NAME = 'name';

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM;

    /**
     * @param Query $query
     * @return InHouseExam[] | Collection
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

        $query->setResourceType(ResourceType::IN_HOUSE_EXAM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InHouseExam
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_HOUSE_EXAM, $id);
    }

    /**
     * @return \Arbor\Model\QualificationAssessable
     */
    public function getMockQualificationAssessable()
    {
        return $this->getProperty('mockQualificationAssessable');
    }

    /**
     * @param \Arbor\Model\QualificationAssessable $mockQualificationAssessable
     */
    public function setMockQualificationAssessable(\Arbor\Model\QualificationAssessable $mockQualificationAssessable = null)
    {
        $this->setProperty('mockQualificationAssessable', $mockQualificationAssessable);
    }

    /**
     * @return \Arbor\Model\QualificationLearningUnit
     */
    public function getMockQualificationLearningUnit()
    {
        return $this->getProperty('mockQualificationLearningUnit');
    }

    /**
     * @param \Arbor\Model\QualificationLearningUnit $mockQualificationLearningUnit
     */
    public function setMockQualificationLearningUnit(\Arbor\Model\QualificationLearningUnit $mockQualificationLearningUnit = null)
    {
        $this->setProperty('mockQualificationLearningUnit', $mockQualificationLearningUnit);
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->getProperty('duration');
    }

    /**
     * @param string $duration
     */
    public function setDuration(string $duration = null)
    {
        $this->setProperty('duration', $duration);
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
}
