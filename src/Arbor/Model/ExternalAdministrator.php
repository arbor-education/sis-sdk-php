<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ExternalAdministrator extends ModelBase
{
    const FIRST_NAME = 'firstName';

    const LAST_NAME = 'lastName';

    const EMAIL = 'email';

    const APPLICATION = 'application';

    protected $_resourceType = ResourceType::EXTERNAL_ADMINISTRATOR;

    /**
     * @param Query $query
     * @return ExternalAdministrator[] | Collection
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
    public function getFirstName()
    {
        return $this->getProperty('firstName');
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName = null)
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
    public function setLastName($lastName = null)
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
    public function setEmail($email = null)
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
    public function setApplication($application = null)
    {
        $this->setProperty('application', $application);
    }
}
