<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class UserBeta extends ModelBase
{

    const USER = 'user';

    const IS_ELIGIBLE = 'isEligible';

    const IS_ENABLED = 'isEnabled';

    protected $_resourceType = ResourceType::USER_BETA;

    /**
     * @param Query $query
     * @return UserBeta[] | Collection
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

        $query->setResourceType(ResourceType::USER_BETA);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserBeta
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_BETA, $id);
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
     * @return bool
     */
    public function getIsEligible()
    {
        return $this->getProperty('isEligible');
    }

    /**
     * @param bool $isEligible
     */
    public function setIsEligible($isEligible = null)
    {
        $this->setProperty('isEligible', $isEligible);
    }

    /**
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->getProperty('isEnabled');
    }

    /**
     * @param bool $isEnabled
     */
    public function setIsEnabled($isEnabled = null)
    {
        $this->setProperty('isEnabled', $isEnabled);
    }


}
