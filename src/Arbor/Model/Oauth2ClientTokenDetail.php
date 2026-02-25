<?php

namespace Arbor\Model;

use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\ResourceType;

class Oauth2ClientTokenDetail extends ModelBase
{
    public const NAME = 'name';

    public const VALUE = 'value';

    public const OAUTH2_CLIENT_TOKEN = 'oauth2ClientToken';

    protected $_resourceType = ResourceType::OAUTH2_CLIENT_TOKEN_DETAIL;

    /**
     * @param Query $query
     * @return Oauth2ClientTokenDetail[] | Collection
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

        $query->setResourceType(ResourceType::OAUTH2_CLIENT_TOKEN_DETAIL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Oauth2ClientTokenDetail
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OAUTH2_CLIENT_TOKEN_DETAIL, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->getProperty('value');
    }

    /**
     * @param string $value
     */
    public function setValue(string $value = null)
    {
        $this->setProperty('value', $value);
    }

    /**
     * @return \Arbor\Model\Oauth2ClientToken
     */
    public function getOauth2ClientToken()
    {
        return $this->getProperty('oauth2ClientToken');
    }

    /**
     * @param \Arbor\Model\Oauth2ClientToken $oauth2ClientToken
     */
    public function setOauth2ClientToken(\Arbor\Model\Oauth2ClientToken $oauth2ClientToken = null)
    {
        $this->setProperty('oauth2ClientToken', $oauth2ClientToken);
    }
}
