<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProgrammeInstance extends ModelBase
{
    public const PROGRAMME = 'programme';

    public const NAME = 'name';

    public const PLANNED_START_DATE = 'plannedStartDate';

    public const PLANNED_END_DATE = 'plannedEndDate';

    public const PLACEHOLDER_QUALIFICATION_AWARD_NAME = 'placeholderQualificationAwardName';

    public const PLACEHOLDER_QUALIFICATION_AWARD_REFERENCE = 'placeholderQualificationAwardReference';

    public const PROGRAMME_CLASSIFICATION = 'programmeClassification';

    public const PARTNER_UKPRN = 'partnerUkprn';

    public const PLANNED_LEARNING_HOURS = 'plannedLearningHours';

    public const PLANNED_LEARNING_HOURS_SECOND_YEAR = 'plannedLearningHoursSecondYear';

    protected $_resourceType = ResourceType::PROGRAMME_INSTANCE;

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

        $query->setResourceType(ResourceType::PROGRAMME_INSTANCE);

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

        return $gateway->retrieve(ResourceType::PROGRAMME_INSTANCE, $id);
    }

    /**
     * @return \Arbor\Model\Programme
     */
    public function getProgramme()
    {
        return $this->getProperty('programme');
    }

    /**
     * @param \Arbor\Model\Programme $programme
     */
    public function setProgramme(\Arbor\Model\Programme $programme = null)
    {
        $this->setProperty('programme', $programme);
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

    /**
     * @return \DateTime
     */
    public function getPlannedStartDate()
    {
        return $this->getProperty('plannedStartDate');
    }

    /**
     * @param \DateTime $plannedStartDate
     */
    public function setPlannedStartDate(\DateTime $plannedStartDate = null)
    {
        $this->setProperty('plannedStartDate', $plannedStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getPlannedEndDate()
    {
        return $this->getProperty('plannedEndDate');
    }

    /**
     * @param \DateTime $plannedEndDate
     */
    public function setPlannedEndDate(\DateTime $plannedEndDate = null)
    {
        $this->setProperty('plannedEndDate', $plannedEndDate);
    }

    /**
     * @return string
     */
    public function getPlaceholderQualificationAwardName()
    {
        return $this->getProperty('placeholderQualificationAwardName');
    }

    /**
     * @param string $placeholderQualificationAwardName
     */
    public function setPlaceholderQualificationAwardName(string $placeholderQualificationAwardName = null)
    {
        $this->setProperty('placeholderQualificationAwardName', $placeholderQualificationAwardName);
    }

    /**
     * @return string
     */
    public function getPlaceholderQualificationAwardReference()
    {
        return $this->getProperty('placeholderQualificationAwardReference');
    }

    /**
     * @param string $placeholderQualificationAwardReference
     */
    public function setPlaceholderQualificationAwardReference(string $placeholderQualificationAwardReference = null)
    {
        $this->setProperty('placeholderQualificationAwardReference', $placeholderQualificationAwardReference);
    }

    /**
     * @return \Arbor\Model\ProgrammeClassification
     */
    public function getProgrammeClassification()
    {
        return $this->getProperty('programmeClassification');
    }

    /**
     * @param \Arbor\Model\ProgrammeClassification $programmeClassification
     */
    public function setProgrammeClassification(\Arbor\Model\ProgrammeClassification $programmeClassification = null)
    {
        $this->setProperty('programmeClassification', $programmeClassification);
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
