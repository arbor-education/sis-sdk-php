<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentDerivation extends ModelBase
{
    const ASSESSMENT = 'assessment';

    const CALCULATOR_CLASS = 'calculatorClass';

    protected $_resourceType = ResourceType::ASSESSMENT_DERIVATION;

    /**
     * @param Query $query
     * @return AssessmentDerivation[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_DERIVATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentDerivation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_DERIVATION, $id);
    }

    /**
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
    }

    /**
     * @return string
     */
    public function getCalculatorClass()
    {
        return $this->getProperty('calculatorClass');
    }

    /**
     * @param string $calculatorClass
     */
    public function setCalculatorClass($calculatorClass = null)
    {
        $this->setProperty('calculatorClass', $calculatorClass);
    }
}
