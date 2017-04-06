<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Staff;
use \Arbor\Model\Student;
use \Arbor\Model\Guardian;

class User extends ModelBase
{

    const STAFF = 'staff';

    const STUDENT = 'student';

    const GUARDIAN = 'guardian';

    const USERNAME = 'username';

    const EMAIL = 'email';

    const PASSWORD_HASH = 'passwordHash';

    const AUTHENTICATION_TYPE = 'authenticationType';

    const AUTHENTICATION_TOKEN = 'authenticationToken';

    const AUTHENTICATION_TOKEN_EXPIRY_DATETIME = 'authenticationTokenExpiryDatetime';

    const CURRENT_IP_ADDRESS = 'currentIpAddress';

    const LAST_ACCESS_DATETIME = 'lastAccessDatetime';

    const PASSWORD_LAST_CHANGED_DATETIME = 'passwordLastChangedDatetime';

    const ENABLED = 'enabled';

    const VERIFIED_DATETIME = 'verifiedDatetime';

    const TERMS_ACCEPTED_DATETIME = 'termsAcceptedDatetime';

    const WELCOME_MESSAGE_DATETIME = 'welcomeMessageDatetime';

    const TWO_FACTOR_AUTH_METHOD = 'twoFactorAuthMethod';

    const TWO_FACTOR_DEVICE_IDENTIFIER = 'twoFactorDeviceIdentifier';

    protected $_resourceType = ResourceType::USER;

    /**
     * @param \Arbor\Query\Query $query
     * @return User[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("User");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return User
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::USER, $id);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty("staff");
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty("staff", $staff);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return Guardian
     */
    public function getGuardian()
    {
        return $this->getProperty("guardian");
    }

    /**
     * @param Guardian $guardian
     */
    public function setGuardian(Guardian $guardian = null)
    {
        $this->setProperty("guardian", $guardian);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->getProperty("username");
    }

    /**
     * @param string $username
     */
    public function setUsername($username = null)
    {
        $this->setProperty("username", $username);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getProperty("email");
    }

    /**
     * @param string $email
     */
    public function setEmail($email = null)
    {
        $this->setProperty("email", $email);
    }

    /**
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->getProperty("passwordHash");
    }

    /**
     * @param string $passwordHash
     */
    public function setPasswordHash($passwordHash = null)
    {
        $this->setProperty("passwordHash", $passwordHash);
    }

    /**
     * @return string
     */
    public function getAuthenticationType()
    {
        return $this->getProperty("authenticationType");
    }

    /**
     * @param string $authenticationType
     */
    public function setAuthenticationType($authenticationType = null)
    {
        $this->setProperty("authenticationType", $authenticationType);
    }

    /**
     * @return string
     */
    public function getAuthenticationToken()
    {
        return $this->getProperty("authenticationToken");
    }

    /**
     * @param string $authenticationToken
     */
    public function setAuthenticationToken($authenticationToken = null)
    {
        $this->setProperty("authenticationToken", $authenticationToken);
    }

    /**
     * @return \DateTime
     */
    public function getAuthenticationTokenExpiryDatetime()
    {
        return $this->getProperty("authenticationTokenExpiryDatetime");
    }

    /**
     * @param \DateTime $authenticationTokenExpiryDatetime
     */
    public function setAuthenticationTokenExpiryDatetime(\DateTime $authenticationTokenExpiryDatetime = null)
    {
        $this->setProperty("authenticationTokenExpiryDatetime", $authenticationTokenExpiryDatetime);
    }

    /**
     * @return string
     */
    public function getCurrentIpAddress()
    {
        return $this->getProperty("currentIpAddress");
    }

    /**
     * @param string $currentIpAddress
     */
    public function setCurrentIpAddress($currentIpAddress = null)
    {
        $this->setProperty("currentIpAddress", $currentIpAddress);
    }

    /**
     * @return \DateTime
     */
    public function getLastAccessDatetime()
    {
        return $this->getProperty("lastAccessDatetime");
    }

    /**
     * @param \DateTime $lastAccessDatetime
     */
    public function setLastAccessDatetime(\DateTime $lastAccessDatetime = null)
    {
        $this->setProperty("lastAccessDatetime", $lastAccessDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPasswordLastChangedDatetime()
    {
        return $this->getProperty("passwordLastChangedDatetime");
    }

    /**
     * @param \DateTime $passwordLastChangedDatetime
     */
    public function setPasswordLastChangedDatetime(\DateTime $passwordLastChangedDatetime = null)
    {
        $this->setProperty("passwordLastChangedDatetime", $passwordLastChangedDatetime);
    }

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->getProperty("enabled");
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled = null)
    {
        $this->setProperty("enabled", $enabled);
    }

    /**
     * @return \DateTime
     */
    public function getVerifiedDatetime()
    {
        return $this->getProperty("verifiedDatetime");
    }

    /**
     * @param \DateTime $verifiedDatetime
     */
    public function setVerifiedDatetime(\DateTime $verifiedDatetime = null)
    {
        $this->setProperty("verifiedDatetime", $verifiedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getTermsAcceptedDatetime()
    {
        return $this->getProperty("termsAcceptedDatetime");
    }

    /**
     * @param \DateTime $termsAcceptedDatetime
     */
    public function setTermsAcceptedDatetime(\DateTime $termsAcceptedDatetime = null)
    {
        $this->setProperty("termsAcceptedDatetime", $termsAcceptedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getWelcomeMessageDatetime()
    {
        return $this->getProperty("welcomeMessageDatetime");
    }

    /**
     * @param \DateTime $welcomeMessageDatetime
     */
    public function setWelcomeMessageDatetime(\DateTime $welcomeMessageDatetime = null)
    {
        $this->setProperty("welcomeMessageDatetime", $welcomeMessageDatetime);
    }

    /**
     * @return string
     */
    public function getTwoFactorAuthMethod()
    {
        return $this->getProperty("twoFactorAuthMethod");
    }

    /**
     * @param string $twoFactorAuthMethod
     */
    public function setTwoFactorAuthMethod($twoFactorAuthMethod = null)
    {
        $this->setProperty("twoFactorAuthMethod", $twoFactorAuthMethod);
    }

    /**
     * @return string
     */
    public function getTwoFactorDeviceIdentifier()
    {
        return $this->getProperty("twoFactorDeviceIdentifier");
    }

    /**
     * @param string $twoFactorDeviceIdentifier
     */
    public function setTwoFactorDeviceIdentifier($twoFactorDeviceIdentifier = null)
    {
        $this->setProperty("twoFactorDeviceIdentifier", $twoFactorDeviceIdentifier);
    }


}
