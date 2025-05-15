<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomerAccountType extends ModelBase
{
    public const ACCOUNT_TYPE_NAME = 'accountTypeName';

    public const ACCOUNT_TYPE_DESCRIPTION = 'accountTypeDescription';

    public const CODE = 'code';

    public const CATEGORY = 'category';

    public const IS_PREPAYMENT = 'isPrepayment';

    public const AUTO_CREATE_FOR_STUDENTS = 'autoCreateForStudents';

    public const AUTO_CREATE_FOR_STAFF = 'autoCreateForStaff';

    public const CARD_PAYMENTS_ENABLED = 'cardPaymentsEnabled';

    public const SHOW_IN_PARENT_PORTAL = 'showInParentPortal';

    public const ACCOUNTING_CODE = 'accountingCode';

    protected $_resourceType = ResourceType::CUSTOMER_ACCOUNT_TYPE;

    /**
     * @param Query $query
     * @return CustomerAccountType[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_ACCOUNT_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerAccountType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_ACCOUNT_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getAccountTypeName()
    {
        return $this->getProperty('accountTypeName');
    }

    /**
     * @param string $accountTypeName
     */
    public function setAccountTypeName(string $accountTypeName = null)
    {
        $this->setProperty('accountTypeName', $accountTypeName);
    }

    /**
     * @return string
     */
    public function getAccountTypeDescription()
    {
        return $this->getProperty('accountTypeDescription');
    }

    /**
     * @param string $accountTypeDescription
     */
    public function setAccountTypeDescription(string $accountTypeDescription = null)
    {
        $this->setProperty('accountTypeDescription', $accountTypeDescription);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->getProperty('category');
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category = null)
    {
        $this->setProperty('category', $category);
    }

    /**
     * @return bool
     */
    public function getIsPrepayment()
    {
        return $this->getProperty('isPrepayment');
    }

    /**
     * @param bool $isPrepayment
     */
    public function setIsPrepayment(bool $isPrepayment = null)
    {
        $this->setProperty('isPrepayment', $isPrepayment);
    }

    /**
     * @return bool
     */
    public function getAutoCreateForStudents()
    {
        return $this->getProperty('autoCreateForStudents');
    }

    /**
     * @param bool $autoCreateForStudents
     */
    public function setAutoCreateForStudents(bool $autoCreateForStudents = null)
    {
        $this->setProperty('autoCreateForStudents', $autoCreateForStudents);
    }

    /**
     * @return bool
     */
    public function getAutoCreateForStaff()
    {
        return $this->getProperty('autoCreateForStaff');
    }

    /**
     * @param bool $autoCreateForStaff
     */
    public function setAutoCreateForStaff(bool $autoCreateForStaff = null)
    {
        $this->setProperty('autoCreateForStaff', $autoCreateForStaff);
    }

    /**
     * @return bool
     */
    public function getCardPaymentsEnabled()
    {
        return $this->getProperty('cardPaymentsEnabled');
    }

    /**
     * @param bool $cardPaymentsEnabled
     */
    public function setCardPaymentsEnabled(bool $cardPaymentsEnabled = null)
    {
        $this->setProperty('cardPaymentsEnabled', $cardPaymentsEnabled);
    }

    /**
     * @return bool
     */
    public function getShowInParentPortal()
    {
        return $this->getProperty('showInParentPortal');
    }

    /**
     * @param bool $showInParentPortal
     */
    public function setShowInParentPortal(bool $showInParentPortal = null)
    {
        $this->setProperty('showInParentPortal', $showInParentPortal);
    }

    /**
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->getProperty('accountingCode');
    }

    /**
     * @param string $accountingCode
     */
    public function setAccountingCode(string $accountingCode = null)
    {
        $this->setProperty('accountingCode', $accountingCode);
    }
}
