<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Grade extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const GRADE_SET = 'gradeSet';

    public const SHORT_NAME = 'shortName';

    public const LONG_NAME = 'longName';

    public const USER_DEFINED_SHORT_NAME = 'userDefinedShortName';

    public const USER_DEFINED_LONG_NAME = 'userDefinedLongName';

    public const USER_DEFINED_GRADE_DESCRIPTION = 'userDefinedGradeDescription';

    public const GRADE_IDENTIFIER = 'gradeIdentifier';

    public const GRADE_VALUE = 'gradeValue';

    public const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    public const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    public const STATISTICAL_GRADE_POINT_SCALE_VALUE = 'statisticalGradePointScaleValue';

    public const GRADE_ORDER = 'gradeOrder';

    protected $_resourceType = ResourceType::GRADE;

    /**
     * @param Query $query
     * @return Grade[] | Collection
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

        $query->setResourceType(ResourceType::GRADE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Grade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GRADE, $id);
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
     * @return \Arbor\Model\GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty('gradeSet');
    }

    /**
     * @param \Arbor\Model\GradeSet $gradeSet
     */
    public function setGradeSet(\Arbor\Model\GradeSet $gradeSet = null)
    {
        $this->setProperty('gradeSet', $gradeSet);
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
     * @return string
     */
    public function getUserDefinedShortName()
    {
        return $this->getProperty('userDefinedShortName');
    }

    /**
     * @param string $userDefinedShortName
     */
    public function setUserDefinedShortName(string $userDefinedShortName = null)
    {
        $this->setProperty('userDefinedShortName', $userDefinedShortName);
    }

    /**
     * @return string
     */
    public function getUserDefinedLongName()
    {
        return $this->getProperty('userDefinedLongName');
    }

    /**
     * @param string $userDefinedLongName
     */
    public function setUserDefinedLongName(string $userDefinedLongName = null)
    {
        $this->setProperty('userDefinedLongName', $userDefinedLongName);
    }

    /**
     * @return string
     */
    public function getUserDefinedGradeDescription()
    {
        return $this->getProperty('userDefinedGradeDescription');
    }

    /**
     * @param string $userDefinedGradeDescription
     */
    public function setUserDefinedGradeDescription(string $userDefinedGradeDescription = null)
    {
        $this->setProperty('userDefinedGradeDescription', $userDefinedGradeDescription);
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
     * @return float
     */
    public function getLowerGradePointScaleValue()
    {
        return $this->getProperty('lowerGradePointScaleValue');
    }

    /**
     * @param float $lowerGradePointScaleValue
     */
    public function setLowerGradePointScaleValue(float $lowerGradePointScaleValue = null)
    {
        $this->setProperty('lowerGradePointScaleValue', $lowerGradePointScaleValue);
    }

    /**
     * @return float
     */
    public function getUpperGradePointScaleValue()
    {
        return $this->getProperty('upperGradePointScaleValue');
    }

    /**
     * @param float $upperGradePointScaleValue
     */
    public function setUpperGradePointScaleValue(float $upperGradePointScaleValue = null)
    {
        $this->setProperty('upperGradePointScaleValue', $upperGradePointScaleValue);
    }

    /**
     * @return float
     */
    public function getStatisticalGradePointScaleValue()
    {
        return $this->getProperty('statisticalGradePointScaleValue');
    }

    /**
     * @param float $statisticalGradePointScaleValue
     */
    public function setStatisticalGradePointScaleValue(float $statisticalGradePointScaleValue = null)
    {
        $this->setProperty('statisticalGradePointScaleValue', $statisticalGradePointScaleValue);
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
