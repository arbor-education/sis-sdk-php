<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StandardizedAssessment extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ASSESSMENT_NAME = 'assessmentName';

    public const ASSESSMENT_SHORT_NAME = 'assessmentShortName';

    public const SUBJECT = 'subject';

    public const GRADE_POINT_SCALE = 'gradePointScale';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT;

    /**
     * @param Query $query
     * @return StandardizedAssessment[] | Collection
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

        $query->setResourceType(ResourceType::STANDARDIZED_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StandardizedAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
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

    /**
     * @return string
     */
    public function getAssessmentName()
    {
        return $this->getProperty('assessmentName');
    }

    /**
     * @param string $assessmentName
     */
    public function setAssessmentName(string $assessmentName = null)
    {
        $this->setProperty('assessmentName', $assessmentName);
    }

    /**
     * @return string
     */
    public function getAssessmentShortName()
    {
        return $this->getProperty('assessmentShortName');
    }

    /**
     * @param string $assessmentShortName
     */
    public function setAssessmentShortName(string $assessmentShortName = null)
    {
        $this->setProperty('assessmentShortName', $assessmentShortName);
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

    /**
     * @return \Arbor\Model\GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty('gradePointScale');
    }

    /**
     * @param \Arbor\Model\GradePointScale $gradePointScale
     */
    public function setGradePointScale(\Arbor\Model\GradePointScale $gradePointScale = null)
    {
        $this->setProperty('gradePointScale', $gradePointScale);
    }
}
