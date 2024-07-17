<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UserFavouritePage extends ModelBase
{
    public const USER = 'user';

    public const ROUTE = 'route';

    public const CUSTOM_NAME = 'customName';

    protected $_resourceType = ResourceType::USER_FAVOURITE_PAGE;

    /**
     * @param Query $query
     * @return UserFavouritePage[] | Collection
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

        $query->setResourceType(ResourceType::USER_FAVOURITE_PAGE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserFavouritePage
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_FAVOURITE_PAGE, $id);
    }

    /**
     * @return \Arbor\Model\User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param \Arbor\Model\User $user
     */
    public function setUser(\Arbor\Model\User $user = null)
    {
        $this->setProperty('user', $user);
    }

    /**
     * @return string
     */
    public function getRoute()
    {
        return $this->getProperty('route');
    }

    /**
     * @param string $route
     */
    public function setRoute(string $route = null)
    {
        $this->setProperty('route', $route);
    }

    /**
     * @return string
     */
    public function getCustomName()
    {
        return $this->getProperty('customName');
    }

    /**
     * @param string $customName
     */
    public function setCustomName(string $customName = null)
    {
        $this->setProperty('customName', $customName);
    }
}
