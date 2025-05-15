<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BillPayer extends ModelBase
{
    public const LEGAL_ENTITY = 'legalEntity';

    public const DELETED_LEGAL_ENTITY_NAME = 'deletedLegalEntityName';

    public const STRIPE_CUSTOMER_ID = 'stripeCustomerId';

    public const NEW_STRIPE_CUSTOMER_ID = 'newStripeCustomerId';

    protected $_resourceType = ResourceType::BILL_PAYER;

    /**
     * @param Query $query
     * @return BillPayer[] | Collection
     * @throws Exception
     */
    public static function query(\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::BILL_PAYER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BillPayer
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BILL_PAYER, $id);
    }

    /**
     * @return ModelBase
     */
    public function getLegalEntity()
    {
        return $this->getProperty('legalEntity');
    }

    /**
     * @param ModelBase $legalEntity
     */
    public function setLegalEntity(\ModelBase $legalEntity = null)
    {
        $this->setProperty('legalEntity', $legalEntity);
    }

    /**
     * @return string
     */
    public function getDeletedLegalEntityName()
    {
        return $this->getProperty('deletedLegalEntityName');
    }

    /**
     * @param string $deletedLegalEntityName
     */
    public function setDeletedLegalEntityName(string $deletedLegalEntityName = null)
    {
        $this->setProperty('deletedLegalEntityName', $deletedLegalEntityName);
    }

    /**
     * @return string
     */
    public function getStripeCustomerId()
    {
        return $this->getProperty('stripeCustomerId');
    }

    /**
     * @param string $stripeCustomerId
     */
    public function setStripeCustomerId(string $stripeCustomerId = null)
    {
        $this->setProperty('stripeCustomerId', $stripeCustomerId);
    }

    /**
     * @return string
     */
    public function getNewStripeCustomerId()
    {
        return $this->getProperty('newStripeCustomerId');
    }

    /**
     * @param string $newStripeCustomerId
     */
    public function setNewStripeCustomerId(string $newStripeCustomerId = null)
    {
        $this->setProperty('newStripeCustomerId', $newStripeCustomerId);
    }
}
