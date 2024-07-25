<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EligibilityRecord extends ModelBase
{
    public const ELIGIBILITY = 'eligibility';

    public const PERSON = 'person';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const LAST_VERIFIED_DATE = 'lastVerifiedDate';

    public const NEXT_CHECK_DATE = 'nextCheckDate';

    protected $_resourceType = ResourceType::ELIGIBILITY_RECORD;

    /**
     * @param Query $query
     * @return EligibilityRecord[] | Collection
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

        $query->setResourceType(ResourceType::ELIGIBILITY_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EligibilityRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ELIGIBILITY_RECORD, $id);
    }

    /**
     * @return \Arbor\Model\Eligibility
     */
    public function getEligibility()
    {
        return $this->getProperty('eligibility');
    }

    /**
     * @param \Arbor\Model\Eligibility $eligibility
     */
    public function setEligibility(\Arbor\Model\Eligibility $eligibility = null)
    {
        $this->setProperty('eligibility', $eligibility);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(\ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
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
     * @return \DateTime
     */
    public function getLastVerifiedDate()
    {
        return $this->getProperty('lastVerifiedDate');
    }

    /**
     * @param \DateTime $lastVerifiedDate
     */
    public function setLastVerifiedDate(\DateTime $lastVerifiedDate = null)
    {
        $this->setProperty('lastVerifiedDate', $lastVerifiedDate);
    }

    /**
     * @return \DateTime
     */
    public function getNextCheckDate()
    {
        return $this->getProperty('nextCheckDate');
    }

    /**
     * @param \DateTime $nextCheckDate
     */
    public function setNextCheckDate(\DateTime $nextCheckDate = null)
    {
        $this->setProperty('nextCheckDate', $nextCheckDate);
    }
}
