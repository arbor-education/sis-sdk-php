<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class User extends ModelBase
{

    const STAFF = 'staff';

    const STUDENT = 'student';

    const GUARDIAN = 'guardian';

    const EXTERNAL_ADMINISTRATOR = 'externalAdministrator';

    const USERNAME = 'username';

    const EMAIL = 'email';

    const PASSWORD_HASH = 'passwordHash';

    const PASSWORD_RESET_HASH = 'passwordResetHash';

    const AUTHENTICATION_TYPE = 'authenticationType';

    const AUTHENTICATION_TOKEN = 'authenticationToken';

    const AUTHENTICATION_TOKEN_EXPIRY_DATETIME = 'authenticationTokenExpiryDatetime';

    const CURRENT_IP_ADDRESS = 'currentIpAddress';

    const LAST_ACCESS_DATETIME = 'lastAccessDatetime';

    const PASSWORD_LAST_CHANGED_DATETIME = 'passwordLastChangedDatetime';

    const ENABLED = 'enabled';

    const VERIFIED_DATETIME = 'verifiedDatetime';

    const TERMS_OF_USE_ACCEPTED_DATETIME = 'termsOfUseAcceptedDatetime';

    const WELCOME_MESSAGE_DATETIME = 'welcomeMessageDatetime';

    const TWO_FACTOR_AUTH_METHOD = 'twoFactorAuthMethod';

    const TWO_FACTOR_DEVICE_IDENTIFIER = 'twoFactorDeviceIdentifier';

    const DELETED_ENTITY_TYPE = 'deletedEntityType';

    const DELETED_OBJECT_ID = 'deletedObjectId';

    const DELETED_DISPLAY_NAME = 'deletedDisplayName';

    const GOOGLE_TWO_FACTOR_SECRET = 'googleTwoFactorSecret';

    const SSO_TWO_FACTOR_ACTIVATED = 'ssoTwoFactorActivated';

    const ACCEPT_SAAS_TERMS_AND_CONDITIONS_BY_DATETIME = 'acceptSaasTermsAndConditionsByDatetime';

    protected $_resourceType = ResourceType::USER;

    /**
     * @param Query $query
     * @return User[] | Collection
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
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return Guardian
     */
    public function getGuardian()
    {
        return $this->getProperty('guardian');
    }

    /**
     * @param Guardian $guardian
     */
    public function setGuardian(Guardian $guardian = null)
    {
        $this->setProperty('guardian', $guardian);
    }

    /**
     * @return ExternalAdministrator
     */
    public function getExternalAdministrator()
    {
        return $this->getProperty('externalAdministrator');
    }

    /**
     * @param ExternalAdministrator $externalAdministrator
     */
    public function setExternalAdministrator(ExternalAdministrator $externalAdministrator = null)
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
    public function setUsername($username = null)
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
    public function setEmail($email = null)
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
    public function setPasswordHash($passwordHash = null)
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
    public function setPasswordResetHash($passwordResetHash = null)
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
    public function setAuthenticationType($authenticationType = null)
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
    public function setAuthenticationToken($authenticationToken = null)
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
    public function setCurrentIpAddress($currentIpAddress = null)
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
    public function setEnabled($enabled = null)
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
    public function setTwoFactorAuthMethod($twoFactorAuthMethod = null)
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
    public function setTwoFactorDeviceIdentifier($twoFactorDeviceIdentifier = null)
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
    public function setDeletedEntityType($deletedEntityType = null)
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
    public function setDeletedObjectId($deletedObjectId = null)
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
    public function setDeletedDisplayName($deletedDisplayName = null)
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
    public function setGoogleTwoFactorSecret($googleTwoFactorSecret = null)
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
    public function setSsoTwoFactorActivated($ssoTwoFactorActivated = null)
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
