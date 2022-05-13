<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentClubSessionInterval extends ModelBase
{
    const STUDENT = 'student';

    const CLUB_SESSION_INTERVAL = 'clubSessionInterval';

    const CLUB_SESSION = 'clubSession';

    const PRICE_EX_VAT = 'priceExVat';

    const VAT_RATE = 'vatRate';

    const CUSTOMER_INVOICE = 'customerInvoice';

    const CUSTOMER_INVOICE_ITEM = 'customerInvoiceItem';

    const HAS_MEALS = 'hasMeals';

    protected $_resourceType = ResourceType::STUDENT_CLUB_SESSION_INTERVAL;

    /**
     * @param Query $query
     * @return StudentClubSessionInterval[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_CLUB_SESSION_INTERVAL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentClubSessionInterval
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_CLUB_SESSION_INTERVAL, $id);
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
     * @return ClubSessionInterval
     */
    public function getClubSessionInterval()
    {
        return $this->getProperty('clubSessionInterval');
    }

    /**
     * @param ClubSessionInterval $clubSessionInterval
     */
    public function setClubSessionInterval(ClubSessionInterval $clubSessionInterval = null)
    {
        $this->setProperty('clubSessionInterval', $clubSessionInterval);
    }

    /**
     * @return ClubSession
     */
    public function getClubSession()
    {
        return $this->getProperty('clubSession');
    }

    /**
     * @param ClubSession $clubSession
     */
    public function setClubSession(ClubSession $clubSession = null)
    {
        $this->setProperty('clubSession', $clubSession);
    }

    /**
     * @return string
     */
    public function getPriceExVat()
    {
        return $this->getProperty('priceExVat');
    }

    /**
     * @param string $priceExVat
     */
    public function setPriceExVat($priceExVat = null)
    {
        $this->setProperty('priceExVat', $priceExVat);
    }

    /**
     * @return VatRate
     */
    public function getVatRate()
    {
        return $this->getProperty('vatRate');
    }

    /**
     * @param VatRate $vatRate
     */
    public function setVatRate(VatRate $vatRate = null)
    {
        $this->setProperty('vatRate', $vatRate);
    }

    /**
     * @return CustomerInvoice
     */
    public function getCustomerInvoice()
    {
        return $this->getProperty('customerInvoice');
    }

    /**
     * @param CustomerInvoice $customerInvoice
     */
    public function setCustomerInvoice(CustomerInvoice $customerInvoice = null)
    {
        $this->setProperty('customerInvoice', $customerInvoice);
    }

    /**
     * @return CustomerInvoiceItem
     */
    public function getCustomerInvoiceItem()
    {
        return $this->getProperty('customerInvoiceItem');
    }

    /**
     * @param CustomerInvoiceItem $customerInvoiceItem
     */
    public function setCustomerInvoiceItem(CustomerInvoiceItem $customerInvoiceItem = null)
    {
        $this->setProperty('customerInvoiceItem', $customerInvoiceItem);
    }

    /**
     * @return bool
     */
    public function getHasMeals()
    {
        return $this->getProperty('hasMeals');
    }

    /**
     * @param bool $hasMeals
     */
    public function setHasMeals($hasMeals = null)
    {
        $this->setProperty('hasMeals', $hasMeals);
    }

}
