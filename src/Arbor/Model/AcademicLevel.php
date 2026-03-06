<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicLevel extends ModelBase
{
    public const ACADEMIC_LEVEL_NAME = 'academicLevelName';

    public const SHORT_NAME = 'shortName';

    public const CURRICULUM_GRADE = 'curriculumGrade';

    public const ACADEMIC_YEAR = 'academicYear';

    public const PROMOTED_TO_ACADEMIC_LEVEL = 'promotedToAcademicLevel';

    public const PROMOTED_DATETIME = 'promotedDatetime';

    public const COPIED_TO_ACADEMIC_LEVEL = 'copiedToAcademicLevel';

    public const DISPLAY_ORDER = 'displayOrder';

    public const TARGET_ENROLMENT = 'targetEnrolment';

    protected $_resourceType = ResourceType::ACADEMIC_LEVEL;

    /**
     * @param Query $query
     * @return AcademicLevel[] | Collection
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
    public function setAcademicLevelName(string $academicLevelName = null)
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
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return \Arbor\Model\CurriculumGrade
     */
    public function getCurriculumGrade()
    {
        return $this->getProperty('curriculumGrade');
    }

    /**
     * @param \Arbor\Model\CurriculumGrade $curriculumGrade
     */
    public function setCurriculumGrade(\Arbor\Model\CurriculumGrade $curriculumGrade = null)
    {
        $this->setProperty('curriculumGrade', $curriculumGrade);
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
     * @return \Arbor\Model\AcademicLevel
     */
    public function getPromotedToAcademicLevel()
    {
        return $this->getProperty('promotedToAcademicLevel');
    }

    /**
     * @param \Arbor\Model\AcademicLevel $promotedToAcademicLevel
     */
    public function setPromotedToAcademicLevel(\Arbor\Model\AcademicLevel $promotedToAcademicLevel = null)
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
     * @return \Arbor\Model\AcademicLevel
     */
    public function getCopiedToAcademicLevel()
    {
        return $this->getProperty('copiedToAcademicLevel');
    }

    /**
     * @param \Arbor\Model\AcademicLevel $copiedToAcademicLevel
     */
    public function setCopiedToAcademicLevel(\Arbor\Model\AcademicLevel $copiedToAcademicLevel = null)
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
    public function setDisplayOrder(int $displayOrder = null)
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
    public function setTargetEnrolment(int $targetEnrolment = null)
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
