<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class GoogleProvisioningSetting extends ModelBase
{
    const PROVISION_STAFF_USERS = 'provisionStaffUsers';

    const PROVISION_STUDENT_USERS = 'provisionStudentUsers';

    const AUTH_CONFIG = 'authConfig';

    const ACCESS_TOKEN = 'accessToken';

    const LAST_SYNC_DATETIME = 'lastSyncDatetime';

    protected $_resourceType = ResourceType::GOOGLE_PROVISIONING_SETTING;

    /**
     * @param Query $query
     * @return GoogleProvisioningSetting[] | Collection
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
    public function setProvisionStaffUsers($provisionStaffUsers = null)
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
    public function setProvisionStudentUsers($provisionStudentUsers = null)
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
    public function setAuthConfig($authConfig = null)
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
    public function setAccessToken($accessToken = null)
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
