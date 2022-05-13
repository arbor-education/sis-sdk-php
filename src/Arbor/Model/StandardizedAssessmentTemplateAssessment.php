<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StandardizedAssessmentTemplateAssessment extends ModelBase
{
    const STANDARDIZED_ASSESSMENT_TEMPLATE = 'standardizedAssessmentTemplate';

    const STANDARDIZED_ASSESSMENT = 'standardizedAssessment';

    const DATA_ORDER = 'dataOrder';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_TEMPLATE_ASSESSMENT;

    /**
     * @param Query $query
     * @return StandardizedAssessmentTemplateAssessment[] | Collection
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
     * @return StandardizedAssessmentTemplate
     */
    public function getStandardizedAssessmentTemplate()
    {
        return $this->getProperty('standardizedAssessmentTemplate');
    }

    /**
     * @param StandardizedAssessmentTemplate $standardizedAssessmentTemplate
     */
    public function setStandardizedAssessmentTemplate(StandardizedAssessmentTemplate $standardizedAssessmentTemplate = null)
    {
        $this->setProperty('standardizedAssessmentTemplate', $standardizedAssessmentTemplate);
    }

    /**
     * @return StandardizedAssessment
     */
    public function getStandardizedAssessment()
    {
        return $this->getProperty('standardizedAssessment');
    }

    /**
     * @param StandardizedAssessment $standardizedAssessment
     */
    public function setStandardizedAssessment(StandardizedAssessment $standardizedAssessment = null)
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
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

}
