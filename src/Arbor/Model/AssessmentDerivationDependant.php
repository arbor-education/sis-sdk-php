<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AssessmentDerivation;
use \Arbor\Model\Assessment;

class AssessmentDerivationDependant extends ModelBase
{
    const ASSESSMENT_DERIVATION = 'assessmentDerivation';

    const DEPENDANT_ASSESSMENT = 'dependantAssessment';

    const WEIGHTING = 'weighting';

    protected $_resourceType = ResourceType::ASSESSMENT_DERIVATION_DEPENDANT;

    /**
     * @param \Arbor\Query\Query $query
     * @return AssessmentDerivationDependant[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("AssessmentDerivationDependant");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AssessmentDerivationDependant
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ASSESSMENT_DERIVATION_DEPENDANT, $id);
    }

    /**
     * @return AssessmentDerivation
     */
    public function getAssessmentDerivation()
    {
        return $this->getProperty("assessmentDerivation");
    }

    /**
     * @param AssessmentDerivation $assessmentDerivation
     */
    public function setAssessmentDerivation(AssessmentDerivation $assessmentDerivation = null)
    {
        $this->setProperty("assessmentDerivation", $assessmentDerivation);
    }

    /**
     * @return Assessment
     */
    public function getDependantAssessment()
    {
        return $this->getProperty("dependantAssessment");
    }

    /**
     * @param Assessment $dependantAssessment
     */
    public function setDependantAssessment(Assessment $dependantAssessment = null)
    {
        $this->setProperty("dependantAssessment", $dependantAssessment);
    }

    /**
     * @return int
     */
    public function getWeighting()
    {
        return $this->getProperty("weighting");
    }

    /**
     * @param int $weighting
     */
    public function setWeighting($weighting = null)
    {
        $this->setProperty("weighting", $weighting);
    }
}
