<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class PaymentProvider extends ModelBase
{
    const PAYMENT_PROVIDER_NAME = 'paymentProviderName';

    const PROVIDER_CODE = 'providerCode';

    const SECRET_KEY = 'secretKey';

    const PUBLISHABLE_KEY = 'publishableKey';

    const SCHOOL_COVERS_FEE = 'schoolCoversFee';

    const FEE_PERCENTAGE = 'feePercentage';

    const IS_ENABLED = 'isEnabled';

    const MINIMUM_TRANSACTION_AMOUNT = 'minimumTransactionAmount';

    protected $_resourceType = ResourceType::PAYMENT_PROVIDER;

    /**
     * @param \Arbor\Query\Query $query
     * @return PaymentProvider[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PaymentProvider");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PaymentProvider
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PAYMENT_PROVIDER, $id);
    }

    /**
     * @return string
     */
    public function getPaymentProviderName()
    {
        return $this->getProperty("paymentProviderName");
    }

    /**
     * @param string $paymentProviderName
     */
    public function setPaymentProviderName($paymentProviderName = null)
    {
        $this->setProperty("paymentProviderName", $paymentProviderName);
    }

    /**
     * @return string
     */
    public function getProviderCode()
    {
        return $this->getProperty("providerCode");
    }

    /**
     * @param string $providerCode
     */
    public function setProviderCode($providerCode = null)
    {
        $this->setProperty("providerCode", $providerCode);
    }

    /**
     * @return string
     */
    public function getSecretKey()
    {
        return $this->getProperty("secretKey");
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey($secretKey = null)
    {
        $this->setProperty("secretKey", $secretKey);
    }

    /**
     * @return string
     */
    public function getPublishableKey()
    {
        return $this->getProperty("publishableKey");
    }

    /**
     * @param string $publishableKey
     */
    public function setPublishableKey($publishableKey = null)
    {
        $this->setProperty("publishableKey", $publishableKey);
    }

    /**
     * @return bool
     */
    public function getSchoolCoversFee()
    {
        return $this->getProperty("schoolCoversFee");
    }

    /**
     * @param bool $schoolCoversFee
     */
    public function setSchoolCoversFee($schoolCoversFee = null)
    {
        $this->setProperty("schoolCoversFee", $schoolCoversFee);
    }

    /**
     * @return float
     */
    public function getFeePercentage()
    {
        return $this->getProperty("feePercentage");
    }

    /**
     * @param float $feePercentage
     */
    public function setFeePercentage($feePercentage = null)
    {
        $this->setProperty("feePercentage", $feePercentage);
    }

    /**
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->getProperty("isEnabled");
    }

    /**
     * @param bool $isEnabled
     */
    public function setIsEnabled($isEnabled = null)
    {
        $this->setProperty("isEnabled", $isEnabled);
    }

    /**
     * @return string
     */
    public function getMinimumTransactionAmount()
    {
        return $this->getProperty("minimumTransactionAmount");
    }

    /**
     * @param string $minimumTransactionAmount
     */
    public function setMinimumTransactionAmount($minimumTransactionAmount = null)
    {
        $this->setProperty("minimumTransactionAmount", $minimumTransactionAmount);
    }
}
