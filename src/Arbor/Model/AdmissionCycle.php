<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdmissionCycle extends ModelBase
{
    public const NAME = 'name';

    public const ACADEMIC_YEAR = 'academicYear';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const PLANNED_PLACES = 'plannedPlaces';

    public const TARGET_APPLICATIONS = 'targetApplications';

    protected $_resourceType = ResourceType::ADMISSION_CYCLE;

    /**
     * @param Query $query
     * @return AdmissionCycle[] | Collection
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

        $query->setResourceType(ResourceType::ADMISSION_CYCLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdmissionCycle
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ADMISSION_CYCLE, $id);
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
    public function getPlannedPlaces()
    {
        return $this->getProperty('plannedPlaces');
    }

    /**
     * @param int $plannedPlaces
     */
    public function setPlannedPlaces(int $plannedPlaces = null)
    {
        $this->setProperty('plannedPlaces', $plannedPlaces);
    }

    /**
     * @return int
     */
    public function getTargetApplications()
    {
        return $this->getProperty('targetApplications');
    }

    /**
     * @param int $targetApplications
     */
    public function setTargetApplications(int $targetApplications = null)
    {
        $this->setProperty('targetApplications', $targetApplications);
    }
}
