<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\DashboardSection;
use \Arbor\Model\Kpi;

class DashboardMeasure extends ModelBase
{

    const DASHBOARD_SECTION = 'dashboardSection';

    const KPI = 'kpi';

    const FALLBACK_KPI = 'fallbackKpi';

    const COMPARISON_KPI = 'comparisonKpi';

    const TARGETABLE = 'targetable';

    const DISPLAY_ORDER = 'displayOrder';

    protected $_resourceType = ResourceType::DASHBOARD_MEASURE;

    /**
     * @param \Arbor\Query\Query $query
     * @return DashboardMeasure[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("DashboardMeasure");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DashboardMeasure
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::DASHBOARD_MEASURE, $id);
    }

    /**
     * @return DashboardSection
     */
    public function getDashboardSection()
    {
        return $this->getProperty("dashboardSection");
    }

    /**
     * @param DashboardSection $dashboardSection
     */
    public function setDashboardSection(DashboardSection $dashboardSection = null)
    {
        $this->setProperty("dashboardSection", $dashboardSection);
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
     * @return Kpi
     */
    public function getFallbackKpi()
    {
        return $this->getProperty("fallbackKpi");
    }

    /**
     * @param Kpi $fallbackKpi
     */
    public function setFallbackKpi(Kpi $fallbackKpi = null)
    {
        $this->setProperty("fallbackKpi", $fallbackKpi);
    }

    /**
     * @return Kpi
     */
    public function getComparisonKpi()
    {
        return $this->getProperty("comparisonKpi");
    }

    /**
     * @param Kpi $comparisonKpi
     */
    public function setComparisonKpi(Kpi $comparisonKpi = null)
    {
        $this->setProperty("comparisonKpi", $comparisonKpi);
    }

    /**
     * @return bool
     */
    public function getTargetable()
    {
        return $this->getProperty("targetable");
    }

    /**
     * @param bool $targetable
     */
    public function setTargetable($targetable = null)
    {
        $this->setProperty("targetable", $targetable);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty("displayOrder");
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder($displayOrder = null)
    {
        $this->setProperty("displayOrder", $displayOrder);
    }


}
