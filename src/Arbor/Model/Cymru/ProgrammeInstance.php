<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ProgrammeInstance extends ModelBase
{
    public const LEARNING_ACTIVITY_PROVIDER = 'learningActivityProvider';

    public const PLANNED_LEARNING_HOURS = 'plannedLearningHours';

    public const PLANNED_LEARNING_HOURS_SECOND_YEAR = 'plannedLearningHoursSecondYear';

    protected $_resourceType = ResourceType::CYMRU_PROGRAMME_INSTANCE;

    /**
     * @param Query $query
     * @return ProgrammeInstance[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PROGRAMME_INSTANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PROGRAMME_INSTANCE, $id);
    }

    /**
     * @return string
     */
    public function getLearningActivityProvider()
    {
        return $this->getProperty('learningActivityProvider');
    }

    /**
     * @param string $learningActivityProvider
     */
    public function setLearningActivityProvider(string $learningActivityProvider = null)
    {
        $this->setProperty('learningActivityProvider', $learningActivityProvider);
    }

    /**
     * @return int
     */
    public function getPlannedLearningHours()
    {
        return $this->getProperty('plannedLearningHours');
    }

    /**
     * @param int $plannedLearningHours
     */
    public function setPlannedLearningHours(int $plannedLearningHours = null)
    {
        $this->setProperty('plannedLearningHours', $plannedLearningHours);
    }

    /**
     * @return int
     */
    public function getPlannedLearningHoursSecondYear()
    {
        return $this->getProperty('plannedLearningHoursSecondYear');
    }

    /**
     * @param int $plannedLearningHoursSecondYear
     */
    public function setPlannedLearningHoursSecondYear(int $plannedLearningHoursSecondYear = null)
    {
        $this->setProperty('plannedLearningHoursSecondYear', $plannedLearningHoursSecondYear);
    }
}
