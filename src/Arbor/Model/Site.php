<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Site extends ModelBase
{
    public const SITE_NAME = 'siteName';

    public const SHORT_NAME = 'shortName';

    public const SITE_DISPLAY_ORDER = 'siteDisplayOrder';

    protected $_resourceType = ResourceType::SITE;

    /**
     * @param Query $query
     * @return Site[] | Collection
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
    public function setSiteName(string $siteName = null)
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
    public function setShortName(string $shortName = null)
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
    public function setSiteDisplayOrder(int $siteDisplayOrder = null)
    {
        $this->setProperty('siteDisplayOrder', $siteDisplayOrder);
    }
}
