<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class VisualTableConfig extends ModelBase
{

    const PAGE_CONTEXT = 'pageContext';

    const TABLE_URL = 'tableUrl';

    const USER = 'user';

    const EXTRA_CONTEXT = 'extraContext';

    const CONFIG = 'config';

    protected $_resourceType = ResourceType::VISUAL_TABLE_CONFIG;

    /**
     * @param Query $query
     * @return VisualTableConfig[] | Collection
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

        $query->setResourceType(ResourceType::VISUAL_TABLE_CONFIG);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return VisualTableConfig
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::VISUAL_TABLE_CONFIG, $id);
    }

    /**
     * @return string
     */
    public function getPageContext()
    {
        return $this->getProperty('pageContext');
    }

    /**
     * @param string $pageContext
     */
    public function setPageContext($pageContext = null)
    {
        $this->setProperty('pageContext', $pageContext);
    }

    /**
     * @return string
     */
    public function getTableUrl()
    {
        return $this->getProperty('tableUrl');
    }

    /**
     * @param string $tableUrl
     */
    public function setTableUrl($tableUrl = null)
    {
        $this->setProperty('tableUrl', $tableUrl);
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param User $user
     */
    public function setUser(User $user = null)
    {
        $this->setProperty('user', $user);
    }

    /**
     * @return string
     */
    public function getExtraContext()
    {
        return $this->getProperty('extraContext');
    }

    /**
     * @param string $extraContext
     */
    public function setExtraContext($extraContext = null)
    {
        $this->setProperty('extraContext', $extraContext);
    }

    /**
     * @return string
     */
    public function getConfig()
    {
        return $this->getProperty('config');
    }

    /**
     * @param string $config
     */
    public function setConfig($config = null)
    {
        $this->setProperty('config', $config);
    }


}
