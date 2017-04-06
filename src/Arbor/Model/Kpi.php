<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Kpi extends ModelBase
{

    const CODE = 'code';

    const KPI_NAME = 'kpiName';

    const DESCRIPTION = 'description';

    const CATEGORY = 'category';

    const CALCULATION_CLASS = 'calculationClass';

    const CALCULATION_CLASS_PARAMS = 'calculationClassParams';

    const DIRECTION = 'direction';

    const VALUE_TYPE = 'valueType';

    const DATE_RANGE_PERIOD_TYPE = 'dateRangePeriodType';

    const DATE_RANGE_PERIOD_COUNT = 'dateRangePeriodCount';

    const DATE_RANGE_PERIOD_OFFSET = 'dateRangePeriodOffset';

    const DECIMAL_PLACES = 'decimalPlaces';

    const SIGNIFICANT_FIGURES = 'significantFigures';

    const CALCULATE_FOR_SCHOOL = 'calculateForSchool';

    const CALCULATE_FOR_GROUPS = 'calculateForGroups';

    const CALCULATE_FOR_ACADEMIC_UNITS = 'calculateForAcademicUnits';

    const CALCULATE_FOR_STUDENTS = 'calculateForStudents';

    const CALCULATE_FOR_STUDENT_ACADEMIC_UNIT_ENROLMENTS = 'calculateForStudentAcademicUnitEnrolments';

    protected $_resourceType = ResourceType::KPI;

    /**
     * @param \Arbor\Query\Query $query
     * @return Kpi[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Kpi");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Kpi
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::KPI, $id);
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
     * @return string
     */
    public function getKpiName()
    {
        return $this->getProperty("kpiName");
    }

    /**
     * @param string $kpiName
     */
    public function setKpiName($kpiName = null)
    {
        $this->setProperty("kpiName", $kpiName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->getProperty("category");
    }

    /**
     * @param string $category
     */
    public function setCategory($category = null)
    {
        $this->setProperty("category", $category);
    }

    /**
     * @return string
     */
    public function getCalculationClass()
    {
        return $this->getProperty("calculationClass");
    }

    /**
     * @param string $calculationClass
     */
    public function setCalculationClass($calculationClass = null)
    {
        $this->setProperty("calculationClass", $calculationClass);
    }

    /**
     * @return string
     */
    public function getCalculationClassParams()
    {
        return $this->getProperty("calculationClassParams");
    }

    /**
     * @param string $calculationClassParams
     */
    public function setCalculationClassParams($calculationClassParams = null)
    {
        $this->setProperty("calculationClassParams", $calculationClassParams);
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->getProperty("direction");
    }

    /**
     * @param string $direction
     */
    public function setDirection($direction = null)
    {
        $this->setProperty("direction", $direction);
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->getProperty("valueType");
    }

    /**
     * @param string $valueType
     */
    public function setValueType($valueType = null)
    {
        $this->setProperty("valueType", $valueType);
    }

    /**
     * @return string
     */
    public function getDateRangePeriodType()
    {
        return $this->getProperty("dateRangePeriodType");
    }

    /**
     * @param string $dateRangePeriodType
     */
    public function setDateRangePeriodType($dateRangePeriodType = null)
    {
        $this->setProperty("dateRangePeriodType", $dateRangePeriodType);
    }

    /**
     * @return int
     */
    public function getDateRangePeriodCount()
    {
        return $this->getProperty("dateRangePeriodCount");
    }

    /**
     * @param int $dateRangePeriodCount
     */
    public function setDateRangePeriodCount($dateRangePeriodCount = null)
    {
        $this->setProperty("dateRangePeriodCount", $dateRangePeriodCount);
    }

    /**
     * @return int
     */
    public function getDateRangePeriodOffset()
    {
        return $this->getProperty("dateRangePeriodOffset");
    }

    /**
     * @param int $dateRangePeriodOffset
     */
    public function setDateRangePeriodOffset($dateRangePeriodOffset = null)
    {
        $this->setProperty("dateRangePeriodOffset", $dateRangePeriodOffset);
    }

    /**
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->getProperty("decimalPlaces");
    }

    /**
     * @param int $decimalPlaces
     */
    public function setDecimalPlaces($decimalPlaces = null)
    {
        $this->setProperty("decimalPlaces", $decimalPlaces);
    }

    /**
     * @return int
     */
    public function getSignificantFigures()
    {
        return $this->getProperty("significantFigures");
    }

    /**
     * @param int $significantFigures
     */
    public function setSignificantFigures($significantFigures = null)
    {
        $this->setProperty("significantFigures", $significantFigures);
    }

    /**
     * @return bool
     */
    public function getCalculateForSchool()
    {
        return $this->getProperty("calculateForSchool");
    }

    /**
     * @param bool $calculateForSchool
     */
    public function setCalculateForSchool($calculateForSchool = null)
    {
        $this->setProperty("calculateForSchool", $calculateForSchool);
    }

    /**
     * @return bool
     */
    public function getCalculateForGroups()
    {
        return $this->getProperty("calculateForGroups");
    }

    /**
     * @param bool $calculateForGroups
     */
    public function setCalculateForGroups($calculateForGroups = null)
    {
        $this->setProperty("calculateForGroups", $calculateForGroups);
    }

    /**
     * @return bool
     */
    public function getCalculateForAcademicUnits()
    {
        return $this->getProperty("calculateForAcademicUnits");
    }

    /**
     * @param bool $calculateForAcademicUnits
     */
    public function setCalculateForAcademicUnits($calculateForAcademicUnits = null)
    {
        $this->setProperty("calculateForAcademicUnits", $calculateForAcademicUnits);
    }

    /**
     * @return bool
     */
    public function getCalculateForStudents()
    {
        return $this->getProperty("calculateForStudents");
    }

    /**
     * @param bool $calculateForStudents
     */
    public function setCalculateForStudents($calculateForStudents = null)
    {
        $this->setProperty("calculateForStudents", $calculateForStudents);
    }

    /**
     * @return bool
     */
    public function getCalculateForStudentAcademicUnitEnrolments()
    {
        return $this->getProperty("calculateForStudentAcademicUnitEnrolments");
    }

    /**
     * @param bool $calculateForStudentAcademicUnitEnrolments
     */
    public function setCalculateForStudentAcademicUnitEnrolments($calculateForStudentAcademicUnitEnrolments = null)
    {
        $this->setProperty("calculateForStudentAcademicUnitEnrolments", $calculateForStudentAcademicUnitEnrolments);
    }


}
