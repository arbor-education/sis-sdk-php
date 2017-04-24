<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class EnrolmentMode extends ModelBase
{
    const D00018 = 'd00018';

    protected $_resourceType = ResourceType::UK_DFE_ENROLMENT_MODE;

    /**
     * @param \Arbor\Query\Query $query
     * @return EnrolmentMode[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_EnrolmentMode");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EnrolmentMode
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_ENROLMENT_MODE, $id);
    }

    /**
     * @return string
     */
    public function getD00018()
    {
        return $this->getProperty("d00018");
    }

    /**
     * @param string $d00018
     */
    public function setD00018($d00018 = null)
    {
        $this->setProperty("d00018", $d00018);
    }
}
