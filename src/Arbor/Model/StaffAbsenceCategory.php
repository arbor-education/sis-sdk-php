<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class StaffAbsenceCategory extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const CATEGORY_NAME = 'categoryName';

    const IS_PAID_SICK_LEAVE = 'isPaidSickLeave';

    const IS_UNPAID_SICK_LEAVE = 'isUnpaidSickLeave';

    const IS_PAID_HOLIDAY = 'isPaidHoliday';

    const IS_UNPAID_HOLIDAY = 'isUnpaidHoliday';

    const IS_PAID_MATERNITY = 'isPaidMaternity';

    const IS_UNPAID_MATERNITY = 'isUnpaidMaternity';

    const IS_PAID_PATERNITY = 'isPaidPaternity';

    const IS_UNPAID_PATERNITY = 'isUnpaidPaternity';

    const IS_AUTHORIZED_ABSENCE = 'isAuthorizedAbsence';

    protected $_resourceType = ResourceType::STAFF_ABSENCE_CATEGORY;

    /**
     * @param \Arbor\Query\Query $query
     * @return StaffAbsenceCategory[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StaffAbsenceCategory");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StaffAbsenceCategory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STAFF_ABSENCE_CATEGORY, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->getProperty("categoryName");
    }

    /**
     * @param string $categoryName
     */
    public function setCategoryName($categoryName = null)
    {
        $this->setProperty("categoryName", $categoryName);
    }

    /**
     * @return bool
     */
    public function getIsPaidSickLeave()
    {
        return $this->getProperty("isPaidSickLeave");
    }

    /**
     * @param bool $isPaidSickLeave
     */
    public function setIsPaidSickLeave($isPaidSickLeave = null)
    {
        $this->setProperty("isPaidSickLeave", $isPaidSickLeave);
    }

    /**
     * @return bool
     */
    public function getIsUnpaidSickLeave()
    {
        return $this->getProperty("isUnpaidSickLeave");
    }

    /**
     * @param bool $isUnpaidSickLeave
     */
    public function setIsUnpaidSickLeave($isUnpaidSickLeave = null)
    {
        $this->setProperty("isUnpaidSickLeave", $isUnpaidSickLeave);
    }

    /**
     * @return bool
     */
    public function getIsPaidHoliday()
    {
        return $this->getProperty("isPaidHoliday");
    }

    /**
     * @param bool $isPaidHoliday
     */
    public function setIsPaidHoliday($isPaidHoliday = null)
    {
        $this->setProperty("isPaidHoliday", $isPaidHoliday);
    }

    /**
     * @return bool
     */
    public function getIsUnpaidHoliday()
    {
        return $this->getProperty("isUnpaidHoliday");
    }

    /**
     * @param bool $isUnpaidHoliday
     */
    public function setIsUnpaidHoliday($isUnpaidHoliday = null)
    {
        $this->setProperty("isUnpaidHoliday", $isUnpaidHoliday);
    }

    /**
     * @return bool
     */
    public function getIsPaidMaternity()
    {
        return $this->getProperty("isPaidMaternity");
    }

    /**
     * @param bool $isPaidMaternity
     */
    public function setIsPaidMaternity($isPaidMaternity = null)
    {
        $this->setProperty("isPaidMaternity", $isPaidMaternity);
    }

    /**
     * @return bool
     */
    public function getIsUnpaidMaternity()
    {
        return $this->getProperty("isUnpaidMaternity");
    }

    /**
     * @param bool $isUnpaidMaternity
     */
    public function setIsUnpaidMaternity($isUnpaidMaternity = null)
    {
        $this->setProperty("isUnpaidMaternity", $isUnpaidMaternity);
    }

    /**
     * @return bool
     */
    public function getIsPaidPaternity()
    {
        return $this->getProperty("isPaidPaternity");
    }

    /**
     * @param bool $isPaidPaternity
     */
    public function setIsPaidPaternity($isPaidPaternity = null)
    {
        $this->setProperty("isPaidPaternity", $isPaidPaternity);
    }

    /**
     * @return bool
     */
    public function getIsUnpaidPaternity()
    {
        return $this->getProperty("isUnpaidPaternity");
    }

    /**
     * @param bool $isUnpaidPaternity
     */
    public function setIsUnpaidPaternity($isUnpaidPaternity = null)
    {
        $this->setProperty("isUnpaidPaternity", $isUnpaidPaternity);
    }

    /**
     * @return bool
     */
    public function getIsAuthorizedAbsence()
    {
        return $this->getProperty("isAuthorizedAbsence");
    }

    /**
     * @param bool $isAuthorizedAbsence
     */
    public function setIsAuthorizedAbsence($isAuthorizedAbsence = null)
    {
        $this->setProperty("isAuthorizedAbsence", $isAuthorizedAbsence);
    }
}
