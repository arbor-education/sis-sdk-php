<?php
namespace Arbor\Model\Group;

use Arbor\Resource\Group\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Subject;
use Arbor\Model\CurriculumTier;

class Group_Assessment extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ASSESSMENT_NAME = 'assessmentName';

    const ASSESSMENT_SHORT_NAME = 'assessmentShortName';

    const USER_DEFINED_NAME = 'userDefinedName';

    const USER_DEFINED_SHORT_NAME = 'userDefinedShortName';

    const SUBJECT = 'subject';

    const CURRICULUM_TIER = 'curriculumTier';

    const GRADE_POINT_SCALE = 'gradePointScale';

    protected $_resourceType = ResourceType::GROUP_ASSESSMENT;

    /**
     * @param Query $query
     * @return Group_Assessment[] | Collection
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

        $query->setResourceType(ResourceType::GROUP_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Group_Assessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GROUP_ASSESSMENT, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getAssessmentName()
    {
        return $this->getProperty('assessmentName');
    }

    /**
     * @param string $assessmentName
     */
    public function setAssessmentName($assessmentName = null)
    {
        $this->setProperty('assessmentName', $assessmentName);
    }

    /**
     * @return string
     */
    public function getAssessmentShortName()
    {
        return $this->getProperty('assessmentShortName');
    }

    /**
     * @param string $assessmentShortName
     */
    public function setAssessmentShortName($assessmentShortName = null)
    {
        $this->setProperty('assessmentShortName', $assessmentShortName);
    }

    /**
     * @return string
     */
    public function getUserDefinedName()
    {
        return $this->getProperty('userDefinedName');
    }

    /**
     * @param string $userDefinedName
     */
    public function setUserDefinedName($userDefinedName = null)
    {
        $this->setProperty('userDefinedName', $userDefinedName);
    }

    /**
     * @return string
     */
    public function getUserDefinedShortName()
    {
        return $this->getProperty('userDefinedShortName');
    }

    /**
     * @param string $userDefinedShortName
     */
    public function setUserDefinedShortName($userDefinedShortName = null)
    {
        $this->setProperty('userDefinedShortName', $userDefinedShortName);
    }

    /**
     * @return Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param Subject $subject
     */
    public function setSubject(Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return CurriculumTier
     */
    public function getCurriculumTier()
    {
        return $this->getProperty('curriculumTier');
    }

    /**
     * @param CurriculumTier $curriculumTier
     */
    public function setCurriculumTier(CurriculumTier $curriculumTier = null)
    {
        $this->setProperty('curriculumTier', $curriculumTier);
    }

    /**
     * @return GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty('gradePointScale');
    }

    /**
     * @param GradePointScale $gradePointScale
     */
    public function setGradePointScale(GradePointScale $gradePointScale = null)
    {
        $this->setProperty('gradePointScale', $gradePointScale);
    }


}
