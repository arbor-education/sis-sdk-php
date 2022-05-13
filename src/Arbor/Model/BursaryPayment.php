<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BursaryPayment extends ModelBase
{

    const STUDENT = 'student';

    const BURSARY_LEVEL_AMOUNT = 'bursaryLevelAmount';

    const BURSARY_PAYMENT_DATE = 'bursaryPaymentDate';

    const APPROVED_DATE = 'approvedDate';

    const APPROVED_BY_STAFF = 'approvedByStaff';

    const REJECTED_DATE = 'rejectedDate';

    const REJECTED_BY_STAFF = 'rejectedByStaff';

    const PAID_DATE = 'paidDate';

    protected $_resourceType = ResourceType::BURSARY_PAYMENT;

    /**
     * @param Query $query
     * @return BursaryPayment[] | Collection
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
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return BursaryLevelAmount
     */
    public function getBursaryLevelAmount()
    {
        return $this->getProperty('bursaryLevelAmount');
    }

    /**
     * @param BursaryLevelAmount $bursaryLevelAmount
     */
    public function setBursaryLevelAmount(BursaryLevelAmount $bursaryLevelAmount = null)
    {
        $this->setProperty('bursaryLevelAmount', $bursaryLevelAmount);
    }

    /**
     * @return BursaryPaymentDate
     */
    public function getBursaryPaymentDate()
    {
        return $this->getProperty('bursaryPaymentDate');
    }

    /**
     * @param BursaryPaymentDate $bursaryPaymentDate
     */
    public function setBursaryPaymentDate(BursaryPaymentDate $bursaryPaymentDate = null)
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
     * @return Staff
     */
    public function getApprovedByStaff()
    {
        return $this->getProperty('approvedByStaff');
    }

    /**
     * @param Staff $approvedByStaff
     */
    public function setApprovedByStaff(Staff $approvedByStaff = null)
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
     * @return Staff
     */
    public function getRejectedByStaff()
    {
        return $this->getProperty('rejectedByStaff');
    }

    /**
     * @param Staff $rejectedByStaff
     */
    public function setRejectedByStaff(Staff $rejectedByStaff = null)
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
