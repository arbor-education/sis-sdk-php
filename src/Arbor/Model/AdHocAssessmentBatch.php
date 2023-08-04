<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AdHocAssessmentBatch extends \ModelBase
{
    public const AD_HOC_ASSESSMENT = 'adHocAssessment';

    public const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    public const ASSESSMENT_REFERENCE_DATE = 'assessmentReferenceDate';

    public const DELETION_STARTED_DATETIME = 'deletionStartedDatetime';

    protected $_resourceType = ResourceType::AD_HOC_ASSESSMENT_BATCH;

    /**
     * @param Query $query
     * @return AdHocAssessmentBatch[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::AD_HOC_ASSESSMENT_BATCH);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdHocAssessmentBatch
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AD_HOC_ASSESSMENT_BATCH, $id);
    }

    /**
     * @return AdHocAssessment
     */
    public function getAdHocAssessment()
    {
        return $this->getProperty('adHocAssessment');
    }

    /**
     * @param AdHocAssessment $adHocAssessment
     */
    public function setAdHocAssessment(\AdHocAssessment $adHocAssessment = null)
    {
        $this->setProperty('adHocAssessment', $adHocAssessment);
    }

    /**
     * @return ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty('progressMeasurementPeriod');
    }

    /**
     * @param ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(\ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty('progressMeasurementPeriod', $progressMeasurementPeriod);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentReferenceDate()
    {
        return $this->getProperty('assessmentReferenceDate');
    }

    /**
     * @param \DateTime $assessmentReferenceDate
     */
    public function setAssessmentReferenceDate(\DateTime $assessmentReferenceDate = null)
    {
        $this->setProperty('assessmentReferenceDate', $assessmentReferenceDate);
    }

    /**
     * @return \DateTime
     */
    public function getDeletionStartedDatetime()
    {
        return $this->getProperty('deletionStartedDatetime');
    }

    /**
     * @param \DateTime $deletionStartedDatetime
     */
    public function setDeletionStartedDatetime(\DateTime $deletionStartedDatetime = null)
    {
        $this->setProperty('deletionStartedDatetime', $deletionStartedDatetime);
    }
}
