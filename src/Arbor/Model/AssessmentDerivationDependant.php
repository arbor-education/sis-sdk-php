<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentDerivationDependant extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ASSESSMENT_DERIVATION = 'assessmentDerivation';

    const DESCRIPTION = 'description';

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
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return ModelBase
     */
    public function getDependantAssessment()
    {
        return $this->getProperty('dependantAssessment');
    }

    /**
     * @param ModelBase $dependantAssessment
     */
    public function setDependantAssessment(ModelBase $dependantAssessment = null)
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
