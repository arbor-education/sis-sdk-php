<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class AcademicYearEnrolment extends ModelBase
{
    public const PLANNED_LEARNING_HOURS = 'plannedLearningHours';

    public const PLANNED_EEP_HOURS = 'plannedEepHours';

    public const T_LEVEL_PLANNED_LEARNING_HOURS = 'tLevelPlannedLearningHours';

    protected $_resourceType = ResourceType::UK_DFE_ACADEMIC_YEAR_ENROLMENT;

    /**
     * @param Query $query
     * @return AcademicYearEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_ACADEMIC_YEAR_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicYearEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_ACADEMIC_YEAR_ENROLMENT, $id);
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
    public function getPlannedEepHours()
    {
        return $this->getProperty('plannedEepHours');
    }

    /**
     * @param int $plannedEepHours
     */
    public function setPlannedEepHours(int $plannedEepHours = null)
    {
        $this->setProperty('plannedEepHours', $plannedEepHours);
    }

    /**
     * @return int
     */
    public function getTLevelPlannedLearningHours()
    {
        return $this->getProperty('tLevelPlannedLearningHours');
    }

    /**
     * @param int $tLevelPlannedLearningHours
     */
    public function setTLevelPlannedLearningHours(int $tLevelPlannedLearningHours = null)
    {
        $this->setProperty('tLevelPlannedLearningHours', $tLevelPlannedLearningHours);
    }
}
