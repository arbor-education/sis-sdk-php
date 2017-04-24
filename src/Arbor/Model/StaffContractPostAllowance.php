<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\StaffContractPost;
use \Arbor\Model\Allowance;

class StaffContractPostAllowance extends ModelBase
{
    const STAFF_CONTRACT_POST = 'staffContractPost';

    const LINKED_ALLOWANCE = 'linkedAllowance';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const GROSS_ALLOWANCE = 'grossAllowance';

    const REASON = 'reason';

    const ALLOWANCE_TYPE = 'allowanceType';

    const PAY_FACTOR = 'payFactor';

    const SUPERANNUATION = 'superannuation';

    const NI_STATUS = 'niStatus';

    const BENEFIT_IN_KIND = 'benefitInKind';

    protected $_resourceType = ResourceType::STAFF_CONTRACT_POST_ALLOWANCE;

    /**
     * @param \Arbor\Query\Query $query
     * @return StaffContractPostAllowance[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StaffContractPostAllowance");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StaffContractPostAllowance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STAFF_CONTRACT_POST_ALLOWANCE, $id);
    }

    /**
     * @return StaffContractPost
     */
    public function getStaffContractPost()
    {
        return $this->getProperty("staffContractPost");
    }

    /**
     * @param StaffContractPost $staffContractPost
     */
    public function setStaffContractPost(StaffContractPost $staffContractPost = null)
    {
        $this->setProperty("staffContractPost", $staffContractPost);
    }

    /**
     * @return Allowance
     */
    public function getLinkedAllowance()
    {
        return $this->getProperty("linkedAllowance");
    }

    /**
     * @param Allowance $linkedAllowance
     */
    public function setLinkedAllowance(Allowance $linkedAllowance = null)
    {
        $this->setProperty("linkedAllowance", $linkedAllowance);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
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
    public function getGrossAllowance()
    {
        return $this->getProperty("grossAllowance");
    }

    /**
     * @param string $grossAllowance
     */
    public function setGrossAllowance($grossAllowance = null)
    {
        $this->setProperty("grossAllowance", $grossAllowance);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->getProperty("reason");
    }

    /**
     * @param string $reason
     */
    public function setReason($reason = null)
    {
        $this->setProperty("reason", $reason);
    }

    /**
     * @return string
     */
    public function getAllowanceType()
    {
        return $this->getProperty("allowanceType");
    }

    /**
     * @param string $allowanceType
     */
    public function setAllowanceType($allowanceType = null)
    {
        $this->setProperty("allowanceType", $allowanceType);
    }

    /**
     * @return float
     */
    public function getPayFactor()
    {
        return $this->getProperty("payFactor");
    }

    /**
     * @param float $payFactor
     */
    public function setPayFactor($payFactor = null)
    {
        $this->setProperty("payFactor", $payFactor);
    }

    /**
     * @return bool
     */
    public function getSuperannuation()
    {
        return $this->getProperty("superannuation");
    }

    /**
     * @param bool $superannuation
     */
    public function setSuperannuation($superannuation = null)
    {
        $this->setProperty("superannuation", $superannuation);
    }

    /**
     * @return bool
     */
    public function getNiStatus()
    {
        return $this->getProperty("niStatus");
    }

    /**
     * @param bool $niStatus
     */
    public function setNiStatus($niStatus = null)
    {
        $this->setProperty("niStatus", $niStatus);
    }

    /**
     * @return bool
     */
    public function getBenefitInKind()
    {
        return $this->getProperty("benefitInKind");
    }

    /**
     * @param bool $benefitInKind
     */
    public function setBenefitInKind($benefitInKind = null)
    {
        $this->setProperty("benefitInKind", $benefitInKind);
    }
}
