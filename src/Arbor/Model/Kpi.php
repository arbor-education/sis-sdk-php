<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Kpi extends ModelBase
{
    public const CODE = 'code';

    public const KPI_NAME = 'kpiName';

    public const DESCRIPTION = 'description';

    public const CATEGORY = 'category';

    public const CALCULATION_CLASS = 'calculationClass';

    public const CALCULATION_CLASS_PARAMS = 'calculationClassParams';

    public const DIRECTION = 'direction';

    public const VALUE_TYPE = 'valueType';

    public const DATE_RANGE_PERIOD_TYPE = 'dateRangePeriodType';

    public const DATE_RANGE_PERIOD_COUNT = 'dateRangePeriodCount';

    public const DATE_RANGE_PERIOD_OFFSET = 'dateRangePeriodOffset';

    public const DECIMAL_PLACES = 'decimalPlaces';

    public const SIGNIFICANT_FIGURES = 'significantFigures';

    public const CALCULATE_FOR_SCHOOL = 'calculateForSchool';

    public const CALCULATE_FOR_GROUPS = 'calculateForGroups';

    public const CALCULATE_FOR_ACADEMIC_UNITS = 'calculateForAcademicUnits';

    public const CALCULATE_FOR_STUDENTS = 'calculateForStudents';

    public const CALCULATE_FOR_STUDENT_ACADEMIC_UNIT_ENROLMENTS = 'calculateForStudentAcademicUnitEnrolments';

    protected $_resourceType = ResourceType::KPI;

    /**
     * @param Query $query
     * @return Kpi[] | Collection
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

        $query->setResourceType(ResourceType::KPI);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Kpi
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::KPI, $id);
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
     * @return string
     */
    public function getKpiName()
    {
        return $this->getProperty('kpiName');
    }

    /**
     * @param string $kpiName
     */
    public function setKpiName(string $kpiName = null)
    {
        $this->setProperty('kpiName', $kpiName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->getProperty('category');
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category = null)
    {
        $this->setProperty('category', $category);
    }

    /**
     * @return string
     */
    public function getCalculationClass()
    {
        return $this->getProperty('calculationClass');
    }

    /**
     * @param string $calculationClass
     */
    public function setCalculationClass(string $calculationClass = null)
    {
        $this->setProperty('calculationClass', $calculationClass);
    }

    /**
     * @return string
     */
    public function getCalculationClassParams()
    {
        return $this->getProperty('calculationClassParams');
    }

    /**
     * @param string $calculationClassParams
     */
    public function setCalculationClassParams(string $calculationClassParams = null)
    {
        $this->setProperty('calculationClassParams', $calculationClassParams);
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->getProperty('direction');
    }

    /**
     * @param string $direction
     */
    public function setDirection(string $direction = null)
    {
        $this->setProperty('direction', $direction);
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->getProperty('valueType');
    }

    /**
     * @param string $valueType
     */
    public function setValueType(string $valueType = null)
    {
        $this->setProperty('valueType', $valueType);
    }

    /**
     * @return string
     */
    public function getDateRangePeriodType()
    {
        return $this->getProperty('dateRangePeriodType');
    }

    /**
     * @param string $dateRangePeriodType
     */
    public function setDateRangePeriodType(string $dateRangePeriodType = null)
    {
        $this->setProperty('dateRangePeriodType', $dateRangePeriodType);
    }

    /**
     * @return int
     */
    public function getDateRangePeriodCount()
    {
        return $this->getProperty('dateRangePeriodCount');
    }

    /**
     * @param int $dateRangePeriodCount
     */
    public function setDateRangePeriodCount(int $dateRangePeriodCount = null)
    {
        $this->setProperty('dateRangePeriodCount', $dateRangePeriodCount);
    }

    /**
     * @return int
     */
    public function getDateRangePeriodOffset()
    {
        return $this->getProperty('dateRangePeriodOffset');
    }

    /**
     * @param int $dateRangePeriodOffset
     */
    public function setDateRangePeriodOffset(int $dateRangePeriodOffset = null)
    {
        $this->setProperty('dateRangePeriodOffset', $dateRangePeriodOffset);
    }

    /**
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->getProperty('decimalPlaces');
    }

    /**
     * @param int $decimalPlaces
     */
    public function setDecimalPlaces(int $decimalPlaces = null)
    {
        $this->setProperty('decimalPlaces', $decimalPlaces);
    }

    /**
     * @return int
     */
    public function getSignificantFigures()
    {
        return $this->getProperty('significantFigures');
    }

    /**
     * @param int $significantFigures
     */
    public function setSignificantFigures(int $significantFigures = null)
    {
        $this->setProperty('significantFigures', $significantFigures);
    }

    /**
     * @return bool
     */
    public function getCalculateForSchool()
    {
        return $this->getProperty('calculateForSchool');
    }

    /**
     * @param bool $calculateForSchool
     */
    public function setCalculateForSchool(bool $calculateForSchool = null)
    {
        $this->setProperty('calculateForSchool', $calculateForSchool);
    }

    /**
     * @return bool
     */
    public function getCalculateForGroups()
    {
        return $this->getProperty('calculateForGroups');
    }

    /**
     * @param bool $calculateForGroups
     */
    public function setCalculateForGroups(bool $calculateForGroups = null)
    {
        $this->setProperty('calculateForGroups', $calculateForGroups);
    }

    /**
     * @return bool
     */
    public function getCalculateForAcademicUnits()
    {
        return $this->getProperty('calculateForAcademicUnits');
    }

    /**
     * @param bool $calculateForAcademicUnits
     */
    public function setCalculateForAcademicUnits(bool $calculateForAcademicUnits = null)
    {
        $this->setProperty('calculateForAcademicUnits', $calculateForAcademicUnits);
    }

    /**
     * @return bool
     */
    public function getCalculateForStudents()
    {
        return $this->getProperty('calculateForStudents');
    }

    /**
     * @param bool $calculateForStudents
     */
    public function setCalculateForStudents(bool $calculateForStudents = null)
    {
        $this->setProperty('calculateForStudents', $calculateForStudents);
    }

    /**
     * @return bool
     */
    public function getCalculateForStudentAcademicUnitEnrolments()
    {
        return $this->getProperty('calculateForStudentAcademicUnitEnrolments');
    }

    /**
     * @param bool $calculateForStudentAcademicUnitEnrolments
     */
    public function setCalculateForStudentAcademicUnitEnrolments(bool $calculateForStudentAcademicUnitEnrolments = null)
    {
        $this->setProperty('calculateForStudentAcademicUnitEnrolments', $calculateForStudentAcademicUnitEnrolments);
    }
}
