<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ProgrammeEnrolment extends ModelBase
{
    public const PLANNED_LEARNING_HOURS = 'plannedLearningHours';

    public const PLANNED_LEARNING_HOURS_SECOND_YEAR = 'plannedLearningHoursSecondYear';

    public const PROGRAMME_AIM_TYPE = 'programmeAimType';

    protected $_resourceType = ResourceType::UK_DFE_PROGRAMME_ENROLMENT;

    /**
     * @param Query $query
     * @return ProgrammeEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_PROGRAMME_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_PROGRAMME_ENROLMENT, $id);
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

    /**
     * @return string
     */
    public function getProgrammeAimType()
    {
        return $this->getProperty('programmeAimType');
    }

    /**
     * @param string $programmeAimType
     */
    public function setProgrammeAimType(string $programmeAimType = null)
    {
        $this->setProperty('programmeAimType', $programmeAimType);
    }
}
