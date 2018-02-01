<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentDerivationDependant extends ModelBase
{

    const ASSESSMENT_DERIVATION = 'assessmentDerivation';

    const DEPENDANT_ASSESSMENT = 'dependantAssessment';

    const WEIGHTING = 'weighting';

    protected $_resourceType = ResourceType::ASSESSMENT_DERIVATION_DEPENDANT;

    /**
     * @param Query $query
     * @return AssessmentDerivationDependant[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_DERIVATION_DEPENDANT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentDerivationDependant
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_DERIVATION_DEPENDANT, $id);
    }

    /**
     * @return AssessmentDerivation
     */
    public function getAssessmentDerivation()
    {
        return $this->getProperty('assessmentDerivation');
    }

    /**
     * @param AssessmentDerivation $assessmentDerivation
     */
    public function setAssessmentDerivation(AssessmentDerivation $assessmentDerivation = null)
    {
        $this->setProperty('assessmentDerivation', $assessmentDerivation);
    }

    /**
     * @return Assessment
     */
    public function getDependantAssessment()
    {
        return $this->getProperty('dependantAssessment');
    }

    /**
     * @param Assessment $dependantAssessment
     */
    public function setDependantAssessment(Assessment $dependantAssessment = null)
    {
        $this->setProperty('dependantAssessment', $dependantAssessment);
    }

    /**
     * @return int
     */
    public function getWeighting()
    {
        return $this->getProperty('weighting');
    }

    /**
     * @param int $weighting
     */
    public function setWeighting($weighting = null)
    {
        $this->setProperty('weighting', $weighting);
    }


}
