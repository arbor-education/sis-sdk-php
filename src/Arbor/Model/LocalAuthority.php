<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class LocalAuthority extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const COUNTRY = 'country';

    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const AUTHORITY_CODE = 'authorityCode';

    const AUTHORITY_CODE_PRE2011 = 'authorityCodePre2011';

    protected $_resourceType = ResourceType::LOCAL_AUTHORITY;

    /**
     * @param Query $query
     * @return LocalAuthority[] | Collection
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

        $query->setResourceType(ResourceType::LOCAL_AUTHORITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return LocalAuthority
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::LOCAL_AUTHORITY, $id);
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

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->getProperty('country');
    }

    /**
     * @param Country $country
     */
    public function setCountry(Country $country = null)
    {
        $this->setProperty('country', $country);
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
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return string
     */
    public function getAuthorityCode()
    {
        return $this->getProperty('authorityCode');
    }

    /**
     * @param string $authorityCode
     */
    public function setAuthorityCode($authorityCode = null)
    {
        $this->setProperty('authorityCode', $authorityCode);
    }

    /**
     * @return string
     */
    public function getAuthorityCodePre2011()
    {
        return $this->getProperty('authorityCodePre2011');
    }

    /**
     * @param string $authorityCodePre2011
     */
    public function setAuthorityCodePre2011($authorityCodePre2011 = null)
    {
        $this->setProperty('authorityCodePre2011', $authorityCodePre2011);
    }
}
