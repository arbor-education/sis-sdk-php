<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationGrade extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const QUALIFICATION_GRADE_SET = 'qualificationGradeSet';

    public const SHORT_NAME = 'shortName';

    public const NAME = 'name';

    public const GRADE_IDENTIFIER = 'gradeIdentifier';

    public const GRADE_VALUE = 'gradeValue';

    public const GRADE_DESCRIPTION = 'gradeDescription';

    public const GRADE_LETTER = 'gradeLetter';

    public const GRADE_ORDER = 'gradeOrder';

    protected $_resourceType = ResourceType::QUALIFICATION_GRADE;

    /**
     * @param Query $query
     * @return QualificationGrade[] | Collection
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
     * @return \Arbor\Model\QualificationGradeSet
     */
    public function getQualificationGradeSet()
    {
        return $this->getProperty('qualificationGradeSet');
    }

    /**
     * @param \Arbor\Model\QualificationGradeSet $qualificationGradeSet
     */
    public function setQualificationGradeSet(\Arbor\Model\QualificationGradeSet $qualificationGradeSet = null)
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
    public function setShortName(string $shortName = null)
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
    public function setName(string $name = null)
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
    public function setGradeIdentifier(string $gradeIdentifier = null)
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
    public function setGradeValue(float $gradeValue = null)
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
    public function setGradeDescription(string $gradeDescription = null)
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
    public function setGradeLetter(string $gradeLetter = null)
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
    public function setGradeOrder(int $gradeOrder = null)
    {
        $this->setProperty('gradeOrder', $gradeOrder);
    }
}
