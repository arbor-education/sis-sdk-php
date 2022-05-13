<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class LocalAuthority extends ModelBase
{

    const AUTHORITY_CODE = 'authorityCode';

    const AUTHORITY_CODE_PRE2011 = 'authorityCodePre2011';

    protected $_resourceType = ResourceType::UK_DFE_LOCAL_AUTHORITY;

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

        $query->setResourceType(ResourceType::UK_DFE_LOCAL_AUTHORITY);

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

        return $gateway->retrieve(ResourceType::UK_DFE_LOCAL_AUTHORITY, $id);
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
