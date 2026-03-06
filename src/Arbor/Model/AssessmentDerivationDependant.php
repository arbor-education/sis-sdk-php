<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentDerivationDependant extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ASSESSMENT_DERIVATION = 'assessmentDerivation';

    public const DESCRIPTION = 'description';

    public const DEPENDANT_ASSESSMENT = 'dependantAssessment';

    public const WEIGHTING = 'weighting';

    public const MAX_GRADE_POINT_SCALE_VALUE = 'maxGradePointScaleValue';

    protected $_resourceType = ResourceType::ASSESSMENT_DERIVATION_DEPENDANT;

    /**
     * @param Query $query
     * @return AssessmentDerivationDependant[] | Collection
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
    public function setCode(string $code = null)
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
    public function setActive(bool $active = null)
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
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return \Arbor\Model\AssessmentDerivation
     */
    public function getAssessmentDerivation()
    {
        return $this->getProperty('assessmentDerivation');
    }

    /**
     * @param \Arbor\Model\AssessmentDerivation $assessmentDerivation
     */
    public function setAssessmentDerivation(\Arbor\Model\AssessmentDerivation $assessmentDerivation = null)
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
    public function setDescription(string $description = null)
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
    public function setDependantAssessment(\ModelBase $dependantAssessment = null)
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
    public function setWeighting(int $weighting = null)
    {
        $this->setProperty('weighting', $weighting);
    }

    /**
     * @return float
     */
    public function getMaxGradePointScaleValue()
    {
        return $this->getProperty('maxGradePointScaleValue');
    }

    /**
     * @param float $maxGradePointScaleValue
     */
    public function setMaxGradePointScaleValue(float $maxGradePointScaleValue = null)
    {
        $this->setProperty('maxGradePointScaleValue', $maxGradePointScaleValue);
    }
}
