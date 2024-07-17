<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class KpiTarget extends ModelBase
{
    public const KPI = 'kpi';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const TARGET_VALUE = 'targetValue';

    public const TARGET_NAME = 'targetName';

    public const ABBREVIATION = 'abbreviation';

    public const VALUE_TYPE = 'valueType';

    public const BASIS = 'basis';

    protected $_resourceType = ResourceType::KPI_TARGET;

    /**
     * @param Query $query
     * @return KpiTarget[] | Collection
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

        $query->setResourceType(ResourceType::KPI_TARGET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return KpiTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::KPI_TARGET, $id);
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
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return float
     */
    public function getTargetValue()
    {
        return $this->getProperty('targetValue');
    }

    /**
     * @param float $targetValue
     */
    public function setTargetValue(float $targetValue = null)
    {
        $this->setProperty('targetValue', $targetValue);
    }

    /**
     * @return string
     */
    public function getTargetName()
    {
        return $this->getProperty('targetName');
    }

    /**
     * @param string $targetName
     */
    public function setTargetName(string $targetName = null)
    {
        $this->setProperty('targetName', $targetName);
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
}
