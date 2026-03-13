<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AiCreditBundle extends ModelBase
{
    public const BUNDLE_TYPE = 'bundleType';

    public const PURCHASE_IDENTIFIER = 'purchaseIdentifier';

    public const EFFECTIVE_DATETIME = 'effectiveDatetime';

    public const EXPIRY_DATETIME = 'expiryDatetime';

    public const BUNDLE_AMOUNT = 'bundleAmount';

    public const REMAINING_AMOUNT = 'remainingAmount';

    protected $_resourceType = ResourceType::AI_CREDIT_BUNDLE;

    /**
     * @param Query $query
     * @return AiCreditBundle[] | Collection
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

        $query->setResourceType(ResourceType::AI_CREDIT_BUNDLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AiCreditBundle
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AI_CREDIT_BUNDLE, $id);
    }

    /**
     * @return string
     */
    public function getBundleType()
    {
        return $this->getProperty('bundleType');
    }

    /**
     * @param string $bundleType
     */
    public function setBundleType(string $bundleType = null)
    {
        $this->setProperty('bundleType', $bundleType);
    }

    /**
     * @return string
     */
    public function getPurchaseIdentifier()
    {
        return $this->getProperty('purchaseIdentifier');
    }

    /**
     * @param string $purchaseIdentifier
     */
    public function setPurchaseIdentifier(string $purchaseIdentifier = null)
    {
        $this->setProperty('purchaseIdentifier', $purchaseIdentifier);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDatetime()
    {
        return $this->getProperty('effectiveDatetime');
    }

    /**
     * @param \DateTime $effectiveDatetime
     */
    public function setEffectiveDatetime(\DateTime $effectiveDatetime = null)
    {
        $this->setProperty('effectiveDatetime', $effectiveDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDatetime()
    {
        return $this->getProperty('expiryDatetime');
    }

    /**
     * @param \DateTime $expiryDatetime
     */
    public function setExpiryDatetime(\DateTime $expiryDatetime = null)
    {
        $this->setProperty('expiryDatetime', $expiryDatetime);
    }

    /**
     * @return string
     */
    public function getBundleAmount()
    {
        return $this->getProperty('bundleAmount');
    }

    /**
     * @param string $bundleAmount
     */
    public function setBundleAmount(string $bundleAmount = null)
    {
        $this->setProperty('bundleAmount', $bundleAmount);
    }

    /**
     * @return string
     */
    public function getRemainingAmount()
    {
        return $this->getProperty('remainingAmount');
    }

    /**
     * @param string $remainingAmount
     */
    public function setRemainingAmount(string $remainingAmount = null)
    {
        $this->setProperty('remainingAmount', $remainingAmount);
    }
}
