<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SuperannuationScheme extends ModelBase
{
    const SUPERANNUATION_SCHEME_NAME = 'superannuationSchemeName';

    const CODE = 'code';

    protected $_resourceType = ResourceType::SUPERANNUATION_SCHEME;

    /**
     * @param Query $query
     * @return SuperannuationScheme[] | Collection
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

        $query->setResourceType(ResourceType::SUPERANNUATION_SCHEME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SuperannuationScheme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SUPERANNUATION_SCHEME, $id);
    }

    /**
     * @return string
     */
    public function getSuperannuationSchemeName()
    {
        return $this->getProperty('superannuationSchemeName');
    }

    /**
     * @param string $superannuationSchemeName
     */
    public function setSuperannuationSchemeName($superannuationSchemeName = null)
    {
        $this->setProperty('superannuationSchemeName', $superannuationSchemeName);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }
}
