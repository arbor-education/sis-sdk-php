<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\EmailAccount;
use \Arbor\Model\BusinessRole;

class EmailAccountAccessPermission extends ModelBase
{
    const EMAIL_ACCOUNT = 'emailAccount';

    const BUSINESS_ROLE = 'businessRole';

    protected $_resourceType = ResourceType::EMAIL_ACCOUNT_ACCESS_PERMISSION;

    /**
     * @param \Arbor\Query\Query $query
     * @return EmailAccountAccessPermission[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("EmailAccountAccessPermission");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EmailAccountAccessPermission
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::EMAIL_ACCOUNT_ACCESS_PERMISSION, $id);
    }

    /**
     * @return EmailAccount
     */
    public function getEmailAccount()
    {
        return $this->getProperty("emailAccount");
    }

    /**
     * @param EmailAccount $emailAccount
     */
    public function setEmailAccount(EmailAccount $emailAccount = null)
    {
        $this->setProperty("emailAccount", $emailAccount);
    }

    /**
     * @return BusinessRole
     */
    public function getBusinessRole()
    {
        return $this->getProperty("businessRole");
    }

    /**
     * @param BusinessRole $businessRole
     */
    public function setBusinessRole(BusinessRole $businessRole = null)
    {
        $this->setProperty("businessRole", $businessRole);
    }
}
