<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DataExport extends ModelBase
{
    const USER = 'user';

    const MODULE = 'module';

    const CONTROLLER = 'controller';

    const ACTION = 'action';

    const PARAMS = 'params';

    const HASH = 'hash';

    const LABEL = 'label';

    const REQUIRES_AUTHENTICATION = 'requiresAuthentication';

    const DEFAULT_EXPORT_TYPE = 'defaultExportType';

    const LAST_EXPORT_DATETIME = 'lastExportDatetime';

    const LAST_EXPORT_TITLE = 'lastExportTitle';

    protected $_resourceType = ResourceType::DATA_EXPORT;

    /**
     * @param Query $query
     * @return DataExport[] | Collection
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

        $query->setResourceType(ResourceType::DATA_EXPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataExport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_EXPORT, $id);
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
    public function getModule()
    {
        return $this->getProperty('module');
    }

    /**
     * @param string $module
     */
    public function setModule($module = null)
    {
        $this->setProperty('module', $module);
    }

    /**
     * @return string
     */
    public function getController()
    {
        return $this->getProperty('controller');
    }

    /**
     * @param string $controller
     */
    public function setController($controller = null)
    {
        $this->setProperty('controller', $controller);
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->getProperty('action');
    }

    /**
     * @param string $action
     */
    public function setAction($action = null)
    {
        $this->setProperty('action', $action);
    }

    /**
     * @return string
     */
    public function getParams()
    {
        return $this->getProperty('params');
    }

    /**
     * @param string $params
     */
    public function setParams($params = null)
    {
        $this->setProperty('params', $params);
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->getProperty('hash');
    }

    /**
     * @param string $hash
     */
    public function setHash($hash = null)
    {
        $this->setProperty('hash', $hash);
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->getProperty('label');
    }

    /**
     * @param string $label
     */
    public function setLabel($label = null)
    {
        $this->setProperty('label', $label);
    }

    /**
     * @return bool
     */
    public function getRequiresAuthentication()
    {
        return $this->getProperty('requiresAuthentication');
    }

    /**
     * @param bool $requiresAuthentication
     */
    public function setRequiresAuthentication($requiresAuthentication = null)
    {
        $this->setProperty('requiresAuthentication', $requiresAuthentication);
    }

    /**
     * @return string
     */
    public function getDefaultExportType()
    {
        return $this->getProperty('defaultExportType');
    }

    /**
     * @param string $defaultExportType
     */
    public function setDefaultExportType($defaultExportType = null)
    {
        $this->setProperty('defaultExportType', $defaultExportType);
    }

    /**
     * @return \DateTime
     */
    public function getLastExportDatetime()
    {
        return $this->getProperty('lastExportDatetime');
    }

    /**
     * @param \DateTime $lastExportDatetime
     */
    public function setLastExportDatetime(\DateTime $lastExportDatetime = null)
    {
        $this->setProperty('lastExportDatetime', $lastExportDatetime);
    }

    /**
     * @return string
     */
    public function getLastExportTitle()
    {
        return $this->getProperty('lastExportTitle');
    }

    /**
     * @param string $lastExportTitle
     */
    public function setLastExportTitle($lastExportTitle = null)
    {
        $this->setProperty('lastExportTitle', $lastExportTitle);
    }
}
