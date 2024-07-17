<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StandardizedAssessmentTemplateAssessment extends ModelBase
{
    public const STANDARDIZED_ASSESSMENT_TEMPLATE = 'standardizedAssessmentTemplate';

    public const STANDARDIZED_ASSESSMENT = 'standardizedAssessment';

    public const DATA_ORDER = 'dataOrder';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_TEMPLATE_ASSESSMENT;

    /**
     * @param Query $query
     * @return StandardizedAssessmentTemplateAssessment[] | Collection
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

        $query->setResourceType(ResourceType::STANDARDIZED_ASSESSMENT_TEMPLATE_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StandardizedAssessmentTemplateAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_TEMPLATE_ASSESSMENT, $id);
    }

    /**
     * @return \Arbor\Model\StandardizedAssessmentTemplate
     */
    public function getStandardizedAssessmentTemplate()
    {
        return $this->getProperty('standardizedAssessmentTemplate');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessmentTemplate
     * $standardizedAssessmentTemplate
     */
    public function setStandardizedAssessmentTemplate(\Arbor\Model\StandardizedAssessmentTemplate $standardizedAssessmentTemplate = null)
    {
        $this->setProperty('standardizedAssessmentTemplate', $standardizedAssessmentTemplate);
    }

    /**
     * @return \Arbor\Model\StandardizedAssessment
     */
    public function getStandardizedAssessment()
    {
        return $this->getProperty('standardizedAssessment');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessment $standardizedAssessment
     */
    public function setStandardizedAssessment(\Arbor\Model\StandardizedAssessment $standardizedAssessment = null)
    {
        $this->setProperty('standardizedAssessment', $standardizedAssessment);
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
}
