<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

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
     * @param Query $query
     * @return IntakeSeason[] | Collection
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

        $query->setResourceType(ResourceType::INTAKE_SEASON);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntakeSeason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTAKE_SEASON, $id);
    }

    /**
     * @return string
     */
    public function getIntakeSeasonName()
    {
        return $this->getProperty('intakeSeasonName');
    }

    /**
     * @param string $intakeSeasonName
     */
    public function setIntakeSeasonName($intakeSeasonName = null)
    {
        $this->setProperty('intakeSeasonName', $intakeSeasonName);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
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
     * @return int
     */
    public function getPublishedAdmissionsNumber()
    {
        return $this->getProperty('publishedAdmissionsNumber');
    }

    /**
     * @param int $publishedAdmissionsNumber
     */
    public function setPublishedAdmissionsNumber($publishedAdmissionsNumber = null)
    {
        $this->setProperty('publishedAdmissionsNumber', $publishedAdmissionsNumber);
    }

    /**
     * @return int
     */
    public function getTargetApplicationNumber()
    {
        return $this->getProperty('targetApplicationNumber');
    }

    /**
     * @param int $targetApplicationNumber
     */
    public function setTargetApplicationNumber($targetApplicationNumber = null)
    {
        $this->setProperty('targetApplicationNumber', $targetApplicationNumber);
    }

}
