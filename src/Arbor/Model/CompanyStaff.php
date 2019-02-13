<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CompanyStaff extends ModelBase
{

    const COMPANY = 'company';

    const PERSON = 'person';

    const POSITION = 'position';

    protected $_resourceType = ResourceType::COMPANY_STAFF;

    /**
     * @param Query $query
     * @return CompanyStaff[] | Collection
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

        $query->setResourceType(ResourceType::COMPANY_STAFF);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CompanyStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COMPANY_STAFF, $id);
    }

    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->getProperty('company');
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company = null)
    {
        $this->setProperty('company', $company);
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->getProperty('position');
    }

    /**
     * @param string $position
     */
    public function setPosition($position = null)
    {
        $this->setProperty('position', $position);
    }


}
