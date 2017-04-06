<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Company;
use \Arbor\Model\Person;

class CompanyStaff extends ModelBase
{

    const COMPANY = 'company';

    const PERSON = 'person';

    const POSITION = 'position';

    protected $_resourceType = ResourceType::COMPANY_STAFF;

    /**
     * @param \Arbor\Query\Query $query
     * @return CompanyStaff[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CompanyStaff");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CompanyStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::COMPANY_STAFF, $id);
    }

    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->getProperty("company");
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company = null)
    {
        $this->setProperty("company", $company);
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->getProperty("person");
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person = null)
    {
        $this->setProperty("person", $person);
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->getProperty("position");
    }

    /**
     * @param string $position
     */
    public function setPosition($position = null)
    {
        $this->setProperty("position", $position);
    }


}
