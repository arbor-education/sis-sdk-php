<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdHocAssessmentBatch extends ModelBase
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
    public static function query(\Arbor\Query\Query $query = null)
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
     * @return \Arbor\Model\AdHocAssessment
     */
    public function getAdHocAssessment()
    {
        return $this->getProperty('adHocAssessment');
    }

    /**
     * @param \Arbor\Model\AdHocAssessment $adHocAssessment
     */
    public function setAdHocAssessment(\Arbor\Model\AdHocAssessment $adHocAssessment = null)
    {
        $this->setProperty('adHocAssessment', $adHocAssessment);
    }

    /**
     * @return \Arbor\Model\ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty('progressMeasurementPeriod');
    }

    /**
     * @param \Arbor\Model\ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(\Arbor\Model\ProgressMeasurementPeriod $progressMeasurementPeriod = null)
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
