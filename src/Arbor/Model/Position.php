<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Position extends ModelBase
{
    public const START_DATE = 'startDate';

    public const EXPECTED_END_DATE = 'expectedEndDate';

    public const END_DATE = 'endDate';

    public const POSITION_NAME = 'positionName';

    public const POSITION_REFERENCE = 'positionReference';

    public const SUPERVISOR_POSITION = 'supervisorPosition';

    public const EXPECTED_HOURS_PER_WEEK = 'expectedHoursPerWeek';

    public const EXPECTED_WEEKS_PER_YEAR = 'expectedWeeksPerYear';

    public const FTE_HOURS_PER_WEEK = 'fteHoursPerWeek';

    public const POSITION_CATEGORY = 'positionCategory';

    public const WORKFORCE_VACANCY_POST = 'workforceVacancyPost';

    public const WORKFORCE_CENSUS_ROLE_IDENTIFIER = 'workforceCensusRoleIdentifier';

    protected $_resourceType = ResourceType::POSITION;

    /**
     * @param Query $query
     * @return Position[] | Collection
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

        $query->setResourceType(ResourceType::POSITION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Position
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::POSITION, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedEndDate()
    {
        return $this->getProperty('expectedEndDate');
    }

    /**
     * @param \DateTime $expectedEndDate
     */
    public function setExpectedEndDate(\DateTime $expectedEndDate = null)
    {
        $this->setProperty('expectedEndDate', $expectedEndDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getPositionName()
    {
        return $this->getProperty('positionName');
    }

    /**
     * @param string $positionName
     */
    public function setPositionName(string $positionName = null)
    {
        $this->setProperty('positionName', $positionName);
    }

    /**
     * @return string
     */
    public function getPositionReference()
    {
        return $this->getProperty('positionReference');
    }

    /**
     * @param string $positionReference
     */
    public function setPositionReference(string $positionReference = null)
    {
        $this->setProperty('positionReference', $positionReference);
    }

    /**
     * @return \Arbor\Model\Position
     */
    public function getSupervisorPosition()
    {
        return $this->getProperty('supervisorPosition');
    }

    /**
     * @param \Arbor\Model\Position $supervisorPosition
     */
    public function setSupervisorPosition(\Arbor\Model\Position $supervisorPosition = null)
    {
        $this->setProperty('supervisorPosition', $supervisorPosition);
    }

    /**
     * @return string
     */
    public function getExpectedHoursPerWeek()
    {
        return $this->getProperty('expectedHoursPerWeek');
    }

    /**
     * @param string $expectedHoursPerWeek
     */
    public function setExpectedHoursPerWeek(string $expectedHoursPerWeek = null)
    {
        $this->setProperty('expectedHoursPerWeek', $expectedHoursPerWeek);
    }

    /**
     * @return float
     */
    public function getExpectedWeeksPerYear()
    {
        return $this->getProperty('expectedWeeksPerYear');
    }

    /**
     * @param float $expectedWeeksPerYear
     */
    public function setExpectedWeeksPerYear(float $expectedWeeksPerYear = null)
    {
        $this->setProperty('expectedWeeksPerYear', $expectedWeeksPerYear);
    }

    /**
     * @return string
     */
    public function getFteHoursPerWeek()
    {
        return $this->getProperty('fteHoursPerWeek');
    }

    /**
     * @param string $fteHoursPerWeek
     */
    public function setFteHoursPerWeek(string $fteHoursPerWeek = null)
    {
        $this->setProperty('fteHoursPerWeek', $fteHoursPerWeek);
    }

    /**
     * @return \Arbor\Model\UkDfe\PositionCategory
     */
    public function getPositionCategory()
    {
        return $this->getProperty('positionCategory');
    }

    /**
     * @param \Arbor\Model\UkDfe\PositionCategory $positionCategory
     */
    public function setPositionCategory(\Arbor\Model\UkDfe\PositionCategory $positionCategory = null)
    {
        $this->setProperty('positionCategory', $positionCategory);
    }

    /**
     * @return \Arbor\Model\UkDfe\SchoolWorkforceVacancyPost
     */
    public function getWorkforceVacancyPost()
    {
        return $this->getProperty('workforceVacancyPost');
    }

    /**
     * @param \Arbor\Model\UkDfe\SchoolWorkforceVacancyPost $workforceVacancyPost
     */
    public function setWorkforceVacancyPost(\Arbor\Model\UkDfe\SchoolWorkforceVacancyPost $workforceVacancyPost = null)
    {
        $this->setProperty('workforceVacancyPost', $workforceVacancyPost);
    }

    /**
     * @return string
     */
    public function getWorkforceCensusRoleIdentifier()
    {
        return $this->getProperty('workforceCensusRoleIdentifier');
    }

    /**
     * @param string $workforceCensusRoleIdentifier
     */
    public function setWorkforceCensusRoleIdentifier(string $workforceCensusRoleIdentifier = null)
    {
        $this->setProperty('workforceCensusRoleIdentifier', $workforceCensusRoleIdentifier);
    }
}
