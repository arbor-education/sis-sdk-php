<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ProgrammeInstance extends ModelBase
{
    public const PARTNER_UKPRN = 'partnerUkprn';

    public const PLANNED_LEARNING_HOURS = 'plannedLearningHours';

    public const PLANNED_LEARNING_HOURS_SECOND_YEAR = 'plannedLearningHoursSecondYear';

    protected $_resourceType = ResourceType::UK_DFE_PROGRAMME_INSTANCE;

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

        $query->setResourceType(ResourceType::UK_DFE_PROGRAMME_INSTANCE);

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

        return $gateway->retrieve(ResourceType::UK_DFE_PROGRAMME_INSTANCE, $id);
    }

    /**
     * @return string
     */
    public function getPartnerUkprn()
    {
        return $this->getProperty('partnerUkprn');
    }

    /**
     * @param string $partnerUkprn
     */
    public function setPartnerUkprn(string $partnerUkprn = null)
    {
        $this->setProperty('partnerUkprn', $partnerUkprn);
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
