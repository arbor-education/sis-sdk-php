<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PersonFormerName extends ModelBase
{
    public const PERSON = 'person';

    public const FROM_DATE = 'fromDate';

    public const END_DATE = 'endDate';

    public const LEGAL_FIRST_NAME = 'legalFirstName';

    public const LEGAL_MIDDLE_NAMES = 'legalMiddleNames';

    public const LEGAL_LAST_NAME = 'legalLastName';

    protected $_resourceType = ResourceType::PERSON_FORMER_NAME;

    /**
     * @param Query $query
     * @return PersonFormerName[] | Collection
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

        $query->setResourceType(ResourceType::PERSON_FORMER_NAME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonFormerName
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON_FORMER_NAME, $id);
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
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->getProperty('fromDate');
    }

    /**
     * @param \DateTime $fromDate
     */
    public function setFromDate(\DateTime $fromDate = null)
    {
        $this->setProperty('fromDate', $fromDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getLegalFirstName()
    {
        return $this->getProperty('legalFirstName');
    }

    /**
     * @param string $legalFirstName
     */
    public function setLegalFirstName(string $legalFirstName = null)
    {
        $this->setProperty('legalFirstName', $legalFirstName);
    }

    /**
     * @return string
     */
    public function getLegalMiddleNames()
    {
        return $this->getProperty('legalMiddleNames');
    }

    /**
     * @param string $legalMiddleNames
     */
    public function setLegalMiddleNames(string $legalMiddleNames = null)
    {
        $this->setProperty('legalMiddleNames', $legalMiddleNames);
    }

    /**
     * @return string
     */
    public function getLegalLastName()
    {
        return $this->getProperty('legalLastName');
    }

    /**
     * @param string $legalLastName
     */
    public function setLegalLastName(string $legalLastName = null)
    {
        $this->setProperty('legalLastName', $legalLastName);
    }
}
