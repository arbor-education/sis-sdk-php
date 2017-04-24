<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\StandardizedAssessmentTemplate;
use \Arbor\Model\Assessment;

class StandardizedAssessmentTemplateAssessment extends ModelBase
{
    const STANDARDIZED_ASSESSMENT_TEMPLATE = 'standardizedAssessmentTemplate';

    const ASSESSMENT = 'assessment';

    const DATA_ORDER = 'dataOrder';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_TEMPLATE_ASSESSMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return StandardizedAssessmentTemplateAssessment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StandardizedAssessmentTemplateAssessment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StandardizedAssessmentTemplateAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_TEMPLATE_ASSESSMENT, $id);
    }

    /**
     * @return StandardizedAssessmentTemplate
     */
    public function getStandardizedAssessmentTemplate()
    {
        return $this->getProperty("standardizedAssessmentTemplate");
    }

    /**
     * @param StandardizedAssessmentTemplate $standardizedAssessmentTemplate
     */
    public function setStandardizedAssessmentTemplate(StandardizedAssessmentTemplate $standardizedAssessmentTemplate = null)
    {
        $this->setProperty("standardizedAssessmentTemplate", $standardizedAssessmentTemplate);
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
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }
}
