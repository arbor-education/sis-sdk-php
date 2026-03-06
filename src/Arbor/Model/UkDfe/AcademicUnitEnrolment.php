<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class AcademicUnitEnrolment extends ModelBase
{
    public const PLANNED_EEP_HOURS = 'plannedEepHours';

    protected $_resourceType = ResourceType::UK_DFE_ACADEMIC_UNIT_ENROLMENT;

    /**
     * @param Query $query
     * @return AcademicUnitEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_ACADEMIC_UNIT_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_ACADEMIC_UNIT_ENROLMENT, $id);
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
}
