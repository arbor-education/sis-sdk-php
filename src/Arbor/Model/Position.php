<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\UkDfe\PositionCategory;
use \Arbor\Model\UkDfe\SchoolWorkforceVacancyPost;

class Position extends ModelBase
{
    const POSITION_CATEGORY = 'positionCategory';

    const WORKFORCE_VACANCY_POST = 'workforceVacancyPost';

    const START_DATE = 'startDate';

    const EXPECTED_END_DATE = 'expectedEndDate';

    const END_DATE = 'endDate';

    const POSITION_NAME = 'positionName';

    const POSITION_REFERENCE = 'positionReference';

    const SUPERVISOR_POSITION = 'supervisorPosition';

    const EXPECTED_HOURS_PER_WEEK = 'expectedHoursPerWeek';

    const EXPECTED_WEEKS_PER_YEAR = 'expectedWeeksPerYear';

    const FTE_HOURS_PER_WEEK = 'fteHoursPerWeek';

    protected $_resourceType = ResourceType::POSITION;

    /**
     * @param \Arbor\Query\Query $query
     * @return Position[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Position");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Position
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::POSITION, $id);
    }

    /**
     * @return PositionCategory
     */
    public function getPositionCategory()
    {
        return $this->getProperty("positionCategory");
    }

    /**
     * @param PositionCategory $positionCategory
     */
    public function setPositionCategory(PositionCategory $positionCategory = null)
    {
        $this->setProperty("positionCategory", $positionCategory);
    }

    /**
     * @return SchoolWorkforceVacancyPost
     */
    public function getWorkforceVacancyPost()
    {
        return $this->getProperty("workforceVacancyPost");
    }

    /**
     * @param SchoolWorkforceVacancyPost $workforceVacancyPost
     */
    public function setWorkforceVacancyPost(SchoolWorkforceVacancyPost $workforceVacancyPost = null)
    {
        $this->setProperty("workforceVacancyPost", $workforceVacancyPost);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedEndDate()
    {
        return $this->getProperty("expectedEndDate");
    }

    /**
     * @param \DateTime $expectedEndDate
     */
    public function setExpectedEndDate(\DateTime $expectedEndDate = null)
    {
        $this->setProperty("expectedEndDate", $expectedEndDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return string
     */
    public function getPositionName()
    {
        return $this->getProperty("positionName");
    }

    /**
     * @param string $positionName
     */
    public function setPositionName($positionName = null)
    {
        $this->setProperty("positionName", $positionName);
    }

    /**
     * @return string
     */
    public function getPositionReference()
    {
        return $this->getProperty("positionReference");
    }

    /**
     * @param string $positionReference
     */
    public function setPositionReference($positionReference = null)
    {
        $this->setProperty("positionReference", $positionReference);
    }

    /**
     * @return Position
     */
    public function getSupervisorPosition()
    {
        return $this->getProperty("supervisorPosition");
    }

    /**
     * @param Position $supervisorPosition
     */
    public function setSupervisorPosition(Position $supervisorPosition = null)
    {
        $this->setProperty("supervisorPosition", $supervisorPosition);
    }

    /**
     * @return string
     */
    public function getExpectedHoursPerWeek()
    {
        return $this->getProperty("expectedHoursPerWeek");
    }

    /**
     * @param string $expectedHoursPerWeek
     */
    public function setExpectedHoursPerWeek($expectedHoursPerWeek = null)
    {
        $this->setProperty("expectedHoursPerWeek", $expectedHoursPerWeek);
    }

    /**
     * @return float
     */
    public function getExpectedWeeksPerYear()
    {
        return $this->getProperty("expectedWeeksPerYear");
    }

    /**
     * @param float $expectedWeeksPerYear
     */
    public function setExpectedWeeksPerYear($expectedWeeksPerYear = null)
    {
        $this->setProperty("expectedWeeksPerYear", $expectedWeeksPerYear);
    }

    /**
     * @return string
     */
    public function getFteHoursPerWeek()
    {
        return $this->getProperty("fteHoursPerWeek");
    }

    /**
     * @param string $fteHoursPerWeek
     */
    public function setFteHoursPerWeek($fteHoursPerWeek = null)
    {
        $this->setProperty("fteHoursPerWeek", $fteHoursPerWeek);
    }
}
