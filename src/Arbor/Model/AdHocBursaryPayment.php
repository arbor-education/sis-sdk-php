<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AdHocBursaryPayment extends ModelBase
{
    const STUDENT = 'student';

    const BURSARY_TYPE = 'bursaryType';

    const AMOUNT = 'amount';

    const PAID_DATE = 'paidDate';

    const APPROVED_DATE = 'approvedDate';

    const APPROVED_BY_STAFF = 'approvedByStaff';

    protected $_resourceType = ResourceType::AD_HOC_BURSARY_PAYMENT;

    /**
     * @param Query $query
     * @return AdHocBursaryPayment[] | Collection
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
     * @return BursaryType
     */
    public function getBursaryType()
    {
        return $this->getProperty('bursaryType');
    }

    /**
     * @param BursaryType $bursaryType
     */
    public function setBursaryType(BursaryType $bursaryType = null)
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
    public function setAmount($amount = null)
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

}
