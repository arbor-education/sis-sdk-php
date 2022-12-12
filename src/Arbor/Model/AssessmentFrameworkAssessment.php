<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentFrameworkAssessment extends ModelBase
{

    const ASSESSMENT = 'assessment';

    const STEPS_COMPLETED = 'stepsCompleted';

    const SETUP_COMPLETED = 'setupCompleted';

    protected $_resourceType = ResourceType::ASSESSMENT_FRAMEWORK_ASSESSMENT;

    /**
     * @param Query $query
     * @return AssessmentFrameworkAssessment[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_FRAMEWORK_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentFrameworkAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_FRAMEWORK_ASSESSMENT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param ModelBase $assessment
     */
    public function setAssessment(ModelBase $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
    }

    /**
     * @return int
     */
    public function getStepsCompleted()
    {
        return $this->getProperty('stepsCompleted');
    }

    /**
     * @param int $stepsCompleted
     */
    public function setStepsCompleted($stepsCompleted = null)
    {
        $this->setProperty('stepsCompleted', $stepsCompleted);
    }

    /**
     * @return bool
     */
    public function getSetupCompleted()
    {
        return $this->getProperty('setupCompleted');
    }

    /**
     * @param bool $setupCompleted
     */
    public function setSetupCompleted($setupCompleted = null)
    {
        $this->setProperty('setupCompleted', $setupCompleted);
    }


}
