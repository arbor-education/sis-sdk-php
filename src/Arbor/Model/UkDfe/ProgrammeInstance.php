<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class ProgrammeInstance extends ModelBase
{
    const PARTNER_UKPRN = 'partnerUkprn';

    protected $_resourceType = ResourceType::UK_DFE_PROGRAMME_INSTANCE;

    /**
     * @param \Arbor\Query\Query $query
     * @return ProgrammeInstance[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_ProgrammeInstance");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ProgrammeInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_PROGRAMME_INSTANCE, $id);
    }

    /**
     * @return string
     */
    public function getPartnerUkprn()
    {
        return $this->getProperty("partnerUkprn");
    }

    /**
     * @param string $partnerUkprn
     */
    public function setPartnerUkprn($partnerUkprn = null)
    {
        $this->setProperty("partnerUkprn", $partnerUkprn);
    }
}
