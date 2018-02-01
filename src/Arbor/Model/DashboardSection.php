<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DashboardSection extends ModelBase
{

    const DASHBOARD = 'dashboard';

    const CODE = 'code';

    const TITLE = 'title';

    const ICON = 'icon';

    const DISPLAY_ORDER = 'displayOrder';

    protected $_resourceType = ResourceType::DASHBOARD_SECTION;

    /**
     * @param Query $query
     * @return DashboardSection[] | Collection
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

        $query->setResourceType(ResourceType::DASHBOARD_SECTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DashboardSection
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DASHBOARD_SECTION, $id);
    }

    /**
     * @return Dashboard
     */
    public function getDashboard()
    {
        return $this->getProperty('dashboard');
    }

    /**
     * @param Dashboard $dashboard
     */
    public function setDashboard(Dashboard $dashboard = null)
    {
        $this->setProperty('dashboard', $dashboard);
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
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle($title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->getProperty('icon');
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon = null)
    {
        $this->setProperty('icon', $icon);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty('displayOrder');
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder($displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
    }


}
