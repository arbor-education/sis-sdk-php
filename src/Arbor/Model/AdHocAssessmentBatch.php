<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AdHocAssessment;

class AdHocAssessmentBatch extends ModelBase
{

    const AD_HOC_ASSESSMENT = 'adHocAssessment';

    const ASSESSMENT_REFERENCE_DATE = 'assessmentReferenceDate';

    protected $_resourceType = ResourceType::AD_HOC_ASSESSMENT_BATCH;

    /**
     * @param \Arbor\Query\Query $query
     * @return AdHocAssessmentBatch[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AdHocAssessmentBatch");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AdHocAssessmentBatch
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::AD_HOC_ASSESSMENT_BATCH, $id);
    }

    /**
     * @return AdHocAssessment
     */
    public function getAdHocAssessment()
    {
        return $this->getProperty("adHocAssessment");
    }

    /**
     * @param AdHocAssessment $adHocAssessment
     */
    public function setAdHocAssessment(AdHocAssessment $adHocAssessment = null)
    {
        $this->setProperty("adHocAssessment", $adHocAssessment);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentReferenceDate()
    {
        return $this->getProperty("assessmentReferenceDate");
    }

    /**
     * @param \DateTime $assessmentReferenceDate
     */
    public function setAssessmentReferenceDate(\DateTime $assessmentReferenceDate = null)
    {
        $this->setProperty("assessmentReferenceDate", $assessmentReferenceDate);
    }


}
