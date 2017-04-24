<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\GradeSet;

class Grade extends ModelBase
{
    const GRADE_CODE = 'gradeCode';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const GRADE_SET = 'gradeSet';

    const SHORT_NAME = 'shortName';

    const LONG_NAME = 'longName';

    const USER_DEFINED_SHORT_NAME = 'userDefinedShortName';

    const USER_DEFINED_LONG_NAME = 'userDefinedLongName';

    const USER_DEFINED_GRADE_DESCRIPTION = 'userDefinedGradeDescription';

    const GRADE_VALUE = 'gradeValue';

    const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    const STATISTICAL_GRADE_POINT_SCALE_VALUE = 'statisticalGradePointScaleValue';

    const GRADE_ORDER = 'gradeOrder';

    protected $_resourceType = ResourceType::GRADE;

    /**
     * @param \Arbor\Query\Query $query
     * @return Grade[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Grade");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Grade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GRADE, $id);
    }

    /**
     * @return string
     */
    public function getGradeCode()
    {
        return $this->getProperty("gradeCode");
    }

    /**
     * @param string $gradeCode
     */
    public function setGradeCode($gradeCode = null)
    {
        $this->setProperty("gradeCode", $gradeCode);
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
     * @return GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty("gradeSet");
    }

    /**
     * @param GradeSet $gradeSet
     */
    public function setGradeSet(GradeSet $gradeSet = null)
    {
        $this->setProperty("gradeSet", $gradeSet);
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
     * @return string
     */
    public function getUserDefinedShortName()
    {
        return $this->getProperty("userDefinedShortName");
    }

    /**
     * @param string $userDefinedShortName
     */
    public function setUserDefinedShortName($userDefinedShortName = null)
    {
        $this->setProperty("userDefinedShortName", $userDefinedShortName);
    }

    /**
     * @return string
     */
    public function getUserDefinedLongName()
    {
        return $this->getProperty("userDefinedLongName");
    }

    /**
     * @param string $userDefinedLongName
     */
    public function setUserDefinedLongName($userDefinedLongName = null)
    {
        $this->setProperty("userDefinedLongName", $userDefinedLongName);
    }

    /**
     * @return string
     */
    public function getUserDefinedGradeDescription()
    {
        return $this->getProperty("userDefinedGradeDescription");
    }

    /**
     * @param string $userDefinedGradeDescription
     */
    public function setUserDefinedGradeDescription($userDefinedGradeDescription = null)
    {
        $this->setProperty("userDefinedGradeDescription", $userDefinedGradeDescription);
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
     * @return float
     */
    public function getStatisticalGradePointScaleValue()
    {
        return $this->getProperty("statisticalGradePointScaleValue");
    }

    /**
     * @param float $statisticalGradePointScaleValue
     */
    public function setStatisticalGradePointScaleValue($statisticalGradePointScaleValue = null)
    {
        $this->setProperty("statisticalGradePointScaleValue", $statisticalGradePointScaleValue);
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
