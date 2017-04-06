<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class SenStatusAssignment extends ModelBase
{

    const IS_MEMBER_OF_SEN_UNIT = 'isMemberOfSenUnit';

    const HAS_RESOURCED_PROVISION = 'hasResourcedProvision';

    protected $_resourceType = ResourceType::UK_DFE_SEN_STATUS_ASSIGNMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return SenStatusAssignment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_SenStatusAssignment");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SenStatusAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_SEN_STATUS_ASSIGNMENT, $id);
    }

    /**
     * @return bool
     */
    public function getIsMemberOfSenUnit()
    {
        return $this->getProperty("isMemberOfSenUnit");
    }

    /**
     * @param bool $isMemberOfSenUnit
     */
    public function setIsMemberOfSenUnit($isMemberOfSenUnit = null)
    {
        $this->setProperty("isMemberOfSenUnit", $isMemberOfSenUnit);
    }

    /**
     * @return bool
     */
    public function getHasResourcedProvision()
    {
        return $this->getProperty("hasResourcedProvision");
    }

    /**
     * @param bool $hasResourcedProvision
     */
    public function setHasResourcedProvision($hasResourcedProvision = null)
    {
        $this->setProperty("hasResourcedProvision", $hasResourcedProvision);
    }


}
