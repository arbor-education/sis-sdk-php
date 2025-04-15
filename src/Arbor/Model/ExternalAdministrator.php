<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ExternalAdministrator extends ModelBase
{
    public const UNIQUE_EXTERNAL_USER_ID = 'uniqueExternalUserId';

    public const FIRST_NAME = 'firstName';

    public const LAST_NAME = 'lastName';

    public const EMAIL = 'email';

    public const APPLICATION = 'application';

    protected $_resourceType = ResourceType::EXTERNAL_ADMINISTRATOR;

    /**
     * @param Query $query
     * @return ExternalAdministrator[] | Collection
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

        $query->setResourceType(ResourceType::EXTERNAL_ADMINISTRATOR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ExternalAdministrator
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EXTERNAL_ADMINISTRATOR, $id);
    }

    /**
     * @return string
     */
    public function getUniqueExternalUserId()
    {
        return $this->getProperty('uniqueExternalUserId');
    }

    /**
     * @param string $uniqueExternalUserId
     */
    public function setUniqueExternalUserId(string $uniqueExternalUserId = null)
    {
        $this->setProperty('uniqueExternalUserId', $uniqueExternalUserId);
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getProperty('firstName');
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName = null)
    {
        $this->setProperty('firstName', $firstName);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getProperty('lastName');
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName = null)
    {
        $this->setProperty('lastName', $lastName);
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
    public function getApplication()
    {
        return $this->getProperty('application');
    }

    /**
     * @param string $application
     */
    public function setApplication(string $application = null)
    {
        $this->setProperty('application', $application);
    }
}
