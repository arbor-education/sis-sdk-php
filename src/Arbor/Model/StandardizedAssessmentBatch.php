<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StandardizedAssessmentBatch extends ModelBase
{
    public const ACADEMIC_YEAR = 'academicYear';

    public const BATCH_NAME = 'batchName';

    public const STANDARDIZED_ASSESSMENT_TEMPLATE = 'standardizedAssessmentTemplate';

    public const ASSESSMENT_DATE = 'assessmentDate';

    public const SEN_STUDENTS_ONLY = 'senStudentsOnly';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_BATCH;

    /**
     * @param Query $query
     * @return StandardizedAssessmentBatch[] | Collection
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

        $query->setResourceType(ResourceType::STANDARDIZED_ASSESSMENT_BATCH);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StandardizedAssessmentBatch
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_BATCH, $id);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return string
     */
    public function getBatchName()
    {
        return $this->getProperty('batchName');
    }

    /**
     * @param string $batchName
     */
    public function setBatchName(string $batchName = null)
    {
        $this->setProperty('batchName', $batchName);
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
     * @return \DateTime
     */
    public function getAssessmentDate()
    {
        return $this->getProperty('assessmentDate');
    }

    /**
     * @param \DateTime $assessmentDate
     */
    public function setAssessmentDate(\DateTime $assessmentDate = null)
    {
        $this->setProperty('assessmentDate', $assessmentDate);
    }

    /**
     * @return bool
     */
    public function getSenStudentsOnly()
    {
        return $this->getProperty('senStudentsOnly');
    }

    /**
     * @param bool $senStudentsOnly
     */
    public function setSenStudentsOnly(bool $senStudentsOnly = null)
    {
        $this->setProperty('senStudentsOnly', $senStudentsOnly);
    }
}
