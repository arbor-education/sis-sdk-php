<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class User extends ModelBase
{
    public const STAFF = 'staff';

    public const STUDENT = 'student';

    public const GUARDIAN = 'guardian';

    public const EXTERNAL_ADMINISTRATOR = 'externalAdministrator';

    public const USERNAME = 'username';

    public const EMAIL = 'email';

    public const PASSWORD_HASH = 'passwordHash';

    public const PASSWORD_RESET_HASH = 'passwordResetHash';

    public const AUTHENTICATION_TYPE = 'authenticationType';

    public const AUTHENTICATION_TOKEN = 'authenticationToken';

    public const AUTHENTICATION_TOKEN_EXPIRY_DATETIME = 'authenticationTokenExpiryDatetime';

    public const CURRENT_IP_ADDRESS = 'currentIpAddress';

    public const LAST_ACCESS_DATETIME = 'lastAccessDatetime';

    public const PASSWORD_LAST_CHANGED_DATETIME = 'passwordLastChangedDatetime';

    public const ENABLED = 'enabled';

    public const VERIFIED_DATETIME = 'verifiedDatetime';

    public const TERMS_OF_USE_ACCEPTED_DATETIME = 'termsOfUseAcceptedDatetime';

    public const WELCOME_MESSAGE_DATETIME = 'welcomeMessageDatetime';

    public const TWO_FACTOR_AUTH_METHOD = 'twoFactorAuthMethod';

    public const TWO_FACTOR_DEVICE_IDENTIFIER = 'twoFactorDeviceIdentifier';

    public const DELETED_ENTITY_TYPE = 'deletedEntityType';

    public const DELETED_OBJECT_ID = 'deletedObjectId';

    public const DELETED_DISPLAY_NAME = 'deletedDisplayName';

    public const GOOGLE_TWO_FACTOR_SECRET = 'googleTwoFactorSecret';

    public const SSO_TWO_FACTOR_ACTIVATED = 'ssoTwoFactorActivated';

    public const ACCEPT_SAAS_TERMS_AND_CONDITIONS_BY_DATETIME = 'acceptSaasTermsAndConditionsByDatetime';

    protected $_resourceType = ResourceType::USER;

    /**
     * @param Query $query
     * @return User[] | Collection
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

        $query->setResourceType(ResourceType::USER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return User
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER, $id);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \Arbor\Model\Guardian
     */
    public function getGuardian()
    {
        return $this->getProperty('guardian');
    }

    /**
     * @param \Arbor\Model\Guardian $guardian
     */
    public function setGuardian(\Arbor\Model\Guardian $guardian = null)
    {
        $this->setProperty('guardian', $guardian);
    }

    /**
     * @return \Arbor\Model\ExternalAdministrator
     */
    public function getExternalAdministrator()
    {
        return $this->getProperty('externalAdministrator');
    }

    /**
     * @param \Arbor\Model\ExternalAdministrator $externalAdministrator
     */
    public function setExternalAdministrator(\Arbor\Model\ExternalAdministrator $externalAdministrator = null)
    {
        $this->setProperty('externalAdministrator', $externalAdministrator);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->getProperty('username');
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username = null)
    {
        $this->setProperty('username', $username);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getProperty('email');
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email = null)
    {
        $this->setProperty('email', $email);
    }

    /**
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->getProperty('passwordHash');
    }

    /**
     * @param string $passwordHash
     */
    public function setPasswordHash(string $passwordHash = null)
    {
        $this->setProperty('passwordHash', $passwordHash);
    }

    /**
     * @return string
     */
    public function getPasswordResetHash()
    {
        return $this->getProperty('passwordResetHash');
    }

    /**
     * @param string $passwordResetHash
     */
    public function setPasswordResetHash(string $passwordResetHash = null)
    {
        $this->setProperty('passwordResetHash', $passwordResetHash);
    }

    /**
     * @return string
     */
    public function getAuthenticationType()
    {
        return $this->getProperty('authenticationType');
    }

    /**
     * @param string $authenticationType
     */
    public function setAuthenticationType(string $authenticationType = null)
    {
        $this->setProperty('authenticationType', $authenticationType);
    }

    /**
     * @return string
     */
    public function getAuthenticationToken()
    {
        return $this->getProperty('authenticationToken');
    }

    /**
     * @param string $authenticationToken
     */
    public function setAuthenticationToken(string $authenticationToken = null)
    {
        $this->setProperty('authenticationToken', $authenticationToken);
    }

    /**
     * @return \DateTime
     */
    public function getAuthenticationTokenExpiryDatetime()
    {
        return $this->getProperty('authenticationTokenExpiryDatetime');
    }

    /**
     * @param \DateTime $authenticationTokenExpiryDatetime
     */
    public function setAuthenticationTokenExpiryDatetime(\DateTime $authenticationTokenExpiryDatetime = null)
    {
        $this->setProperty('authenticationTokenExpiryDatetime', $authenticationTokenExpiryDatetime);
    }

    /**
     * @return string
     */
    public function getCurrentIpAddress()
    {
        return $this->getProperty('currentIpAddress');
    }

    /**
     * @param string $currentIpAddress
     */
    public function setCurrentIpAddress(string $currentIpAddress = null)
    {
        $this->setProperty('currentIpAddress', $currentIpAddress);
    }

    /**
     * @return \DateTime
     */
    public function getLastAccessDatetime()
    {
        return $this->getProperty('lastAccessDatetime');
    }

    /**
     * @param \DateTime $lastAccessDatetime
     */
    public function setLastAccessDatetime(\DateTime $lastAccessDatetime = null)
    {
        $this->setProperty('lastAccessDatetime', $lastAccessDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPasswordLastChangedDatetime()
    {
        return $this->getProperty('passwordLastChangedDatetime');
    }

    /**
     * @param \DateTime $passwordLastChangedDatetime
     */
    public function setPasswordLastChangedDatetime(\DateTime $passwordLastChangedDatetime = null)
    {
        $this->setProperty('passwordLastChangedDatetime', $passwordLastChangedDatetime);
    }

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->getProperty('enabled');
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled = null)
    {
        $this->setProperty('enabled', $enabled);
    }

    /**
     * @return \DateTime
     */
    public function getVerifiedDatetime()
    {
        return $this->getProperty('verifiedDatetime');
    }

    /**
     * @param \DateTime $verifiedDatetime
     */
    public function setVerifiedDatetime(\DateTime $verifiedDatetime = null)
    {
        $this->setProperty('verifiedDatetime', $verifiedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getTermsOfUseAcceptedDatetime()
    {
        return $this->getProperty('termsOfUseAcceptedDatetime');
    }

    /**
     * @param \DateTime $termsOfUseAcceptedDatetime
     */
    public function setTermsOfUseAcceptedDatetime(\DateTime $termsOfUseAcceptedDatetime = null)
    {
        $this->setProperty('termsOfUseAcceptedDatetime', $termsOfUseAcceptedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getWelcomeMessageDatetime()
    {
        return $this->getProperty('welcomeMessageDatetime');
    }

    /**
     * @param \DateTime $welcomeMessageDatetime
     */
    public function setWelcomeMessageDatetime(\DateTime $welcomeMessageDatetime = null)
    {
        $this->setProperty('welcomeMessageDatetime', $welcomeMessageDatetime);
    }

    /**
     * @return string
     */
    public function getTwoFactorAuthMethod()
    {
        return $this->getProperty('twoFactorAuthMethod');
    }

    /**
     * @param string $twoFactorAuthMethod
     */
    public function setTwoFactorAuthMethod(string $twoFactorAuthMethod = null)
    {
        $this->setProperty('twoFactorAuthMethod', $twoFactorAuthMethod);
    }

    /**
     * @return string
     */
    public function getTwoFactorDeviceIdentifier()
    {
        return $this->getProperty('twoFactorDeviceIdentifier');
    }

    /**
     * @param string $twoFactorDeviceIdentifier
     */
    public function setTwoFactorDeviceIdentifier(string $twoFactorDeviceIdentifier = null)
    {
        $this->setProperty('twoFactorDeviceIdentifier', $twoFactorDeviceIdentifier);
    }

    /**
     * @return int
     */
    public function getDeletedEntityType()
    {
        return $this->getProperty('deletedEntityType');
    }

    /**
     * @param int $deletedEntityType
     */
    public function setDeletedEntityType(int $deletedEntityType = null)
    {
        $this->setProperty('deletedEntityType', $deletedEntityType);
    }

    /**
     * @return int
     */
    public function getDeletedObjectId()
    {
        return $this->getProperty('deletedObjectId');
    }

    /**
     * @param int $deletedObjectId
     */
    public function setDeletedObjectId(int $deletedObjectId = null)
    {
        $this->setProperty('deletedObjectId', $deletedObjectId);
    }

    /**
     * @return string
     */
    public function getDeletedDisplayName()
    {
        return $this->getProperty('deletedDisplayName');
    }

    /**
     * @param string $deletedDisplayName
     */
    public function setDeletedDisplayName(string $deletedDisplayName = null)
    {
        $this->setProperty('deletedDisplayName', $deletedDisplayName);
    }

    /**
     * @return string
     */
    public function getGoogleTwoFactorSecret()
    {
        return $this->getProperty('googleTwoFactorSecret');
    }

    /**
     * @param string $googleTwoFactorSecret
     */
    public function setGoogleTwoFactorSecret(string $googleTwoFactorSecret = null)
    {
        $this->setProperty('googleTwoFactorSecret', $googleTwoFactorSecret);
    }

    /**
     * @return bool
     */
    public function getSsoTwoFactorActivated()
    {
        return $this->getProperty('ssoTwoFactorActivated');
    }

    /**
     * @param bool $ssoTwoFactorActivated
     */
    public function setSsoTwoFactorActivated(bool $ssoTwoFactorActivated = null)
    {
        $this->setProperty('ssoTwoFactorActivated', $ssoTwoFactorActivated);
    }

    /**
     * @return \DateTime
     */
    public function getAcceptSaasTermsAndConditionsByDatetime()
    {
        return $this->getProperty('acceptSaasTermsAndConditionsByDatetime');
    }

    /**
     * @param \DateTime $acceptSaasTermsAndConditionsByDatetime
     */
    public function setAcceptSaasTermsAndConditionsByDatetime(\DateTime $acceptSaasTermsAndConditionsByDatetime = null)
    {
        $this->setProperty('acceptSaasTermsAndConditionsByDatetime', $acceptSaasTermsAndConditionsByDatetime);
    }
}
