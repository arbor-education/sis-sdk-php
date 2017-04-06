<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Bank;
use \Arbor\Model\PaymentProvider;

class BankAccount extends ModelBase
{

    const BANK = 'bank';

    const PAYMENT_PROVIDER = 'paymentProvider';

    const ACCOUNT_HOLDER_NAME = 'accountHolderName';

    const ACCOUNT_NUMBER = 'accountNumber';

    const SORT_CODE = 'sortCode';

    const SWIFT_CODE = 'swiftCode';

    const IBAN = 'iban';

    const BACS_USER_NUMBER = 'bacsUserNumber';

    protected $_resourceType = ResourceType::BANK_ACCOUNT;

    /**
     * @param \Arbor\Query\Query $query
     * @return BankAccount[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("BankAccount");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BankAccount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::BANK_ACCOUNT, $id);
    }

    /**
     * @return Bank
     */
    public function getBank()
    {
        return $this->getProperty("bank");
    }

    /**
     * @param Bank $bank
     */
    public function setBank(Bank $bank = null)
    {
        $this->setProperty("bank", $bank);
    }

    /**
     * @return PaymentProvider
     */
    public function getPaymentProvider()
    {
        return $this->getProperty("paymentProvider");
    }

    /**
     * @param PaymentProvider $paymentProvider
     */
    public function setPaymentProvider(PaymentProvider $paymentProvider = null)
    {
        $this->setProperty("paymentProvider", $paymentProvider);
    }

    /**
     * @return string
     */
    public function getAccountHolderName()
    {
        return $this->getProperty("accountHolderName");
    }

    /**
     * @param string $accountHolderName
     */
    public function setAccountHolderName($accountHolderName = null)
    {
        $this->setProperty("accountHolderName", $accountHolderName);
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->getProperty("accountNumber");
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber($accountNumber = null)
    {
        $this->setProperty("accountNumber", $accountNumber);
    }

    /**
     * @return string
     */
    public function getSortCode()
    {
        return $this->getProperty("sortCode");
    }

    /**
     * @param string $sortCode
     */
    public function setSortCode($sortCode = null)
    {
        $this->setProperty("sortCode", $sortCode);
    }

    /**
     * @return string
     */
    public function getSwiftCode()
    {
        return $this->getProperty("swiftCode");
    }

    /**
     * @param string $swiftCode
     */
    public function setSwiftCode($swiftCode = null)
    {
        $this->setProperty("swiftCode", $swiftCode);
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->getProperty("iban");
    }

    /**
     * @param string $iban
     */
    public function setIban($iban = null)
    {
        $this->setProperty("iban", $iban);
    }

    /**
     * @return string
     */
    public function getBacsUserNumber()
    {
        return $this->getProperty("bacsUserNumber");
    }

    /**
     * @param string $bacsUserNumber
     */
    public function setBacsUserNumber($bacsUserNumber = null)
    {
        $this->setProperty("bacsUserNumber", $bacsUserNumber);
    }


}
