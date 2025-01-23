<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ProgrammeOfStudyInstance extends ModelBase
{
    public const PROGRAMME_OF_STUDY = 'programmeOfStudy';

    public const NAME = 'name';

    public const DEFAULT_GUIDED_CONTACT_HOURS = 'defaultGuidedContactHours';

    public const DEFAULT_PLANNED_START_DATE = 'defaultPlannedStartDate';

    public const DEFAULT_PLANNED_END_DATE = 'defaultPlannedEndDate';

    public const DEFAULT_LENGTH_OF_PROGRAMME = 'defaultLengthOfProgramme';

    public const DEFAULT_YEAR_OF_PROGRAMME = 'defaultYearOfProgramme';

    protected $_resourceType = ResourceType::CYMRU_PROGRAMME_OF_STUDY_INSTANCE;

    /**
     * @param Query $query
     * @return ProgrammeOfStudyInstance[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PROGRAMME_OF_STUDY_INSTANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeOfStudyInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PROGRAMME_OF_STUDY_INSTANCE, $id);
    }

    /**
     * @return \Arbor\Model\Cymru\ProgrammeOfStudy
     */
    public function getProgrammeOfStudy()
    {
        return $this->getProperty('programmeOfStudy');
    }

    /**
     * @param \Arbor\Model\Cymru\ProgrammeOfStudy $programmeOfStudy
     */
    public function setProgrammeOfStudy(\Arbor\Model\Cymru\ProgrammeOfStudy $programmeOfStudy = null)
    {
        $this->setProperty('programmeOfStudy', $programmeOfStudy);
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
     * @return int
     */
    public function getDefaultGuidedContactHours()
    {
        return $this->getProperty('defaultGuidedContactHours');
    }

    /**
     * @param int $defaultGuidedContactHours
     */
    public function setDefaultGuidedContactHours(int $defaultGuidedContactHours = null)
    {
        $this->setProperty('defaultGuidedContactHours', $defaultGuidedContactHours);
    }

    /**
     * @return \DateTime
     */
    public function getDefaultPlannedStartDate()
    {
        return $this->getProperty('defaultPlannedStartDate');
    }

    /**
     * @param \DateTime $defaultPlannedStartDate
     */
    public function setDefaultPlannedStartDate(\DateTime $defaultPlannedStartDate = null)
    {
        $this->setProperty('defaultPlannedStartDate', $defaultPlannedStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getDefaultPlannedEndDate()
    {
        return $this->getProperty('defaultPlannedEndDate');
    }

    /**
     * @param \DateTime $defaultPlannedEndDate
     */
    public function setDefaultPlannedEndDate(\DateTime $defaultPlannedEndDate = null)
    {
        $this->setProperty('defaultPlannedEndDate', $defaultPlannedEndDate);
    }

    /**
     * @return int
     */
    public function getDefaultLengthOfProgramme()
    {
        return $this->getProperty('defaultLengthOfProgramme');
    }

    /**
     * @param int $defaultLengthOfProgramme
     */
    public function setDefaultLengthOfProgramme(int $defaultLengthOfProgramme = null)
    {
        $this->setProperty('defaultLengthOfProgramme', $defaultLengthOfProgramme);
    }

    /**
     * @return int
     */
    public function getDefaultYearOfProgramme()
    {
        return $this->getProperty('defaultYearOfProgramme');
    }

    /**
     * @param int $defaultYearOfProgramme
     */
    public function setDefaultYearOfProgramme(int $defaultYearOfProgramme = null)
    {
        $this->setProperty('defaultYearOfProgramme', $defaultYearOfProgramme);
    }
}
