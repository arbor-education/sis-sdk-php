<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CompanyStaff extends ModelBase
{
    public const COMPANY = 'company';

    public const PERSON = 'person';

    public const POSITION = 'position';

    protected $_resourceType = ResourceType::COMPANY_STAFF;

    /**
     * @param Query $query
     * @return CompanyStaff[] | Collection
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
     * @return \Arbor\Model\Company
     */
    public function getCompany()
    {
        return $this->getProperty('company');
    }

    /**
     * @param \Arbor\Model\Company $company
     */
    public function setCompany(\Arbor\Model\Company $company = null)
    {
        $this->setProperty('company', $company);
    }

    /**
     * @return \Arbor\Model\Person
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param \Arbor\Model\Person $person
     */
    public function setPerson(\Arbor\Model\Person $person = null)
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
    public function setPosition(string $position = null)
    {
        $this->setProperty('position', $position);
    }
}
