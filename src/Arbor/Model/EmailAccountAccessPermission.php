<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmailAccountAccessPermission extends ModelBase
{
    public const EMAIL_ACCOUNT = 'emailAccount';

    public const BUSINESS_ROLE = 'businessRole';

    protected $_resourceType = ResourceType::EMAIL_ACCOUNT_ACCESS_PERMISSION;

    /**
     * @param Query $query
     * @return EmailAccountAccessPermission[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_ACCOUNT_ACCESS_PERMISSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailAccountAccessPermission
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_ACCOUNT_ACCESS_PERMISSION, $id);
    }

    /**
     * @return \Arbor\Model\EmailAccount
     */
    public function getEmailAccount()
    {
        return $this->getProperty('emailAccount');
    }

    /**
     * @param \Arbor\Model\EmailAccount $emailAccount
     */
    public function setEmailAccount(\Arbor\Model\EmailAccount $emailAccount = null)
    {
        $this->setProperty('emailAccount', $emailAccount);
    }

    /**
     * @return \Arbor\Model\BusinessRole
     */
    public function getBusinessRole()
    {
        return $this->getProperty('businessRole');
    }

    /**
     * @param \Arbor\Model\BusinessRole $businessRole
     */
    public function setBusinessRole(\Arbor\Model\BusinessRole $businessRole = null)
    {
        $this->setProperty('businessRole', $businessRole);
    }
}
