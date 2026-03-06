<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Oauth2ClientToken extends ModelBase
{
    public const RELATED_ENTITY = 'relatedEntity';

    public const PROVIDER = 'provider';

    public const ACCESS_TOKEN = 'accessToken';

    public const REFRESH_TOKEN = 'refreshToken';

    public const EXPIRE_DATETIME = 'expireDatetime';

    public const RESOURCE_OWNER_IDENTIFIER = 'resourceOwnerIdentifier';

    protected $_resourceType = ResourceType::OAUTH2_CLIENT_TOKEN;

    /**
     * @param Query $query
     * @return Oauth2ClientToken[] | Collection
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

        $query->setResourceType(ResourceType::OAUTH2_CLIENT_TOKEN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Oauth2ClientToken
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OAUTH2_CLIENT_TOKEN, $id);
    }

    /**
     * @return ModelBase
     */
    public function getRelatedEntity()
    {
        return $this->getProperty('relatedEntity');
    }

    /**
     * @param ModelBase $relatedEntity
     */
    public function setRelatedEntity(\ModelBase $relatedEntity = null)
    {
        $this->setProperty('relatedEntity', $relatedEntity);
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->getProperty('provider');
    }

    /**
     * @param string $provider
     */
    public function setProvider(string $provider = null)
    {
        $this->setProperty('provider', $provider);
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->getProperty('accessToken');
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken(string $accessToken = null)
    {
        $this->setProperty('accessToken', $accessToken);
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->getProperty('refreshToken');
    }

    /**
     * @param string $refreshToken
     */
    public function setRefreshToken(string $refreshToken = null)
    {
        $this->setProperty('refreshToken', $refreshToken);
    }

    /**
     * @return \DateTime
     */
    public function getExpireDatetime()
    {
        return $this->getProperty('expireDatetime');
    }

    /**
     * @param \DateTime $expireDatetime
     */
    public function setExpireDatetime(\DateTime $expireDatetime = null)
    {
        $this->setProperty('expireDatetime', $expireDatetime);
    }

    /**
     * @return string
     */
    public function getResourceOwnerIdentifier()
    {
        return $this->getProperty('resourceOwnerIdentifier');
    }

    /**
     * @param string $resourceOwnerIdentifier
     */
    public function setResourceOwnerIdentifier(string $resourceOwnerIdentifier = null)
    {
        $this->setProperty('resourceOwnerIdentifier', $resourceOwnerIdentifier);
    }
}
