<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\InHouseExam;
use \Arbor\Model\QualificationGrade;

class InHouseExamGrade extends ModelBase
{

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_GRADE;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\InHouseExamGrade[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("InHouseExamGrade");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\InHouseExamGrade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("InHouseExamGrade", $id);
    }

    /**
     * @return InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty("inHouseExam");
    }

    /**
     * @param InHouseExam $inHouseExam
     */
    public function setInHouseExam(InHouseExam $inHouseExam = null)
    {
        $this->setProperty("inHouseExam", $inHouseExam);
    }

    /**
     * @return QualificationGrade
     */
    public function getQualificationGrade()
    {
        return $this->getProperty("qualificationGrade");
    }

    /**
     * @param QualificationGrade $qualificationGrade
     */
    public function setQualificationGrade(QualificationGrade $qualificationGrade = null)
    {
        $this->setProperty("qualificationGrade", $qualificationGrade);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty("shortName");
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty("shortName", $shortName);
    }

    /**
     * @return string
     */
    public function getLongName()
    {
        return $this->getProperty("longName");
    }

    /**
     * @param string $longName
     */
    public function setLongName($longName = null)
    {
        $this->setProperty("longName", $longName);
    }

    /**
     * @return float
     */
    public function getGradeValue()
    {
        return $this->getProperty("gradeValue");
    }

    /**
     * @param float $gradeValue
     */
    public function setGradeValue($gradeValue = null)
    {
        $this->setProperty("gradeValue", $gradeValue);
    }

    /**
     * @return string
     */
    public function getGradeIdentifier()
    {
        return $this->getProperty("gradeIdentifier");
    }

    /**
     * @param string $gradeIdentifier
     */
    public function setGradeIdentifier($gradeIdentifier = null)
    {
        $this->setProperty("gradeIdentifier", $gradeIdentifier);
    }

    /**
     * @return float
     */
    public function getLowerGradePointScaleValue()
    {
        return $this->getProperty("lowerGradePointScaleValue");
    }

    /**
     * @param float $lowerGradePointScaleValue
     */
    public function setLowerGradePointScaleValue($lowerGradePointScaleValue = null)
    {
        $this->setProperty("lowerGradePointScaleValue", $lowerGradePointScaleValue);
    }

    /**
     * @return float
     */
    public function getUpperGradePointScaleValue()
    {
        return $this->getProperty("upperGradePointScaleValue");
    }

    /**
     * @param float $upperGradePointScaleValue
     */
    public function setUpperGradePointScaleValue($upperGradePointScaleValue = null)
    {
        $this->setProperty("upperGradePointScaleValue", $upperGradePointScaleValue);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }


}
