<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DataExport extends ModelBase
{
    public const USER = 'user';

    public const MODULE = 'module';

    public const CONTROLLER = 'controller';

    public const ACTION = 'action';

    public const PARAMS = 'params';

    public const HASH = 'hash';

    public const LABEL = 'label';

    public const REQUIRES_AUTHENTICATION = 'requiresAuthentication';

    public const DEFAULT_EXPORT_TYPE = 'defaultExportType';

    public const LAST_EXPORT_DATETIME = 'lastExportDatetime';

    public const LAST_EXPORT_TITLE = 'lastExportTitle';

    protected $_resourceType = ResourceType::DATA_EXPORT;

    /**
     * @param Query $query
     * @return DataExport[] | Collection
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
     * @return \Arbor\Model\User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param \Arbor\Model\User $user
     */
    public function setUser(\Arbor\Model\User $user = null)
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
    public function setModule(string $module = null)
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
    public function setController(string $controller = null)
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
    public function setAction(string $action = null)
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
    public function setParams(string $params = null)
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
    public function setHash(string $hash = null)
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
    public function setLabel(string $label = null)
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
    public function setRequiresAuthentication(bool $requiresAuthentication = null)
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
    public function setDefaultExportType(string $defaultExportType = null)
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
    public function setLastExportTitle(string $lastExportTitle = null)
    {
        $this->setProperty('lastExportTitle', $lastExportTitle);
    }
}
