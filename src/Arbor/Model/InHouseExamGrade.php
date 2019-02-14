<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InHouseExamGrade extends ModelBase
{

    const IN_HOUSE_EXAM = 'inHouseExam';

    const QUALIFICATION_GRADE = 'qualificationGrade';

    const SHORT_NAME = 'shortName';

    const LONG_NAME = 'longName';

    const GRADE_VALUE = 'gradeValue';

    const ACTIVE = 'active';

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_GRADE;

    /**
     * @param Query $query
     * @return InHouseExamGrade[] | Collection
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
     * @return InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty('inHouseExam');
    }

    /**
     * @param InHouseExam $inHouseExam
     */
    public function setInHouseExam(InHouseExam $inHouseExam = null)
    {
        $this->setProperty('inHouseExam', $inHouseExam);
    }

    /**
     * @return QualificationGrade
     */
    public function getQualificationGrade()
    {
        return $this->getProperty('qualificationGrade');
    }

    /**
     * @param QualificationGrade $qualificationGrade
     */
    public function setQualificationGrade(QualificationGrade $qualificationGrade = null)
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
    public function setShortName($shortName = null)
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
    public function setLongName($longName = null)
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
    public function setGradeValue($gradeValue = null)
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
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }


}
