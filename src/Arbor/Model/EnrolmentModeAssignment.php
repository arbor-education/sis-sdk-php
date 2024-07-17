<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EnrolmentModeAssignment extends ModelBase
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
    public static function query(\Arbor\Query\Query $query = null)
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
     * @return \Arbor\Model\AcademicYearEnrolment
     */
    public function getAcademicYearEnrolment()
    {
        return $this->getProperty('academicYearEnrolment');
    }

    /**
     * @param \Arbor\Model\AcademicYearEnrolment $academicYearEnrolment
     */
    public function setAcademicYearEnrolment(\Arbor\Model\AcademicYearEnrolment $academicYearEnrolment = null)
    {
        $this->setProperty('academicYearEnrolment', $academicYearEnrolment);
    }

    /**
     * @return \Arbor\Model\EnrolmentMode
     */
    public function getEnrolmentMode()
    {
        return $this->getProperty('enrolmentMode');
    }

    /**
     * @param \Arbor\Model\EnrolmentMode $enrolmentMode
     */
    public function setEnrolmentMode(\Arbor\Model\EnrolmentMode $enrolmentMode = null)
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
     * @return \Arbor\Model\EducationalInstitution
     */
    public function getOtherEducationalInstitution()
    {
        return $this->getProperty('otherEducationalInstitution');
    }

    /**
     * @param \Arbor\Model\EducationalInstitution $otherEducationalInstitution
     */
    public function setOtherEducationalInstitution(\Arbor\Model\EducationalInstitution $otherEducationalInstitution = null)
    {
        $this->setProperty('otherEducationalInstitution', $otherEducationalInstitution);
    }
}
