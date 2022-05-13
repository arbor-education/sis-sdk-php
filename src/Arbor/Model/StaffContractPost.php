<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StaffContractPost extends ModelBase
{

    const STAFF_CONTRACT = 'staffContract';

    const POSITION = 'position';

    const POST_REFERENCE = 'postReference';

    const JOB_TITLE = 'jobTitle';

    const OFFERED_DATE = 'offeredDate';

    const ACCEPTED_DATE = 'acceptedDate';

    const START_DATE = 'startDate';

    const START_REASON = 'startReason';

    const EXPECTED_END_DATE = 'expectedEndDate';

    const EXPECTED_END_REASON = 'expectedEndReason';

    const END_DATE = 'endDate';

    const END_REASON = 'endReason';

    protected $_resourceType = ResourceType::STAFF_CONTRACT_POST;

    /**
     * @param Query $query
     * @return StaffContractPost[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_CONTRACT_POST);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffContractPost
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_CONTRACT_POST, $id);
    }

    /**
     * @return StaffContract
     */
    public function getStaffContract()
    {
        return $this->getProperty('staffContract');
    }

    /**
     * @param StaffContract $staffContract
     */
    public function setStaffContract(StaffContract $staffContract = null)
    {
        $this->setProperty('staffContract', $staffContract);
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->getProperty('position');
    }

    /**
     * @param Position $position
     */
    public function setPosition(Position $position = null)
    {
        $this->setProperty('position', $position);
    }

    /**
     * @return string
     */
    public function getPostReference()
    {
        return $this->getProperty('postReference');
    }

    /**
     * @param string $postReference
     */
    public function setPostReference($postReference = null)
    {
        $this->setProperty('postReference', $postReference);
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->getProperty('jobTitle');
    }

    /**
     * @param string $jobTitle
     */
    public function setJobTitle($jobTitle = null)
    {
        $this->setProperty('jobTitle', $jobTitle);
    }

    /**
     * @return \DateTime
     */
    public function getOfferedDate()
    {
        return $this->getProperty('offeredDate');
    }

    /**
     * @param \DateTime $offeredDate
     */
    public function setOfferedDate(\DateTime $offeredDate = null)
    {
        $this->setProperty('offeredDate', $offeredDate);
    }

    /**
     * @return \DateTime
     */
    public function getAcceptedDate()
    {
        return $this->getProperty('acceptedDate');
    }

    /**
     * @param \DateTime $acceptedDate
     */
    public function setAcceptedDate(\DateTime $acceptedDate = null)
    {
        $this->setProperty('acceptedDate', $acceptedDate);
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
     * @return StaffContractPostStartReason
     */
    public function getStartReason()
    {
        return $this->getProperty('startReason');
    }

    /**
     * @param StaffContractPostStartReason $startReason
     */
    public function setStartReason(StaffContractPostStartReason $startReason = null)
    {
        $this->setProperty('startReason', $startReason);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedEndDate()
    {
        return $this->getProperty('expectedEndDate');
    }

    /**
     * @param \DateTime $expectedEndDate
     */
    public function setExpectedEndDate(\DateTime $expectedEndDate = null)
    {
        $this->setProperty('expectedEndDate', $expectedEndDate);
    }

    /**
     * @return StaffContractPostEndReason
     */
    public function getExpectedEndReason()
    {
        return $this->getProperty('expectedEndReason');
    }

    /**
     * @param StaffContractPostEndReason $expectedEndReason
     */
    public function setExpectedEndReason(StaffContractPostEndReason $expectedEndReason = null)
    {
        $this->setProperty('expectedEndReason', $expectedEndReason);
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
     * @return StaffContractPostEndReason
     */
    public function getEndReason()
    {
        return $this->getProperty('endReason');
    }

    /**
     * @param StaffContractPostEndReason $endReason
     */
    public function setEndReason(StaffContractPostEndReason $endReason = null)
    {
        $this->setProperty('endReason', $endReason);
    }


}
