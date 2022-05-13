<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class KpiRange extends ModelBase
{
    const KPI = 'kpi';

    const KPI_TARGET = 'kpiTarget';

    const RANGE_NAME = 'rangeName';

    const ABBREVIATION = 'abbreviation';

    const LOWER_VALUE = 'lowerValue';

    const UPPER_VALUE = 'upperValue';

    const VALUE_TYPE = 'valueType';

    const COLOR = 'color';

    protected $_resourceType = ResourceType::KPI_RANGE;

    /**
     * @param Query $query
     * @return KpiRange[] | Collection
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

        $query->setResourceType(ResourceType::KPI_RANGE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return KpiRange
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::KPI_RANGE, $id);
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
     * @return KpiTarget
     */
    public function getKpiTarget()
    {
        return $this->getProperty('kpiTarget');
    }

    /**
     * @param KpiTarget $kpiTarget
     */
    public function setKpiTarget(KpiTarget $kpiTarget = null)
    {
        $this->setProperty('kpiTarget', $kpiTarget);
    }

    /**
     * @return string
     */
    public function getRangeName()
    {
        return $this->getProperty('rangeName');
    }

    /**
     * @param string $rangeName
     */
    public function setRangeName($rangeName = null)
    {
        $this->setProperty('rangeName', $rangeName);
    }

    /**
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->getProperty('abbreviation');
    }

    /**
     * @param string $abbreviation
     */
    public function setAbbreviation($abbreviation = null)
    {
        $this->setProperty('abbreviation', $abbreviation);
    }

    /**
     * @return float
     */
    public function getLowerValue()
    {
        return $this->getProperty('lowerValue');
    }

    /**
     * @param float $lowerValue
     */
    public function setLowerValue($lowerValue = null)
    {
        $this->setProperty('lowerValue', $lowerValue);
    }

    /**
     * @return float
     */
    public function getUpperValue()
    {
        return $this->getProperty('upperValue');
    }

    /**
     * @param float $upperValue
     */
    public function setUpperValue($upperValue = null)
    {
        $this->setProperty('upperValue', $upperValue);
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
    public function setValueType($valueType = null)
    {
        $this->setProperty('valueType', $valueType);
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->getProperty('color');
    }

    /**
     * @param string $color
     */
    public function setColor($color = null)
    {
        $this->setProperty('color', $color);
    }
}
