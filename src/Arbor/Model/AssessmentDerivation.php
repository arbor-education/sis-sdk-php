<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Assessment;

class AssessmentDerivation extends ModelBase
{
    const ASSESSMENT = 'assessment';

    const CALCULATOR_CLASS = 'calculatorClass';

    protected $_resourceType = ResourceType::ASSESSMENT_DERIVATION;

    /**
     * @param \Arbor\Query\Query $query
     * @return AssessmentDerivation[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("AssessmentDerivation");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AssessmentDerivation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ASSESSMENT_DERIVATION, $id);
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
     * @return string
     */
    public function getCalculatorClass()
    {
        return $this->getProperty("calculatorClass");
    }

    /**
     * @param string $calculatorClass
     */
    public function setCalculatorClass($calculatorClass = null)
    {
        $this->setProperty("calculatorClass", $calculatorClass);
    }
}
