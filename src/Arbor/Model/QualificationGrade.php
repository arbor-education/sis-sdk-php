<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationGrade extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const QUALIFICATION_GRADE_SET = 'qualificationGradeSet';

    const SHORT_NAME = 'shortName';

    const NAME = 'name';

    const GRADE_IDENTIFIER = 'gradeIdentifier';

    const GRADE_VALUE = 'gradeValue';

    const GRADE_DESCRIPTION = 'gradeDescription';

    const GRADE_LETTER = 'gradeLetter';

    const GRADE_ORDER = 'gradeOrder';

    protected $_resourceType = ResourceType::QUALIFICATION_GRADE;

    /**
     * @param Query $query
     * @return QualificationGrade[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_GRADE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationGrade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_GRADE, $id);
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
     * @return QualificationGradeSet
     */
    public function getQualificationGradeSet()
    {
        return $this->getProperty('qualificationGradeSet');
    }

    /**
     * @param QualificationGradeSet $qualificationGradeSet
     */
    public function setQualificationGradeSet(QualificationGradeSet $qualificationGradeSet = null)
    {
        $this->setProperty('qualificationGradeSet', $qualificationGradeSet);
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

    /**
     * @return string
     */
    public function getGradeIdentifier()
    {
        return $this->getProperty('gradeIdentifier');
    }

    /**
     * @param string $gradeIdentifier
     */
    public function setGradeIdentifier($gradeIdentifier = null)
    {
        $this->setProperty('gradeIdentifier', $gradeIdentifier);
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
     * @return string
     */
    public function getGradeDescription()
    {
        return $this->getProperty('gradeDescription');
    }

    /**
     * @param string $gradeDescription
     */
    public function setGradeDescription($gradeDescription = null)
    {
        $this->setProperty('gradeDescription', $gradeDescription);
    }

    /**
     * @return string
     */
    public function getGradeLetter()
    {
        return $this->getProperty('gradeLetter');
    }

    /**
     * @param string $gradeLetter
     */
    public function setGradeLetter($gradeLetter = null)
    {
        $this->setProperty('gradeLetter', $gradeLetter);
    }

    /**
     * @return int
     */
    public function getGradeOrder()
    {
        return $this->getProperty('gradeOrder');
    }

    /**
     * @param int $gradeOrder
     */
    public function setGradeOrder($gradeOrder = null)
    {
        $this->setProperty('gradeOrder', $gradeOrder);
    }


}
