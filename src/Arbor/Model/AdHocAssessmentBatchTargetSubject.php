<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdHocAssessmentBatchTargetSubject extends ModelBase
{
    public const AD_HOC_ASSESSMENT_BATCH_TARGET = 'adHocAssessmentBatchTarget';

    public const SUBJECT = 'subject';

    protected $_resourceType = ResourceType::AD_HOC_ASSESSMENT_BATCH_TARGET_SUBJECT;

    /**
     * @param Query $query
     * @return AdHocAssessmentBatchTargetSubject[] | Collection
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
     * @return \Arbor\Model\AdHocAssessmentBatchTarget
     */
    public function getAdHocAssessmentBatchTarget()
    {
        return $this->getProperty('adHocAssessmentBatchTarget');
    }

    /**
     * @param \Arbor\Model\AdHocAssessmentBatchTarget $adHocAssessmentBatchTarget
     */
    public function setAdHocAssessmentBatchTarget(\Arbor\Model\AdHocAssessmentBatchTarget $adHocAssessmentBatchTarget = null)
    {
        $this->setProperty('adHocAssessmentBatchTarget', $adHocAssessmentBatchTarget);
    }

    /**
     * @return \Arbor\Model\Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param \Arbor\Model\Subject $subject
     */
    public function setSubject(\Arbor\Model\Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }
}
