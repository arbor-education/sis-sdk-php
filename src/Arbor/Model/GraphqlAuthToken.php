<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\User;
use \Arbor\Model\GraphqlQuery;

class GraphqlAuthToken extends ModelBase
{
    const USER = 'user';

    const GRAPHQL_QUERY = 'graphqlQuery';

    const AUTH_TOKEN = 'authToken';

    protected $_resourceType = ResourceType::GRAPHQL_AUTH_TOKEN;

    /**
     * @param \Arbor\Query\Query $query
     * @return GraphqlAuthToken[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("GraphqlAuthToken");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return GraphqlAuthToken
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GRAPHQL_AUTH_TOKEN, $id);
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->getProperty("user");
    }

    /**
     * @param User $user
     */
    public function setUser(User $user = null)
    {
        $this->setProperty("user", $user);
    }

    /**
     * @return GraphqlQuery
     */
    public function getGraphqlQuery()
    {
        return $this->getProperty("graphqlQuery");
    }

    /**
     * @param GraphqlQuery $graphqlQuery
     */
    public function setGraphqlQuery(GraphqlQuery $graphqlQuery = null)
    {
        $this->setProperty("graphqlQuery", $graphqlQuery);
    }

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->getProperty("authToken");
    }

    /**
     * @param string $authToken
     */
    public function setAuthToken($authToken = null)
    {
        $this->setProperty("authToken", $authToken);
    }
}
