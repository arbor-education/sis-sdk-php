<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Kpi;

class KpiTarget extends ModelBase
{
    const KPI = 'kpi';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const TARGET_VALUE = 'targetValue';

    const TARGET_NAME = 'targetName';

    const ABBREVIATION = 'abbreviation';

    const VALUE_TYPE = 'valueType';

    const BASIS = 'basis';

    protected $_resourceType = ResourceType::KPI_TARGET;

    /**
     * @param \Arbor\Query\Query $query
     * @return KpiTarget[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("KpiTarget");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return KpiTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::KPI_TARGET, $id);
    }

    /**
     * @return Kpi
     */
    public function getKpi()
    {
        return $this->getProperty("kpi");
    }

    /**
     * @param Kpi $kpi
     */
    public function setKpi(Kpi $kpi = null)
    {
        $this->setProperty("kpi", $kpi);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return float
     */
    public function getTargetValue()
    {
        return $this->getProperty("targetValue");
    }

    /**
     * @param float $targetValue
     */
    public function setTargetValue($targetValue = null)
    {
        $this->setProperty("targetValue", $targetValue);
    }

    /**
     * @return string
     */
    public function getTargetName()
    {
        return $this->getProperty("targetName");
    }

    /**
     * @param string $targetName
     */
    public function setTargetName($targetName = null)
    {
        $this->setProperty("targetName", $targetName);
    }

    /**
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->getProperty("abbreviation");
    }

    /**
     * @param string $abbreviation
     */
    public function setAbbreviation($abbreviation = null)
    {
        $this->setProperty("abbreviation", $abbreviation);
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
     * @return ModelBase
     */
    public function getBasis()
    {
        return $this->getProperty("basis");
    }

    /**
     * @param ModelBase $basis
     */
    public function setBasis(ModelBase $basis = null)
    {
        $this->setProperty("basis", $basis);
    }
}
