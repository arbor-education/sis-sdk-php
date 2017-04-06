<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class UnenrolmentReason extends ModelBase
{

    const D00206 = 'd00206';

    protected $_resourceType = ResourceType::UK_DFE_UNENROLMENT_REASON;

    /**
     * @param \Arbor\Query\Query $query
     * @return UnenrolmentReason[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_UnenrolmentReason");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return UnenrolmentReason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_UNENROLMENT_REASON, $id);
    }

    /**
     * @return string
     */
    public function getD00206()
    {
        return $this->getProperty("d00206");
    }

    /**
     * @param string $d00206
     */
    public function setD00206($d00206 = null)
    {
        $this->setProperty("d00206", $d00206);
    }


}
