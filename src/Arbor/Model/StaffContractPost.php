<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffContractPost extends ModelBase
{
    public const STAFF_CONTRACT = 'staffContract';

    public const POSITION = 'position';

    public const POST_REFERENCE = 'postReference';

    public const JOB_TITLE = 'jobTitle';

    public const OFFERED_DATE = 'offeredDate';

    public const ACCEPTED_DATE = 'acceptedDate';

    public const START_DATE = 'startDate';

    public const START_REASON = 'startReason';

    public const EXPECTED_END_DATE = 'expectedEndDate';

    public const EXPECTED_END_REASON = 'expectedEndReason';

    public const END_DATE = 'endDate';

    public const END_REASON = 'endReason';

    protected $_resourceType = ResourceType::STAFF_CONTRACT_POST;

    /**
     * @param Query $query
     * @return StaffContractPost[] | Collection
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
     * @return \Arbor\Model\StaffContract
     */
    public function getStaffContract()
    {
        return $this->getProperty('staffContract');
    }

    /**
     * @param \Arbor\Model\StaffContract $staffContract
     */
    public function setStaffContract(\Arbor\Model\StaffContract $staffContract = null)
    {
        $this->setProperty('staffContract', $staffContract);
    }

    /**
     * @return \Arbor\Model\Position
     */
    public function getPosition()
    {
        return $this->getProperty('position');
    }

    /**
     * @param \Arbor\Model\Position $position
     */
    public function setPosition(\Arbor\Model\Position $position = null)
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
    public function setPostReference(string $postReference = null)
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
    public function setJobTitle(string $jobTitle = null)
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
     * @return \Arbor\Model\StaffContractPostStartReason
     */
    public function getStartReason()
    {
        return $this->getProperty('startReason');
    }

    /**
     * @param \Arbor\Model\StaffContractPostStartReason $startReason
     */
    public function setStartReason(\Arbor\Model\StaffContractPostStartReason $startReason = null)
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
     * @return \Arbor\Model\StaffContractPostEndReason
     */
    public function getExpectedEndReason()
    {
        return $this->getProperty('expectedEndReason');
    }

    /**
     * @param \Arbor\Model\StaffContractPostEndReason $expectedEndReason
     */
    public function setExpectedEndReason(\Arbor\Model\StaffContractPostEndReason $expectedEndReason = null)
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
     * @return \Arbor\Model\StaffContractPostEndReason
     */
    public function getEndReason()
    {
        return $this->getProperty('endReason');
    }

    /**
     * @param \Arbor\Model\StaffContractPostEndReason $endReason
     */
    public function setEndReason(\Arbor\Model\StaffContractPostEndReason $endReason = null)
    {
        $this->setProperty('endReason', $endReason);
    }
}
