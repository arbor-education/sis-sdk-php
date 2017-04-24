<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class ExclusionReason extends ModelBase
{
    const D00024 = 'd00024';

    protected $_resourceType = ResourceType::UK_DFE_EXCLUSION_REASON;

    /**
     * @param \Arbor\Query\Query $query
     * @return ExclusionReason[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_ExclusionReason");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ExclusionReason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_EXCLUSION_REASON, $id);
    }

    /**
     * @return string
     */
    public function getD00024()
    {
        return $this->getProperty("d00024");
    }

    /**
     * @param string $d00024
     */
    public function setD00024($d00024 = null)
    {
        $this->setProperty("d00024", $d00024);
    }
}
