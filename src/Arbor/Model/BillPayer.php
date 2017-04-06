<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class BillPayer extends ModelBase
{

    const LEGAL_ENTITY = 'legalEntity';

    const DELETED_LEGAL_ENTITY_NAME = 'deletedLegalEntityName';

    const STRIPE_CUSTOMER_ID = 'stripeCustomerId';

    protected $_resourceType = ResourceType::BILL_PAYER;

    /**
     * @param \Arbor\Query\Query $query
     * @return BillPayer[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("BillPayer");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BillPayer
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::BILL_PAYER, $id);
    }

    /**
     * @return ModelBase
     */
    public function getLegalEntity()
    {
        return $this->getProperty("legalEntity");
    }

    /**
     * @param ModelBase $legalEntity
     */
    public function setLegalEntity(ModelBase $legalEntity = null)
    {
        $this->setProperty("legalEntity", $legalEntity);
    }

    /**
     * @return string
     */
    public function getDeletedLegalEntityName()
    {
        return $this->getProperty("deletedLegalEntityName");
    }

    /**
     * @param string $deletedLegalEntityName
     */
    public function setDeletedLegalEntityName($deletedLegalEntityName = null)
    {
        $this->setProperty("deletedLegalEntityName", $deletedLegalEntityName);
    }

    /**
     * @return string
     */
    public function getStripeCustomerId()
    {
        return $this->getProperty("stripeCustomerId");
    }

    /**
     * @param string $stripeCustomerId
     */
    public function setStripeCustomerId($stripeCustomerId = null)
    {
        $this->setProperty("stripeCustomerId", $stripeCustomerId);
    }


}
