<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class UserLogin extends ModelBase
{
    const USER = 'user';

    const LOGIN_DATETIME = 'loginDatetime';

    const IP_ADDRESS = 'ipAddress';

    const USER_AGENT = 'userAgent';

    const TWO_FACTOR_AUTHENTICATION_METHOD = 'twoFactorAuthenticationMethod';

    const IDENTITY_PROVIDER = 'identityProvider';

    protected $_resourceType = ResourceType::USER_LOGIN;

    /**
     * @param Query $query
     * @return UserLogin[] | Collection
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

        $query->setResourceType(ResourceType::USER_LOGIN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserLogin
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_LOGIN, $id);
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
     * @return \DateTime
     */
    public function getLoginDatetime()
    {
        return $this->getProperty('loginDatetime');
    }

    /**
     * @param \DateTime $loginDatetime
     */
    public function setLoginDatetime(\DateTime $loginDatetime = null)
    {
        $this->setProperty('loginDatetime', $loginDatetime);
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->getProperty('ipAddress');
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress($ipAddress = null)
    {
        $this->setProperty('ipAddress', $ipAddress);
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->getProperty('userAgent');
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent($userAgent = null)
    {
        $this->setProperty('userAgent', $userAgent);
    }

    /**
     * @return string
     */
    public function getTwoFactorAuthenticationMethod()
    {
        return $this->getProperty('twoFactorAuthenticationMethod');
    }

    /**
     * @param string $twoFactorAuthenticationMethod
     */
    public function setTwoFactorAuthenticationMethod($twoFactorAuthenticationMethod = null)
    {
        $this->setProperty('twoFactorAuthenticationMethod', $twoFactorAuthenticationMethod);
    }

    /**
     * @return string
     */
    public function getIdentityProvider()
    {
        return $this->getProperty('identityProvider');
    }

    /**
     * @param string $identityProvider
     */
    public function setIdentityProvider($identityProvider = null)
    {
        $this->setProperty('identityProvider', $identityProvider);
    }

}
