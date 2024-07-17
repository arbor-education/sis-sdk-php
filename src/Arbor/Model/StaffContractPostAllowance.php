<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffContractPostAllowance extends ModelBase
{
    public const STAFF_CONTRACT_POST = 'staffContractPost';

    public const LINKED_ALLOWANCE = 'linkedAllowance';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const GROSS_ALLOWANCE = 'grossAllowance';

    public const REASON = 'reason';

    public const ALLOWANCE_TYPE = 'allowanceType';

    public const PAY_FACTOR = 'payFactor';

    public const SUPERANNUATION = 'superannuation';

    public const NI_STATUS = 'niStatus';

    public const BENEFIT_IN_KIND = 'benefitInKind';

    protected $_resourceType = ResourceType::STAFF_CONTRACT_POST_ALLOWANCE;

    /**
     * @param Query $query
     * @return StaffContractPostAllowance[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_CONTRACT_POST_ALLOWANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffContractPostAllowance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_CONTRACT_POST_ALLOWANCE, $id);
    }

    /**
     * @return \Arbor\Model\StaffContractPost
     */
    public function getStaffContractPost()
    {
        return $this->getProperty('staffContractPost');
    }

    /**
     * @param \Arbor\Model\StaffContractPost $staffContractPost
     */
    public function setStaffContractPost(\Arbor\Model\StaffContractPost $staffContractPost = null)
    {
        $this->setProperty('staffContractPost', $staffContractPost);
    }

    /**
     * @return \Arbor\Model\Allowance
     */
    public function getLinkedAllowance()
    {
        return $this->getProperty('linkedAllowance');
    }

    /**
     * @param \Arbor\Model\Allowance $linkedAllowance
     */
    public function setLinkedAllowance(\Arbor\Model\Allowance $linkedAllowance = null)
    {
        $this->setProperty('linkedAllowance', $linkedAllowance);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
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
    public function getGrossAllowance()
    {
        return $this->getProperty('grossAllowance');
    }

    /**
     * @param string $grossAllowance
     */
    public function setGrossAllowance(string $grossAllowance = null)
    {
        $this->setProperty('grossAllowance', $grossAllowance);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->getProperty('reason');
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason = null)
    {
        $this->setProperty('reason', $reason);
    }

    /**
     * @return string
     */
    public function getAllowanceType()
    {
        return $this->getProperty('allowanceType');
    }

    /**
     * @param string $allowanceType
     */
    public function setAllowanceType(string $allowanceType = null)
    {
        $this->setProperty('allowanceType', $allowanceType);
    }

    /**
     * @return float
     */
    public function getPayFactor()
    {
        return $this->getProperty('payFactor');
    }

    /**
     * @param float $payFactor
     */
    public function setPayFactor(float $payFactor = null)
    {
        $this->setProperty('payFactor', $payFactor);
    }

    /**
     * @return bool
     */
    public function getSuperannuation()
    {
        return $this->getProperty('superannuation');
    }

    /**
     * @param bool $superannuation
     */
    public function setSuperannuation(bool $superannuation = null)
    {
        $this->setProperty('superannuation', $superannuation);
    }

    /**
     * @return bool
     */
    public function getNiStatus()
    {
        return $this->getProperty('niStatus');
    }

    /**
     * @param bool $niStatus
     */
    public function setNiStatus(bool $niStatus = null)
    {
        $this->setProperty('niStatus', $niStatus);
    }

    /**
     * @return bool
     */
    public function getBenefitInKind()
    {
        return $this->getProperty('benefitInKind');
    }

    /**
     * @param bool $benefitInKind
     */
    public function setBenefitInKind(bool $benefitInKind = null)
    {
        $this->setProperty('benefitInKind', $benefitInKind);
    }
}
