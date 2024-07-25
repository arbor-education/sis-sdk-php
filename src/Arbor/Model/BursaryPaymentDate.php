<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BursaryPaymentDate extends ModelBase
{
    public const NAME = 'name';

    public const BURSARY_TYPE = 'bursaryType';

    public const PAYMENT_DATE = 'paymentDate';

    protected $_resourceType = ResourceType::BURSARY_PAYMENT_DATE;

    /**
     * @param Query $query
     * @return BursaryPaymentDate[] | Collection
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

        $query->setResourceType(ResourceType::BURSARY_PAYMENT_DATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BursaryPaymentDate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BURSARY_PAYMENT_DATE, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
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
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->getProperty('paymentDate');
    }

    /**
     * @param \DateTime $paymentDate
     */
    public function setPaymentDate(\DateTime $paymentDate = null)
    {
        $this->setProperty('paymentDate', $paymentDate);
    }
}
