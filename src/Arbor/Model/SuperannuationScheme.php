<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class SuperannuationScheme extends ModelBase
{

    const SUPERANNUATION_SCHEME_NAME = 'superannuationSchemeName';

    const CODE = 'code';

    protected $_resourceType = ResourceType::SUPERANNUATION_SCHEME;

    /**
     * @param \Arbor\Query\Query $query
     * @return SuperannuationScheme[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("SuperannuationScheme");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SuperannuationScheme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::SUPERANNUATION_SCHEME, $id);
    }

    /**
     * @return string
     */
    public function getSuperannuationSchemeName()
    {
        return $this->getProperty("superannuationSchemeName");
    }

    /**
     * @param string $superannuationSchemeName
     */
    public function setSuperannuationSchemeName($superannuationSchemeName = null)
    {
        $this->setProperty("superannuationSchemeName", $superannuationSchemeName);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }


}
