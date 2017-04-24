<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Person;

class PersonFormerName extends ModelBase
{
    const PERSON = 'person';

    const FROM_DATE = 'fromDate';

    const END_DATE = 'endDate';

    const LEGAL_FIRST_NAME = 'legalFirstName';

    const LEGAL_MIDDLE_NAMES = 'legalMiddleNames';

    const LEGAL_LAST_NAME = 'legalLastName';

    protected $_resourceType = ResourceType::PERSON_FORMER_NAME;

    /**
     * @param \Arbor\Query\Query $query
     * @return PersonFormerName[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PersonFormerName");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PersonFormerName
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PERSON_FORMER_NAME, $id);
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
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->getProperty("fromDate");
    }

    /**
     * @param \DateTime $fromDate
     */
    public function setFromDate(\DateTime $fromDate = null)
    {
        $this->setProperty("fromDate", $fromDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return string
     */
    public function getLegalFirstName()
    {
        return $this->getProperty("legalFirstName");
    }

    /**
     * @param string $legalFirstName
     */
    public function setLegalFirstName($legalFirstName = null)
    {
        $this->setProperty("legalFirstName", $legalFirstName);
    }

    /**
     * @return string
     */
    public function getLegalMiddleNames()
    {
        return $this->getProperty("legalMiddleNames");
    }

    /**
     * @param string $legalMiddleNames
     */
    public function setLegalMiddleNames($legalMiddleNames = null)
    {
        $this->setProperty("legalMiddleNames", $legalMiddleNames);
    }

    /**
     * @return string
     */
    public function getLegalLastName()
    {
        return $this->getProperty("legalLastName");
    }

    /**
     * @param string $legalLastName
     */
    public function setLegalLastName($legalLastName = null)
    {
        $this->setProperty("legalLastName", $legalLastName);
    }
}
