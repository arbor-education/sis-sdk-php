<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EnrolmentModeAssignment extends \ModelBase
{
    public const ACADEMIC_YEAR_ENROLMENT = 'academicYearEnrolment';

    public const ENROLMENT_MODE = 'enrolmentMode';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const OTHER_EDUCATIONAL_INSTITUTION = 'otherEducationalInstitution';

    protected $_resourceType = ResourceType::ENROLMENT_MODE_ASSIGNMENT;

    /**
     * @param Query $query
     * @return EnrolmentModeAssignment[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::ENROLMENT_MODE_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EnrolmentModeAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ENROLMENT_MODE_ASSIGNMENT, $id);
    }

    /**
     * @return AcademicYearEnrolment
     */
    public function getAcademicYearEnrolment()
    {
        return $this->getProperty('academicYearEnrolment');
    }

    /**
     * @param AcademicYearEnrolment $academicYearEnrolment
     */
    public function setAcademicYearEnrolment(\AcademicYearEnrolment $academicYearEnrolment = null)
    {
        $this->setProperty('academicYearEnrolment', $academicYearEnrolment);
    }

    /**
     * @return EnrolmentMode
     */
    public function getEnrolmentMode()
    {
        return $this->getProperty('enrolmentMode');
    }

    /**
     * @param EnrolmentMode $enrolmentMode
     */
    public function setEnrolmentMode(\EnrolmentMode $enrolmentMode = null)
    {
        $this->setProperty('enrolmentMode', $enrolmentMode);
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
     * @return EducationalInstitution
     */
    public function getOtherEducationalInstitution()
    {
        return $this->getProperty('otherEducationalInstitution');
    }

    /**
     * @param EducationalInstitution $otherEducationalInstitution
     */
    public function setOtherEducationalInstitution(\EducationalInstitution $otherEducationalInstitution = null)
    {
        $this->setProperty('otherEducationalInstitution', $otherEducationalInstitution);
    }
}
