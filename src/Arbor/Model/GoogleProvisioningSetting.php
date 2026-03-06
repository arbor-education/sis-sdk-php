<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class GoogleProvisioningSetting extends ModelBase
{
    public const PROVISION_STAFF_USERS = 'provisionStaffUsers';

    public const PROVISION_STUDENT_USERS = 'provisionStudentUsers';

    public const AUTH_CONFIG = 'authConfig';

    public const ACCESS_TOKEN = 'accessToken';

    public const LAST_SYNC_DATETIME = 'lastSyncDatetime';

    protected $_resourceType = ResourceType::GOOGLE_PROVISIONING_SETTING;

    /**
     * @param Query $query
     * @return GoogleProvisioningSetting[] | Collection
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

        $query->setResourceType(ResourceType::GOOGLE_PROVISIONING_SETTING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return GoogleProvisioningSetting
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GOOGLE_PROVISIONING_SETTING, $id);
    }

    /**
     * @return bool
     */
    public function getProvisionStaffUsers()
    {
        return $this->getProperty('provisionStaffUsers');
    }

    /**
     * @param bool $provisionStaffUsers
     */
    public function setProvisionStaffUsers(bool $provisionStaffUsers = null)
    {
        $this->setProperty('provisionStaffUsers', $provisionStaffUsers);
    }

    /**
     * @return bool
     */
    public function getProvisionStudentUsers()
    {
        return $this->getProperty('provisionStudentUsers');
    }

    /**
     * @param bool $provisionStudentUsers
     */
    public function setProvisionStudentUsers(bool $provisionStudentUsers = null)
    {
        $this->setProperty('provisionStudentUsers', $provisionStudentUsers);
    }

    /**
     * @return string
     */
    public function getAuthConfig()
    {
        return $this->getProperty('authConfig');
    }

    /**
     * @param string $authConfig
     */
    public function setAuthConfig(string $authConfig = null)
    {
        $this->setProperty('authConfig', $authConfig);
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->getProperty('accessToken');
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken(string $accessToken = null)
    {
        $this->setProperty('accessToken', $accessToken);
    }

    /**
     * @return \DateTime
     */
    public function getLastSyncDatetime()
    {
        return $this->getProperty('lastSyncDatetime');
    }

    /**
     * @param \DateTime $lastSyncDatetime
     */
    public function setLastSyncDatetime(\DateTime $lastSyncDatetime = null)
    {
        $this->setProperty('lastSyncDatetime', $lastSyncDatetime);
    }
}
