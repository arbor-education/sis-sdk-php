<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StaffContract extends ModelBase
{
    const STAFF = 'staff';

    const STAFF_EMPLOYMENT_TYPE = 'staffEmploymentType';

    const CONTRACT_NAME = 'contractName';

    const CONTRACT_REFERENCE = 'contractReference';

    const ISSUED_DATE = 'issuedDate';

    const START_DATE = 'startDate';

    const EXPECTED_END_DATE = 'expectedEndDate';

    const END_DATE = 'endDate';

    const PAYROLL_NUMBER = 'payrollNumber';

    const STAFF_ORIGIN = 'staffOrigin';

    const STAFF_DESTINATION = 'staffDestination';

    const STAFF_LEAVING_REASON = 'staffLeavingReason';

    const SUPERANNUATION_SCHEME = 'superannuationScheme';

    const LAST_PAY_REVIEW_DATE = 'lastPayReviewDate';

    protected $_resourceType = ResourceType::STAFF_CONTRACT;

    /**
     * @param Query $query
     * @return StaffContract[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_CONTRACT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffContract
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_CONTRACT, $id);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return StaffEmploymentType
     */
    public function getStaffEmploymentType()
    {
        return $this->getProperty('staffEmploymentType');
    }

    /**
     * @param StaffEmploymentType $staffEmploymentType
     */
    public function setStaffEmploymentType(StaffEmploymentType $staffEmploymentType = null)
    {
        $this->setProperty('staffEmploymentType', $staffEmploymentType);
    }

    /**
     * @return string
     */
    public function getContractName()
    {
        return $this->getProperty('contractName');
    }

    /**
     * @param string $contractName
     */
    public function setContractName($contractName = null)
    {
        $this->setProperty('contractName', $contractName);
    }

    /**
     * @return string
     */
    public function getContractReference()
    {
        return $this->getProperty('contractReference');
    }

    /**
     * @param string $contractReference
     */
    public function setContractReference($contractReference = null)
    {
        $this->setProperty('contractReference', $contractReference);
    }

    /**
     * @return \DateTime
     */
    public function getIssuedDate()
    {
        return $this->getProperty('issuedDate');
    }

    /**
     * @param \DateTime $issuedDate
     */
    public function setIssuedDate(\DateTime $issuedDate = null)
    {
        $this->setProperty('issuedDate', $issuedDate);
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
    public function getPayrollNumber()
    {
        return $this->getProperty('payrollNumber');
    }

    /**
     * @param string $payrollNumber
     */
    public function setPayrollNumber($payrollNumber = null)
    {
        $this->setProperty('payrollNumber', $payrollNumber);
    }

    /**
     * @return StaffOrigin
     */
    public function getStaffOrigin()
    {
        return $this->getProperty('staffOrigin');
    }

    /**
     * @param StaffOrigin $staffOrigin
     */
    public function setStaffOrigin(StaffOrigin $staffOrigin = null)
    {
        $this->setProperty('staffOrigin', $staffOrigin);
    }

    /**
     * @return StaffDestination
     */
    public function getStaffDestination()
    {
        return $this->getProperty('staffDestination');
    }

    /**
     * @param StaffDestination $staffDestination
     */
    public function setStaffDestination(StaffDestination $staffDestination = null)
    {
        $this->setProperty('staffDestination', $staffDestination);
    }

    /**
     * @return StaffLeavingReason
     */
    public function getStaffLeavingReason()
    {
        return $this->getProperty('staffLeavingReason');
    }

    /**
     * @param StaffLeavingReason $staffLeavingReason
     */
    public function setStaffLeavingReason(StaffLeavingReason $staffLeavingReason = null)
    {
        $this->setProperty('staffLeavingReason', $staffLeavingReason);
    }

    /**
     * @return SuperannuationScheme
     */
    public function getSuperannuationScheme()
    {
        return $this->getProperty('superannuationScheme');
    }

    /**
     * @param SuperannuationScheme $superannuationScheme
     */
    public function setSuperannuationScheme(SuperannuationScheme $superannuationScheme = null)
    {
        $this->setProperty('superannuationScheme', $superannuationScheme);
    }

    /**
     * @return \DateTime
     */
    public function getLastPayReviewDate()
    {
        return $this->getProperty('lastPayReviewDate');
    }

    /**
     * @param \DateTime $lastPayReviewDate
     */
    public function setLastPayReviewDate(\DateTime $lastPayReviewDate = null)
    {
        $this->setProperty('lastPayReviewDate', $lastPayReviewDate);
    }

}
