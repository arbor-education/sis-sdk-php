<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StandardizedAssessmentComponent extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const STANDARDIZED_ASSESSMENT_SUITE = 'standardizedAssessmentSuite';

    const SUBJECT = 'subject';

    const CURRICULUM_GRADE = 'curriculumGrade';

    const NAME = 'name';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_COMPONENT;

    /**
     * @param Query $query
     * @return StandardizedAssessmentComponent[] | Collection
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

        $query->setResourceType(ResourceType::STANDARDIZED_ASSESSMENT_COMPONENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StandardizedAssessmentComponent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_COMPONENT, $id);
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return StandardizedAssessmentSuite
     */
    public function getStandardizedAssessmentSuite()
    {
        return $this->getProperty('standardizedAssessmentSuite');
    }

    /**
     * @param StandardizedAssessmentSuite $standardizedAssessmentSuite
     */
    public function setStandardizedAssessmentSuite(StandardizedAssessmentSuite $standardizedAssessmentSuite = null)
    {
        $this->setProperty('standardizedAssessmentSuite', $standardizedAssessmentSuite);
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

    /**
     * @return CurriculumGrade
     */
    public function getCurriculumGrade()
    {
        return $this->getProperty('curriculumGrade');
    }

    /**
     * @param CurriculumGrade $curriculumGrade
     */
    public function setCurriculumGrade(CurriculumGrade $curriculumGrade = null)
    {
        $this->setProperty('curriculumGrade', $curriculumGrade);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }
}
