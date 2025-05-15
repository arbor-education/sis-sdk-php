<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InHouseExamGrade extends ModelBase
{
    public const IN_HOUSE_EXAM = 'inHouseExam';

    public const QUALIFICATION_GRADE = 'qualificationGrade';

    public const SHORT_NAME = 'shortName';

    public const LONG_NAME = 'longName';

    public const GRADE_VALUE = 'gradeValue';

    public const ACTIVE = 'active';

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_GRADE;

    /**
     * @param Query $query
     * @return InHouseExamGrade[] | Collection
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

        $query->setResourceType(ResourceType::IN_HOUSE_EXAM_GRADE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InHouseExamGrade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_HOUSE_EXAM_GRADE, $id);
    }

    /**
     * @return \Arbor\Model\InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty('inHouseExam');
    }

    /**
     * @param \Arbor\Model\InHouseExam $inHouseExam
     */
    public function setInHouseExam(\Arbor\Model\InHouseExam $inHouseExam = null)
    {
        $this->setProperty('inHouseExam', $inHouseExam);
    }

    /**
     * @return \Arbor\Model\QualificationGrade
     */
    public function getQualificationGrade()
    {
        return $this->getProperty('qualificationGrade');
    }

    /**
     * @param \Arbor\Model\QualificationGrade $qualificationGrade
     */
    public function setQualificationGrade(\Arbor\Model\QualificationGrade $qualificationGrade = null)
    {
        $this->setProperty('qualificationGrade', $qualificationGrade);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return string
     */
    public function getLongName()
    {
        return $this->getProperty('longName');
    }

    /**
     * @param string $longName
     */
    public function setLongName(string $longName = null)
    {
        $this->setProperty('longName', $longName);
    }

    /**
     * @return float
     */
    public function getGradeValue()
    {
        return $this->getProperty('gradeValue');
    }

    /**
     * @param float $gradeValue
     */
    public function setGradeValue(float $gradeValue = null)
    {
        $this->setProperty('gradeValue', $gradeValue);
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
}
