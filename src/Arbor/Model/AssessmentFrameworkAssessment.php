<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentFrameworkAssessment extends ModelBase
{
    public const ASSESSMENT = 'assessment';

    public const STEPS_COMPLETED = 'stepsCompleted';

    public const SETUP_COMPLETED = 'setupCompleted';

    protected $_resourceType = ResourceType::ASSESSMENT_FRAMEWORK_ASSESSMENT;

    /**
     * @param Query $query
     * @return AssessmentFrameworkAssessment[] | Collection
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
    public function setAssessment(\ModelBase $assessment = null)
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
    public function setStepsCompleted(int $stepsCompleted = null)
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
    public function setSetupCompleted(bool $setupCompleted = null)
    {
        $this->setProperty('setupCompleted', $setupCompleted);
    }
}
