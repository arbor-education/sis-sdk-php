<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffContract extends ModelBase
{
    public const STAFF = 'staff';

    public const STAFF_EMPLOYMENT_TYPE = 'staffEmploymentType';

    public const CONTRACT_NAME = 'contractName';

    public const CONTRACT_REFERENCE = 'contractReference';

    public const ISSUED_DATE = 'issuedDate';

    public const START_DATE = 'startDate';

    public const EXPECTED_END_DATE = 'expectedEndDate';

    public const END_DATE = 'endDate';

    public const PAYROLL_NUMBER = 'payrollNumber';

    public const STAFF_ORIGIN = 'staffOrigin';

    public const STAFF_DESTINATION = 'staffDestination';

    public const STAFF_LEAVING_REASON = 'staffLeavingReason';

    public const SUPERANNUATION_SCHEME = 'superannuationScheme';

    public const LAST_PAY_REVIEW_DATE = 'lastPayReviewDate';

    protected $_resourceType = ResourceType::STAFF_CONTRACT;

    /**
     * @param Query $query
     * @return StaffContract[] | Collection
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
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return \Arbor\Model\StaffEmploymentType
     */
    public function getStaffEmploymentType()
    {
        return $this->getProperty('staffEmploymentType');
    }

    /**
     * @param \Arbor\Model\StaffEmploymentType $staffEmploymentType
     */
    public function setStaffEmploymentType(\Arbor\Model\StaffEmploymentType $staffEmploymentType = null)
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
    public function setContractName(string $contractName = null)
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
    public function setContractReference(string $contractReference = null)
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
    public function setPayrollNumber(string $payrollNumber = null)
    {
        $this->setProperty('payrollNumber', $payrollNumber);
    }

    /**
     * @return \Arbor\Model\StaffOrigin
     */
    public function getStaffOrigin()
    {
        return $this->getProperty('staffOrigin');
    }

    /**
     * @param \Arbor\Model\StaffOrigin $staffOrigin
     */
    public function setStaffOrigin(\Arbor\Model\StaffOrigin $staffOrigin = null)
    {
        $this->setProperty('staffOrigin', $staffOrigin);
    }

    /**
     * @return \Arbor\Model\StaffDestination
     */
    public function getStaffDestination()
    {
        return $this->getProperty('staffDestination');
    }

    /**
     * @param \Arbor\Model\StaffDestination $staffDestination
     */
    public function setStaffDestination(\Arbor\Model\StaffDestination $staffDestination = null)
    {
        $this->setProperty('staffDestination', $staffDestination);
    }

    /**
     * @return \Arbor\Model\StaffLeavingReason
     */
    public function getStaffLeavingReason()
    {
        return $this->getProperty('staffLeavingReason');
    }

    /**
     * @param \Arbor\Model\StaffLeavingReason $staffLeavingReason
     */
    public function setStaffLeavingReason(\Arbor\Model\StaffLeavingReason $staffLeavingReason = null)
    {
        $this->setProperty('staffLeavingReason', $staffLeavingReason);
    }

    /**
     * @return \Arbor\Model\SuperannuationScheme
     */
    public function getSuperannuationScheme()
    {
        return $this->getProperty('superannuationScheme');
    }

    /**
     * @param \Arbor\Model\SuperannuationScheme $superannuationScheme
     */
    public function setSuperannuationScheme(\Arbor\Model\SuperannuationScheme $superannuationScheme = null)
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
