<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdHocBursaryPayment extends ModelBase
{
    public const STUDENT = 'student';

    public const BURSARY_TYPE = 'bursaryType';

    public const AMOUNT = 'amount';

    public const PAID_DATE = 'paidDate';

    public const APPROVED_DATE = 'approvedDate';

    public const APPROVED_BY_STAFF = 'approvedByStaff';

    protected $_resourceType = ResourceType::AD_HOC_BURSARY_PAYMENT;

    /**
     * @param Query $query
     * @return AdHocBursaryPayment[] | Collection
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

        $query->setResourceType(ResourceType::AD_HOC_BURSARY_PAYMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdHocBursaryPayment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AD_HOC_BURSARY_PAYMENT, $id);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \Arbor\Model\BursaryType
     */
    public function getBursaryType()
    {
        return $this->getProperty('bursaryType');
    }

    /**
     * @param \Arbor\Model\BursaryType $bursaryType
     */
    public function setBursaryType(\Arbor\Model\BursaryType $bursaryType = null)
    {
        $this->setProperty('bursaryType', $bursaryType);
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->getProperty('amount');
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount = null)
    {
        $this->setProperty('amount', $amount);
    }

    /**
     * @return \DateTime
     */
    public function getPaidDate()
    {
        return $this->getProperty('paidDate');
    }

    /**
     * @param \DateTime $paidDate
     */
    public function setPaidDate(\DateTime $paidDate = null)
    {
        $this->setProperty('paidDate', $paidDate);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDate()
    {
        return $this->getProperty('approvedDate');
    }

    /**
     * @param \DateTime $approvedDate
     */
    public function setApprovedDate(\DateTime $approvedDate = null)
    {
        $this->setProperty('approvedDate', $approvedDate);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getApprovedByStaff()
    {
        return $this->getProperty('approvedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $approvedByStaff
     */
    public function setApprovedByStaff(\Arbor\Model\Staff $approvedByStaff = null)
    {
        $this->setProperty('approvedByStaff', $approvedByStaff);
    }
}
