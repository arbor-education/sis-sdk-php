<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BursaryPayment extends ModelBase
{
    public const STUDENT = 'student';

    public const BURSARY_LEVEL_AMOUNT = 'bursaryLevelAmount';

    public const BURSARY_PAYMENT_DATE = 'bursaryPaymentDate';

    public const APPROVED_DATE = 'approvedDate';

    public const APPROVED_BY_STAFF = 'approvedByStaff';

    public const REJECTED_DATE = 'rejectedDate';

    public const REJECTED_BY_STAFF = 'rejectedByStaff';

    public const PAID_DATE = 'paidDate';

    protected $_resourceType = ResourceType::BURSARY_PAYMENT;

    /**
     * @param Query $query
     * @return BursaryPayment[] | Collection
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

        $query->setResourceType(ResourceType::BURSARY_PAYMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BursaryPayment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BURSARY_PAYMENT, $id);
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
     * @return \Arbor\Model\BursaryLevelAmount
     */
    public function getBursaryLevelAmount()
    {
        return $this->getProperty('bursaryLevelAmount');
    }

    /**
     * @param \Arbor\Model\BursaryLevelAmount $bursaryLevelAmount
     */
    public function setBursaryLevelAmount(\Arbor\Model\BursaryLevelAmount $bursaryLevelAmount = null)
    {
        $this->setProperty('bursaryLevelAmount', $bursaryLevelAmount);
    }

    /**
     * @return \Arbor\Model\BursaryPaymentDate
     */
    public function getBursaryPaymentDate()
    {
        return $this->getProperty('bursaryPaymentDate');
    }

    /**
     * @param \Arbor\Model\BursaryPaymentDate $bursaryPaymentDate
     */
    public function setBursaryPaymentDate(\Arbor\Model\BursaryPaymentDate $bursaryPaymentDate = null)
    {
        $this->setProperty('bursaryPaymentDate', $bursaryPaymentDate);
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

    /**
     * @return \DateTime
     */
    public function getRejectedDate()
    {
        return $this->getProperty('rejectedDate');
    }

    /**
     * @param \DateTime $rejectedDate
     */
    public function setRejectedDate(\DateTime $rejectedDate = null)
    {
        $this->setProperty('rejectedDate', $rejectedDate);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getRejectedByStaff()
    {
        return $this->getProperty('rejectedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $rejectedByStaff
     */
    public function setRejectedByStaff(\Arbor\Model\Staff $rejectedByStaff = null)
    {
        $this->setProperty('rejectedByStaff', $rejectedByStaff);
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
}
