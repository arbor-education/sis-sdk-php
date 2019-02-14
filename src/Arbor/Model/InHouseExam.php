<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InHouseExam extends ModelBase
{

    const MOCK_QUALIFICATION_ASSESSABLE = 'mockQualificationAssessable';

    const MOCK_QUALIFICATION_LEARNING_UNIT = 'mockQualificationLearningUnit';

    const DURATION = 'duration';

    const NAME = 'name';

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM;

    /**
     * @param Query $query
     * @return InHouseExam[] | Collection
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
     * @return QualificationAssessable
     */
    public function getMockQualificationAssessable()
    {
        return $this->getProperty('mockQualificationAssessable');
    }

    /**
     * @param QualificationAssessable $mockQualificationAssessable
     */
    public function setMockQualificationAssessable(QualificationAssessable $mockQualificationAssessable = null)
    {
        $this->setProperty('mockQualificationAssessable', $mockQualificationAssessable);
    }

    /**
     * @return QualificationLearningUnit
     */
    public function getMockQualificationLearningUnit()
    {
        return $this->getProperty('mockQualificationLearningUnit');
    }

    /**
     * @param QualificationLearningUnit $mockQualificationLearningUnit
     */
    public function setMockQualificationLearningUnit(QualificationLearningUnit $mockQualificationLearningUnit = null)
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
    public function setDuration($duration = null)
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
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }


}
