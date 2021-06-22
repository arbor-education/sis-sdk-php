<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AdHocAssessmentBatchTargetSubject extends ModelBase
{

    const AD_HOC_ASSESSMENT_BATCH_TARGET = 'adHocAssessmentBatchTarget';

    const SUBJECT = 'subject';

    protected $_resourceType = ResourceType::AD_HOC_ASSESSMENT_BATCH_TARGET_SUBJECT;

    /**
     * @param Query $query
     * @return AdHocAssessmentBatchTargetSubject[] | Collection
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

        $query->setResourceType(ResourceType::AD_HOC_ASSESSMENT_BATCH_TARGET_SUBJECT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdHocAssessmentBatchTargetSubject
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AD_HOC_ASSESSMENT_BATCH_TARGET_SUBJECT, $id);
    }

    /**
     * @return AdHocAssessmentBatchTarget
     */
    public function getAdHocAssessmentBatchTarget()
    {
        return $this->getProperty('adHocAssessmentBatchTarget');
    }

    /**
     * @param AdHocAssessmentBatchTarget $adHocAssessmentBatchTarget
     */
    public function setAdHocAssessmentBatchTarget(AdHocAssessmentBatchTarget $adHocAssessmentBatchTarget = null)
    {
        $this->setProperty('adHocAssessmentBatchTarget', $adHocAssessmentBatchTarget);
    }

    /**
     * @return Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param Subject $subject
     */
    public function setSubject(Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }


}
