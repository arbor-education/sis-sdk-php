<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Eligibility;

class EligibilityRecord extends ModelBase
{

    const ELIGIBILITY = 'eligibility';

    const PERSON = 'person';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const LAST_VERIFIED_DATE = 'lastVerifiedDate';

    const NEXT_CHECK_DATE = 'nextCheckDate';

    protected $_resourceType = ResourceType::ELIGIBILITY_RECORD;

    /**
     * @param \Arbor\Query\Query $query
     * @return EligibilityRecord[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("EligibilityRecord");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EligibilityRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ELIGIBILITY_RECORD, $id);
    }

    /**
     * @return Eligibility
     */
    public function getEligibility()
    {
        return $this->getProperty("eligibility");
    }

    /**
     * @param Eligibility $eligibility
     */
    public function setEligibility(Eligibility $eligibility = null)
    {
        $this->setProperty("eligibility", $eligibility);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty("person");
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty("person", $person);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
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
     * @return \DateTime
     */
    public function getLastVerifiedDate()
    {
        return $this->getProperty("lastVerifiedDate");
    }

    /**
     * @param \DateTime $lastVerifiedDate
     */
    public function setLastVerifiedDate(\DateTime $lastVerifiedDate = null)
    {
        $this->setProperty("lastVerifiedDate", $lastVerifiedDate);
    }

    /**
     * @return \DateTime
     */
    public function getNextCheckDate()
    {
        return $this->getProperty("nextCheckDate");
    }

    /**
     * @param \DateTime $nextCheckDate
     */
    public function setNextCheckDate(\DateTime $nextCheckDate = null)
    {
        $this->setProperty("nextCheckDate", $nextCheckDate);
    }


}
