<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class KpiValue extends ModelBase
{
    const KPI = 'kpi';

    const KPI_CATEGORY = 'kpiCategory';

    const REFERENCE_DATETIME = 'referenceDatetime';

    const CALCULATION_RANGE_START_DATETIME = 'calculationRangeStartDatetime';

    const CALCULATION_RANGE_END_DATETIME = 'calculationRangeEndDatetime';

    const BASIS = 'basis';

    const VALUE = 'value';

    const KPI_RANGE = 'kpiRange';

    const RECALCULATION_SCHEDULED_DATETIME = 'recalculationScheduledDatetime';

    const RECALCULATION_STARTED_DATETIME = 'recalculationStartedDatetime';

    const LAST_CALCULATED_DATETIME = 'lastCalculatedDatetime';

    protected $_resourceType = ResourceType::KPI_VALUE;

    /**
     * @param Query $query
     * @return KpiValue[] | Collection
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
     * @return Kpi
     */
    public function getKpi()
    {
        return $this->getProperty('kpi');
    }

    /**
     * @param Kpi $kpi
     */
    public function setKpi(Kpi $kpi = null)
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
    public function setKpiCategory($kpiCategory = null)
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
    public function setBasis(ModelBase $basis = null)
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
    public function setValue($value = null)
    {
        $this->setProperty('value', $value);
    }

    /**
     * @return KpiRange
     */
    public function getKpiRange()
    {
        return $this->getProperty('kpiRange');
    }

    /**
     * @param KpiRange $kpiRange
     */
    public function setKpiRange(KpiRange $kpiRange = null)
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
