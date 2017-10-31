<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomerAccountType extends ModelBase
{

    const ACCOUNT_TYPE_NAME = 'accountTypeName';

    const ACCOUNT_TYPE_DESCRIPTION = 'accountTypeDescription';

    const CODE = 'code';

    const CATEGORY = 'category';

    const IS_PREPAYMENT = 'isPrepayment';

    const AUTO_CREATE_FOR_STUDENTS = 'autoCreateForStudents';

    const AUTO_CREATE_FOR_STAFF = 'autoCreateForStaff';

    protected $_resourceType = ResourceType::CUSTOMER_ACCOUNT_TYPE;

    /**
     * @param Query $query
     * @return CustomerAccountType[] | Collection
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
    public function setAccountTypeName($accountTypeName = null)
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
    public function setAccountTypeDescription($accountTypeDescription = null)
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
    public function setCode($code = null)
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
    public function setCategory($category = null)
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
    public function setIsPrepayment($isPrepayment = null)
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
    public function setAutoCreateForStudents($autoCreateForStudents = null)
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
    public function setAutoCreateForStaff($autoCreateForStaff = null)
    {
        $this->setProperty('autoCreateForStaff', $autoCreateForStaff);
    }


}
