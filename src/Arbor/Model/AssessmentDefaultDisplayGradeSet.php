<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentDefaultDisplayGradeSet extends ModelBase
{
    public const PROGRESS_ASSESSMENT_BATCH = 'progressAssessmentBatch';

    public const GRADE_SET = 'gradeSet';

    protected $_resourceType = ResourceType::ASSESSMENT_DEFAULT_DISPLAY_GRADE_SET;

    /**
     * @param Query $query
     * @return AssessmentDefaultDisplayGradeSet[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_DEFAULT_DISPLAY_GRADE_SET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentDefaultDisplayGradeSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_DEFAULT_DISPLAY_GRADE_SET, $id);
    }

    /**
     * @return \Arbor\Model\ProgressAssessmentBatch
     */
    public function getProgressAssessmentBatch()
    {
        return $this->getProperty('progressAssessmentBatch');
    }

    /**
     * @param \Arbor\Model\ProgressAssessmentBatch $progressAssessmentBatch
     */
    public function setProgressAssessmentBatch(\Arbor\Model\ProgressAssessmentBatch $progressAssessmentBatch = null)
    {
        $this->setProperty('progressAssessmentBatch', $progressAssessmentBatch);
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
}
