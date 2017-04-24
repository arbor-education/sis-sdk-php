<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Site extends ModelBase
{
    const SITE_NAME = 'siteName';

    const SHORT_NAME = 'shortName';

    const SITE_DISPLAY_ORDER = 'siteDisplayOrder';

    protected $_resourceType = ResourceType::SITE;

    /**
     * @param \Arbor\Query\Query $query
     * @return Site[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Site");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Site
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::SITE, $id);
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->getProperty("siteName");
    }

    /**
     * @param string $siteName
     */
    public function setSiteName($siteName = null)
    {
        $this->setProperty("siteName", $siteName);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty("shortName");
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty("shortName", $shortName);
    }

    /**
     * @return int
     */
    public function getSiteDisplayOrder()
    {
        return $this->getProperty("siteDisplayOrder");
    }

    /**
     * @param int $siteDisplayOrder
     */
    public function setSiteDisplayOrder($siteDisplayOrder = null)
    {
        $this->setProperty("siteDisplayOrder", $siteDisplayOrder);
    }
}
