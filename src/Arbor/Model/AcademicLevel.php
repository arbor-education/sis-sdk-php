<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicLevel extends ModelBase
{

    const ACADEMIC_LEVEL_NAME = 'academicLevelName';

    const SHORT_NAME = 'shortName';

    const CURRICULUM_GRADE = 'curriculumGrade';

    const ACADEMIC_YEAR = 'academicYear';

    const PROMOTED_TO_ACADEMIC_LEVEL = 'promotedToAcademicLevel';

    const PROMOTED_DATETIME = 'promotedDatetime';

    const COPIED_TO_ACADEMIC_LEVEL = 'copiedToAcademicLevel';

    const DISPLAY_ORDER = 'displayOrder';

    const TARGET_ENROLMENT = 'targetEnrolment';

    protected $_resourceType = ResourceType::ACADEMIC_LEVEL;

    /**
     * @param Query $query
     * @return AcademicLevel[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_LEVEL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicLevel
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_LEVEL, $id);
    }

    /**
     * @return string
     */
    public function getAcademicLevelName()
    {
        return $this->getProperty('academicLevelName');
    }

    /**
     * @param string $academicLevelName
     */
    public function setAcademicLevelName($academicLevelName = null)
    {
        $this->setProperty('academicLevelName', $academicLevelName);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return CurriculumGrade
     */
    public function getCurriculumGrade()
    {
        return $this->getProperty('curriculumGrade');
    }

    /**
     * @param CurriculumGrade $curriculumGrade
     */
    public function setCurriculumGrade(CurriculumGrade $curriculumGrade = null)
    {
        $this->setProperty('curriculumGrade', $curriculumGrade);
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
     * @return AcademicLevel
     */
    public function getPromotedToAcademicLevel()
    {
        return $this->getProperty('promotedToAcademicLevel');
    }

    /**
     * @param AcademicLevel $promotedToAcademicLevel
     */
    public function setPromotedToAcademicLevel(AcademicLevel $promotedToAcademicLevel = null)
    {
        $this->setProperty('promotedToAcademicLevel', $promotedToAcademicLevel);
    }

    /**
     * @return \DateTime
     */
    public function getPromotedDatetime()
    {
        return $this->getProperty('promotedDatetime');
    }

    /**
     * @param \DateTime $promotedDatetime
     */
    public function setPromotedDatetime(\DateTime $promotedDatetime = null)
    {
        $this->setProperty('promotedDatetime', $promotedDatetime);
    }

    /**
     * @return AcademicLevel
     */
    public function getCopiedToAcademicLevel()
    {
        return $this->getProperty('copiedToAcademicLevel');
    }

    /**
     * @param AcademicLevel $copiedToAcademicLevel
     */
    public function setCopiedToAcademicLevel(AcademicLevel $copiedToAcademicLevel = null)
    {
        $this->setProperty('copiedToAcademicLevel', $copiedToAcademicLevel);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty('displayOrder');
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder($displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
    }

    /**
     * @return int
     */
    public function getTargetEnrolment()
    {
        return $this->getProperty('targetEnrolment');
    }

    /**
     * @param int $targetEnrolment
     */
    public function setTargetEnrolment($targetEnrolment = null)
    {
        $this->setProperty('targetEnrolment', $targetEnrolment);
    }

    /**
     * @return Collection|\Arbor\Model\AcademicLevelTutor[]
     */
    public function getTutorMemberships()
    {
        return $this->getCollectionProperty('tutorMemberships');
    }


}
