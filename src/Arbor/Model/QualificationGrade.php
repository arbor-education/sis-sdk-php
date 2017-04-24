<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\QualificationGradeSet;

class QualificationGrade extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const SHORT_NAME = 'shortName';

    const QUALIFICATION_GRADE_SET = 'qualificationGradeSet';

    const GRADE_NAME = 'gradeName';

    const GRADE_VALUE = 'gradeValue';

    const GRADE_DESCRIPTION = 'gradeDescription';

    const GRADE_LETTER = 'gradeLetter';

    const GRADE_ORDER = 'gradeOrder';

    protected $_resourceType = ResourceType::QUALIFICATION_GRADE;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationGrade[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("QualificationGrade");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationGrade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::QUALIFICATION_GRADE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
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

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
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
     * @return QualificationGradeSet
     */
    public function getQualificationGradeSet()
    {
        return $this->getProperty("qualificationGradeSet");
    }

    /**
     * @param QualificationGradeSet $qualificationGradeSet
     */
    public function setQualificationGradeSet(QualificationGradeSet $qualificationGradeSet = null)
    {
        $this->setProperty("qualificationGradeSet", $qualificationGradeSet);
    }

    /**
     * @return string
     */
    public function getGradeName()
    {
        return $this->getProperty("gradeName");
    }

    /**
     * @param string $gradeName
     */
    public function setGradeName($gradeName = null)
    {
        $this->setProperty("gradeName", $gradeName);
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
    public function getGradeDescription()
    {
        return $this->getProperty("gradeDescription");
    }

    /**
     * @param string $gradeDescription
     */
    public function setGradeDescription($gradeDescription = null)
    {
        $this->setProperty("gradeDescription", $gradeDescription);
    }

    /**
     * @return string
     */
    public function getGradeLetter()
    {
        return $this->getProperty("gradeLetter");
    }

    /**
     * @param string $gradeLetter
     */
    public function setGradeLetter($gradeLetter = null)
    {
        $this->setProperty("gradeLetter", $gradeLetter);
    }

    /**
     * @return int
     */
    public function getGradeOrder()
    {
        return $this->getProperty("gradeOrder");
    }

    /**
     * @param int $gradeOrder
     */
    public function setGradeOrder($gradeOrder = null)
    {
        $this->setProperty("gradeOrder", $gradeOrder);
    }
}
