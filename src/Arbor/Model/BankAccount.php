<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BankAccount extends ModelBase
{
    public const BANK = 'bank';

    public const PAYMENT_PROVIDER = 'paymentProvider';

    public const ACCOUNT_HOLDER_NAME = 'accountHolderName';

    public const ACCOUNT_NUMBER = 'accountNumber';

    public const SORT_CODE = 'sortCode';

    public const SWIFT_CODE = 'swiftCode';

    public const IBAN = 'iban';

    public const BACS_USER_NUMBER = 'bacsUserNumber';

    public const ENABLED = 'enabled';

    protected $_resourceType = ResourceType::BANK_ACCOUNT;

    /**
     * @param Query $query
     * @return BankAccount[] | Collection
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

        $query->setResourceType(ResourceType::BANK_ACCOUNT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BankAccount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BANK_ACCOUNT, $id);
    }

    /**
     * @return \Arbor\Model\Bank
     */
    public function getBank()
    {
        return $this->getProperty('bank');
    }

    /**
     * @param \Arbor\Model\Bank $bank
     */
    public function setBank(\Arbor\Model\Bank $bank = null)
    {
        $this->setProperty('bank', $bank);
    }

    /**
     * @return \Arbor\Model\PaymentProvider
     */
    public function getPaymentProvider()
    {
        return $this->getProperty('paymentProvider');
    }

    /**
     * @param \Arbor\Model\PaymentProvider $paymentProvider
     */
    public function setPaymentProvider(\Arbor\Model\PaymentProvider $paymentProvider = null)
    {
        $this->setProperty('paymentProvider', $paymentProvider);
    }

    /**
     * @return string
     */
    public function getAccountHolderName()
    {
        return $this->getProperty('accountHolderName');
    }

    /**
     * @param string $accountHolderName
     */
    public function setAccountHolderName(string $accountHolderName = null)
    {
        $this->setProperty('accountHolderName', $accountHolderName);
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->getProperty('accountNumber');
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber(string $accountNumber = null)
    {
        $this->setProperty('accountNumber', $accountNumber);
    }

    /**
     * @return string
     */
    public function getSortCode()
    {
        return $this->getProperty('sortCode');
    }

    /**
     * @param string $sortCode
     */
    public function setSortCode(string $sortCode = null)
    {
        $this->setProperty('sortCode', $sortCode);
    }

    /**
     * @return string
     */
    public function getSwiftCode()
    {
        return $this->getProperty('swiftCode');
    }

    /**
     * @param string $swiftCode
     */
    public function setSwiftCode(string $swiftCode = null)
    {
        $this->setProperty('swiftCode', $swiftCode);
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->getProperty('iban');
    }

    /**
     * @param string $iban
     */
    public function setIban(string $iban = null)
    {
        $this->setProperty('iban', $iban);
    }

    /**
     * @return string
     */
    public function getBacsUserNumber()
    {
        return $this->getProperty('bacsUserNumber');
    }

    /**
     * @param string $bacsUserNumber
     */
    public function setBacsUserNumber(string $bacsUserNumber = null)
    {
        $this->setProperty('bacsUserNumber', $bacsUserNumber);
    }

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->getProperty('enabled');
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled = null)
    {
        $this->setProperty('enabled', $enabled);
    }
}
