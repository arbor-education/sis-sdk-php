<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentDefaultDisplayGradeSet extends ModelBase
{
    const PROGRESS_ASSESSMENT_BATCH = 'progressAssessmentBatch';

    const GRADE_SET = 'gradeSet';

    protected $_resourceType = ResourceType::ASSESSMENT_DEFAULT_DISPLAY_GRADE_SET;

    /**
     * @param Query $query
     * @return AssessmentDefaultDisplayGradeSet[] | Collection
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
     * @return ProgressAssessmentBatch
     */
    public function getProgressAssessmentBatch()
    {
        return $this->getProperty('progressAssessmentBatch');
    }

    /**
     * @param ProgressAssessmentBatch $progressAssessmentBatch
     */
    public function setProgressAssessmentBatch(ProgressAssessmentBatch $progressAssessmentBatch = null)
    {
        $this->setProperty('progressAssessmentBatch', $progressAssessmentBatch);
    }

    /**
     * @return GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty('gradeSet');
    }

    /**
     * @param GradeSet $gradeSet
     */
    public function setGradeSet(GradeSet $gradeSet = null)
    {
        $this->setProperty('gradeSet', $gradeSet);
    }
}
