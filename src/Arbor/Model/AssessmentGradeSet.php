<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentGradeSet extends ModelBase
{
    public const ASSESSMENT = 'assessment';

    public const GRADE_SET = 'gradeSet';

    public const IS_DEFAULT = 'isDefault';

    public const IS_ORIGINAL = 'isOriginal';

    protected $_resourceType = ResourceType::ASSESSMENT_GRADE_SET;

    /**
     * @param Query $query
     * @return AssessmentGradeSet[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_GRADE_SET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentGradeSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_GRADE_SET, $id);
    }

    /**
     * @return \Arbor\Model\Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param \Arbor\Model\Assessment $assessment
     */
    public function setAssessment(\Arbor\Model\Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
    }

    /**
     * @return \Arbor\Model\GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty('gradeSet');
    }

    /**
     * @param \Arbor\Model\GradeSet $gradeSet
     */
    public function setGradeSet(\Arbor\Model\GradeSet $gradeSet = null)
    {
        $this->setProperty('gradeSet', $gradeSet);
    }

    /**
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->getProperty('isDefault');
    }

    /**
     * @param bool $isDefault
     */
    public function setIsDefault(bool $isDefault = null)
    {
        $this->setProperty('isDefault', $isDefault);
    }

    /**
     * @return bool
     */
    public function getIsOriginal()
    {
        return $this->getProperty('isOriginal');
    }

    /**
     * @param bool $isOriginal
     */
    public function setIsOriginal(bool $isOriginal = null)
    {
        $this->setProperty('isOriginal', $isOriginal);
    }
}
