<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class AcademicYearEnrolment extends ModelBase
{

    const PLANNED_LEARNING_HOURS = 'plannedLearningHours';

    const PLANNED_EEP_HOURS = 'plannedEepHours';

    protected $_resourceType = ResourceType::UK_DFE_ACADEMIC_YEAR_ENROLMENT;

    /**
     * @param Query $query
     * @return AcademicYearEnrolment[] | Collection
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
    public function setPlannedLearningHours($plannedLearningHours = null)
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
    public function setPlannedEepHours($plannedEepHours = null)
    {
        $this->setProperty('plannedEepHours', $plannedEepHours);
    }


}
