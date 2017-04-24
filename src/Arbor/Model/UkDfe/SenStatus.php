<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class SenStatus extends ModelBase
{
    const D00229 = 'd00229';

    protected $_resourceType = ResourceType::UK_DFE_SEN_STATUS;

    /**
     * @param \Arbor\Query\Query $query
     * @return SenStatus[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_SenStatus");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SenStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_SEN_STATUS, $id);
    }

    /**
     * @return string
     */
    public function getD00229()
    {
        return $this->getProperty("d00229");
    }

    /**
     * @param string $d00229
     */
    public function setD00229($d00229 = null)
    {
        $this->setProperty("d00229", $d00229);
    }
}
