<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CustomerAccount;

class IssuedCheque extends ModelBase
{

    const CUSTOMER_ACCOUNT = 'customerAccount';

    const ISSUED_DATETIME = 'issuedDatetime';

    const ISSUED = 'issued';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::ISSUED_CHEQUE;

    /**
     * @param \Arbor\Query\Query $query
     * @return IssuedCheque[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("IssuedCheque");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return IssuedCheque
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ISSUED_CHEQUE, $id);
    }

    /**
     * @return CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty("customerAccount");
    }

    /**
     * @param CustomerAccount $customerAccount
     */
    public function setCustomerAccount(CustomerAccount $customerAccount = null)
    {
        $this->setProperty("customerAccount", $customerAccount);
    }

    /**
     * @return \DateTime
     */
    public function getIssuedDatetime()
    {
        return $this->getProperty("issuedDatetime");
    }

    /**
     * @param \DateTime $issuedDatetime
     */
    public function setIssuedDatetime(\DateTime $issuedDatetime = null)
    {
        $this->setProperty("issuedDatetime", $issuedDatetime);
    }

    /**
     * @return string
     */
    public function getIssued()
    {
        return $this->getProperty("issued");
    }

    /**
     * @param string $issued
     */
    public function setIssued($issued = null)
    {
        $this->setProperty("issued", $issued);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }


}
