<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PaymentProvider extends ModelBase
{

    const PAYMENT_PROVIDER_NAME = 'paymentProviderName';

    const PROVIDER_CODE = 'providerCode';

    const SECRET_KEY = 'secretKey';

    const PUBLISHABLE_KEY = 'publishableKey';

    const IS_ENABLED = 'isEnabled';

    const MINIMUM_TRANSACTION_AMOUNT = 'minimumTransactionAmount';

    protected $_resourceType = ResourceType::PAYMENT_PROVIDER;

    /**
     * @param Query $query
     * @return PaymentProvider[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::PAYMENT_PROVIDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PaymentProvider
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PAYMENT_PROVIDER, $id);
    }

    /**
     * @return string
     */
    public function getPaymentProviderName()
    {
        return $this->getProperty('paymentProviderName');
    }

    /**
     * @param string $paymentProviderName
     */
    public function setPaymentProviderName($paymentProviderName = null)
    {
        $this->setProperty('paymentProviderName', $paymentProviderName);
    }

    /**
     * @return string
     */
    public function getProviderCode()
    {
        return $this->getProperty('providerCode');
    }

    /**
     * @param string $providerCode
     */
    public function setProviderCode($providerCode = null)
    {
        $this->setProperty('providerCode', $providerCode);
    }

    /**
     * @return string
     */
    public function getSecretKey()
    {
        return $this->getProperty('secretKey');
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey($secretKey = null)
    {
        $this->setProperty('secretKey', $secretKey);
    }

    /**
     * @return string
     */
    public function getPublishableKey()
    {
        return $this->getProperty('publishableKey');
    }

    /**
     * @param string $publishableKey
     */
    public function setPublishableKey($publishableKey = null)
    {
        $this->setProperty('publishableKey', $publishableKey);
    }

    /**
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->getProperty('isEnabled');
    }

    /**
     * @param bool $isEnabled
     */
    public function setIsEnabled($isEnabled = null)
    {
        $this->setProperty('isEnabled', $isEnabled);
    }

    /**
     * @return string
     */
    public function getMinimumTransactionAmount()
    {
        return $this->getProperty('minimumTransactionAmount');
    }

    /**
     * @param string $minimumTransactionAmount
     */
    public function setMinimumTransactionAmount($minimumTransactionAmount = null)
    {
        $this->setProperty('minimumTransactionAmount', $minimumTransactionAmount);
    }


}
