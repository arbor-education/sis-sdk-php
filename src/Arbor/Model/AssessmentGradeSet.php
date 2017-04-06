<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Assessment;
use \Arbor\Model\GradeSet;

class AssessmentGradeSet extends ModelBase
{

    const ASSESSMENT = 'assessment';

    const GRADE_SET = 'gradeSet';

    const IS_DEFAULT = 'isDefault';

    const IS_ORIGINAL = 'isOriginal';

    protected $_resourceType = ResourceType::ASSESSMENT_GRADE_SET;

    /**
     * @param \Arbor\Query\Query $query
     * @return AssessmentGradeSet[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AssessmentGradeSet");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AssessmentGradeSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ASSESSMENT_GRADE_SET, $id);
    }

    /**
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty("assessment");
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty("assessment", $assessment);
    }

    /**
     * @return GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty("gradeSet");
    }

    /**
     * @param GradeSet $gradeSet
     */
    public function setGradeSet(GradeSet $gradeSet = null)
    {
        $this->setProperty("gradeSet", $gradeSet);
    }

    /**
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->getProperty("isDefault");
    }

    /**
     * @param bool $isDefault
     */
    public function setIsDefault($isDefault = null)
    {
        $this->setProperty("isDefault", $isDefault);
    }

    /**
     * @return bool
     */
    public function getIsOriginal()
    {
        return $this->getProperty("isOriginal");
    }

    /**
     * @param bool $isOriginal
     */
    public function setIsOriginal($isOriginal = null)
    {
        $this->setProperty("isOriginal", $isOriginal);
    }


}
