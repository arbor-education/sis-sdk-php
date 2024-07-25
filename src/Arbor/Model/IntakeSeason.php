<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IntakeSeason extends ModelBase
{
    public const INTAKE_SEASON_NAME = 'intakeSeasonName';

    public const ACADEMIC_YEAR = 'academicYear';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const PUBLISHED_ADMISSIONS_NUMBER = 'publishedAdmissionsNumber';

    public const TARGET_APPLICATION_NUMBER = 'targetApplicationNumber';

    protected $_resourceType = ResourceType::INTAKE_SEASON;

    /**
     * @param Query $query
     * @return IntakeSeason[] | Collection
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
    public function setIntakeSeasonName(string $intakeSeasonName = null)
    {
        $this->setProperty('intakeSeasonName', $intakeSeasonName);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
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
    public function setPublishedAdmissionsNumber(int $publishedAdmissionsNumber = null)
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
    public function setTargetApplicationNumber(int $targetApplicationNumber = null)
    {
        $this->setProperty('targetApplicationNumber', $targetApplicationNumber);
    }
}
