<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;

class IntakeSeason extends ModelBase
{
    const INTAKE_SEASON_NAME = 'intakeSeasonName';

    const ACADEMIC_YEAR = 'academicYear';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const PUBLISHED_ADMISSIONS_NUMBER = 'publishedAdmissionsNumber';

    const TARGET_APPLICATION_NUMBER = 'targetApplicationNumber';

    protected $_resourceType = ResourceType::INTAKE_SEASON;

    /**
     * @param \Arbor\Query\Query $query
     * @return IntakeSeason[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("IntakeSeason");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return IntakeSeason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::INTAKE_SEASON, $id);
    }

    /**
     * @return string
     */
    public function getIntakeSeasonName()
    {
        return $this->getProperty("intakeSeasonName");
    }

    /**
     * @param string $intakeSeasonName
     */
    public function setIntakeSeasonName($intakeSeasonName = null)
    {
        $this->setProperty("intakeSeasonName", $intakeSeasonName);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty("academicYear");
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty("academicYear", $academicYear);
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
     * @return int
     */
    public function getPublishedAdmissionsNumber()
    {
        return $this->getProperty("publishedAdmissionsNumber");
    }

    /**
     * @param int $publishedAdmissionsNumber
     */
    public function setPublishedAdmissionsNumber($publishedAdmissionsNumber = null)
    {
        $this->setProperty("publishedAdmissionsNumber", $publishedAdmissionsNumber);
    }

    /**
     * @return int
     */
    public function getTargetApplicationNumber()
    {
        return $this->getProperty("targetApplicationNumber");
    }

    /**
     * @param int $targetApplicationNumber
     */
    public function setTargetApplicationNumber($targetApplicationNumber = null)
    {
        $this->setProperty("targetApplicationNumber", $targetApplicationNumber);
    }
}
