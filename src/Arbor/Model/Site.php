<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Site extends ModelBase
{
    const SITE_NAME = 'siteName';

    const SHORT_NAME = 'shortName';

    const SITE_DISPLAY_ORDER = 'siteDisplayOrder';

    protected $_resourceType = ResourceType::SITE;

    /**
     * @param Query $query
     * @return Site[] | Collection
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

        $query->setResourceType(ResourceType::SITE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Site
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SITE, $id);
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->getProperty('siteName');
    }

    /**
     * @param string $siteName
     */
    public function setSiteName($siteName = null)
    {
        $this->setProperty('siteName', $siteName);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return int
     */
    public function getSiteDisplayOrder()
    {
        return $this->getProperty('siteDisplayOrder');
    }

    /**
     * @param int $siteDisplayOrder
     */
    public function setSiteDisplayOrder($siteDisplayOrder = null)
    {
        $this->setProperty('siteDisplayOrder', $siteDisplayOrder);
    }

}
