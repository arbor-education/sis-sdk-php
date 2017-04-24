<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;
use \Arbor\Model\StandardizedAssessmentTemplate;

class StandardizedAssessmentBatch extends ModelBase
{
    const ACADEMIC_YEAR = 'academicYear';

    const BATCH_NAME = 'batchName';

    const GRADE_POINT_SCALE_LEVEL_TYPE = 'gradePointScaleLevelType';

    const STANDARDIZED_ASSESSMENT_TEMPLATE = 'standardizedAssessmentTemplate';

    const ASSESSMENT_DATE = 'assessmentDate';

    const SEN_STUDENTS_ONLY = 'senStudentsOnly';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_BATCH;

    /**
     * @param \Arbor\Query\Query $query
     * @return StandardizedAssessmentBatch[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StandardizedAssessmentBatch");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StandardizedAssessmentBatch
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_BATCH, $id);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty("academicYear");
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty("academicYear", $academicYear);
    }

    /**
     * @return string
     */
    public function getBatchName()
    {
        return $this->getProperty("batchName");
    }

    /**
     * @param string $batchName
     */
    public function setBatchName($batchName = null)
    {
        $this->setProperty("batchName", $batchName);
    }

    /**
     * @return string
     */
    public function getGradePointScaleLevelType()
    {
        return $this->getProperty("gradePointScaleLevelType");
    }

    /**
     * @param string $gradePointScaleLevelType
     */
    public function setGradePointScaleLevelType($gradePointScaleLevelType = null)
    {
        $this->setProperty("gradePointScaleLevelType", $gradePointScaleLevelType);
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
     * @return \DateTime
     */
    public function getAssessmentDate()
    {
        return $this->getProperty("assessmentDate");
    }

    /**
     * @param \DateTime $assessmentDate
     */
    public function setAssessmentDate(\DateTime $assessmentDate = null)
    {
        $this->setProperty("assessmentDate", $assessmentDate);
    }

    /**
     * @return bool
     */
    public function getSenStudentsOnly()
    {
        return $this->getProperty("senStudentsOnly");
    }

    /**
     * @param bool $senStudentsOnly
     */
    public function setSenStudentsOnly($senStudentsOnly = null)
    {
        $this->setProperty("senStudentsOnly", $senStudentsOnly);
    }
}
