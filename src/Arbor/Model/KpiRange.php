<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class KpiRange extends ModelBase
{
    public const KPI = 'kpi';

    public const KPI_TARGET = 'kpiTarget';

    public const RANGE_NAME = 'rangeName';

    public const ABBREVIATION = 'abbreviation';

    public const LOWER_VALUE = 'lowerValue';

    public const UPPER_VALUE = 'upperValue';

    public const VALUE_TYPE = 'valueType';

    public const COLOR = 'color';

    protected $_resourceType = ResourceType::KPI_RANGE;

    /**
     * @param Query $query
     * @return KpiRange[] | Collection
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
     * @return \Arbor\Model\KpiTarget
     */
    public function getKpiTarget()
    {
        return $this->getProperty('kpiTarget');
    }

    /**
     * @param \Arbor\Model\KpiTarget $kpiTarget
     */
    public function setKpiTarget(\Arbor\Model\KpiTarget $kpiTarget = null)
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
    public function setRangeName(string $rangeName = null)
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
    public function setAbbreviation(string $abbreviation = null)
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
    public function setLowerValue(float $lowerValue = null)
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
    public function setUpperValue(float $upperValue = null)
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
    public function setValueType(string $valueType = null)
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
    public function setColor(string $color = null)
    {
        $this->setProperty('color', $color);
    }
}
