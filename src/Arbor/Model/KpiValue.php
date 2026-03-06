<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class KpiValue extends ModelBase
{
    public const KPI = 'kpi';

    public const KPI_CATEGORY = 'kpiCategory';

    public const REFERENCE_DATETIME = 'referenceDatetime';

    public const CALCULATION_RANGE_START_DATETIME = 'calculationRangeStartDatetime';

    public const CALCULATION_RANGE_END_DATETIME = 'calculationRangeEndDatetime';

    public const BASIS = 'basis';

    public const VALUE = 'value';

    public const KPI_RANGE = 'kpiRange';

    public const RECALCULATION_SCHEDULED_DATETIME = 'recalculationScheduledDatetime';

    public const RECALCULATION_STARTED_DATETIME = 'recalculationStartedDatetime';

    public const LAST_CALCULATED_DATETIME = 'lastCalculatedDatetime';

    protected $_resourceType = ResourceType::KPI_VALUE;

    /**
     * @param Query $query
     * @return KpiValue[] | Collection
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

        $query->setResourceType(ResourceType::KPI_VALUE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return KpiValue
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::KPI_VALUE, $id);
    }

    /**
     * @return \Arbor\Model\Kpi
     */
    public function getKpi()
    {
        return $this->getProperty('kpi');
    }

    /**
     * @param \Arbor\Model\Kpi $kpi
     */
    public function setKpi(\Arbor\Model\Kpi $kpi = null)
    {
        $this->setProperty('kpi', $kpi);
    }

    /**
     * @return string
     */
    public function getKpiCategory()
    {
        return $this->getProperty('kpiCategory');
    }

    /**
     * @param string $kpiCategory
     */
    public function setKpiCategory(string $kpiCategory = null)
    {
        $this->setProperty('kpiCategory', $kpiCategory);
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDatetime()
    {
        return $this->getProperty('referenceDatetime');
    }

    /**
     * @param \DateTime $referenceDatetime
     */
    public function setReferenceDatetime(\DateTime $referenceDatetime = null)
    {
        $this->setProperty('referenceDatetime', $referenceDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCalculationRangeStartDatetime()
    {
        return $this->getProperty('calculationRangeStartDatetime');
    }

    /**
     * @param \DateTime $calculationRangeStartDatetime
     */
    public function setCalculationRangeStartDatetime(\DateTime $calculationRangeStartDatetime = null)
    {
        $this->setProperty('calculationRangeStartDatetime', $calculationRangeStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCalculationRangeEndDatetime()
    {
        return $this->getProperty('calculationRangeEndDatetime');
    }

    /**
     * @param \DateTime $calculationRangeEndDatetime
     */
    public function setCalculationRangeEndDatetime(\DateTime $calculationRangeEndDatetime = null)
    {
        $this->setProperty('calculationRangeEndDatetime', $calculationRangeEndDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getBasis()
    {
        return $this->getProperty('basis');
    }

    /**
     * @param ModelBase $basis
     */
    public function setBasis(\ModelBase $basis = null)
    {
        $this->setProperty('basis', $basis);
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->getProperty('value');
    }

    /**
     * @param float $value
     */
    public function setValue(float $value = null)
    {
        $this->setProperty('value', $value);
    }

    /**
     * @return \Arbor\Model\KpiRange
     */
    public function getKpiRange()
    {
        return $this->getProperty('kpiRange');
    }

    /**
     * @param \Arbor\Model\KpiRange $kpiRange
     */
    public function setKpiRange(\Arbor\Model\KpiRange $kpiRange = null)
    {
        $this->setProperty('kpiRange', $kpiRange);
    }

    /**
     * @return \DateTime
     */
    public function getRecalculationScheduledDatetime()
    {
        return $this->getProperty('recalculationScheduledDatetime');
    }

    /**
     * @param \DateTime $recalculationScheduledDatetime
     */
    public function setRecalculationScheduledDatetime(\DateTime $recalculationScheduledDatetime = null)
    {
        $this->setProperty('recalculationScheduledDatetime', $recalculationScheduledDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRecalculationStartedDatetime()
    {
        return $this->getProperty('recalculationStartedDatetime');
    }

    /**
     * @param \DateTime $recalculationStartedDatetime
     */
    public function setRecalculationStartedDatetime(\DateTime $recalculationStartedDatetime = null)
    {
        $this->setProperty('recalculationStartedDatetime', $recalculationStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getLastCalculatedDatetime()
    {
        return $this->getProperty('lastCalculatedDatetime');
    }

    /**
     * @param \DateTime $lastCalculatedDatetime
     */
    public function setLastCalculatedDatetime(\DateTime $lastCalculatedDatetime = null)
    {
        $this->setProperty('lastCalculatedDatetime', $lastCalculatedDatetime);
    }
}
