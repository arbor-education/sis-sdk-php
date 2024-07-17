<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentClubSessionInterval extends ModelBase
{
    public const STUDENT = 'student';

    public const CLUB_SESSION_INTERVAL = 'clubSessionInterval';

    public const CLUB_SESSION = 'clubSession';

    public const PRICE_EX_VAT = 'priceExVat';

    public const VAT_RATE = 'vatRate';

    public const CUSTOMER_INVOICE = 'customerInvoice';

    public const CUSTOMER_INVOICE_ITEM = 'customerInvoiceItem';

    public const HAS_MEALS = 'hasMeals';

    protected $_resourceType = ResourceType::STUDENT_CLUB_SESSION_INTERVAL;

    /**
     * @param Query $query
     * @return StudentClubSessionInterval[] | Collection
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
     * @return \Arbor\Model\ClubSessionInterval
     */
    public function getClubSessionInterval()
    {
        return $this->getProperty('clubSessionInterval');
    }

    /**
     * @param \Arbor\Model\ClubSessionInterval $clubSessionInterval
     */
    public function setClubSessionInterval(\Arbor\Model\ClubSessionInterval $clubSessionInterval = null)
    {
        $this->setProperty('clubSessionInterval', $clubSessionInterval);
    }

    /**
     * @return \Arbor\Model\ClubSession
     */
    public function getClubSession()
    {
        return $this->getProperty('clubSession');
    }

    /**
     * @param \Arbor\Model\ClubSession $clubSession
     */
    public function setClubSession(\Arbor\Model\ClubSession $clubSession = null)
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
    public function setPriceExVat(string $priceExVat = null)
    {
        $this->setProperty('priceExVat', $priceExVat);
    }

    /**
     * @return \Arbor\Model\VatRate
     */
    public function getVatRate()
    {
        return $this->getProperty('vatRate');
    }

    /**
     * @param \Arbor\Model\VatRate $vatRate
     */
    public function setVatRate(\Arbor\Model\VatRate $vatRate = null)
    {
        $this->setProperty('vatRate', $vatRate);
    }

    /**
     * @return \Arbor\Model\CustomerInvoice
     */
    public function getCustomerInvoice()
    {
        return $this->getProperty('customerInvoice');
    }

    /**
     * @param \Arbor\Model\CustomerInvoice $customerInvoice
     */
    public function setCustomerInvoice(\Arbor\Model\CustomerInvoice $customerInvoice = null)
    {
        $this->setProperty('customerInvoice', $customerInvoice);
    }

    /**
     * @return \Arbor\Model\CustomerInvoiceItem
     */
    public function getCustomerInvoiceItem()
    {
        return $this->getProperty('customerInvoiceItem');
    }

    /**
     * @param \Arbor\Model\CustomerInvoiceItem $customerInvoiceItem
     */
    public function setCustomerInvoiceItem(\Arbor\Model\CustomerInvoiceItem $customerInvoiceItem = null)
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
    public function setHasMeals(bool $hasMeals = null)
    {
        $this->setProperty('hasMeals', $hasMeals);
    }
}
