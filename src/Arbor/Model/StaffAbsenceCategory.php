<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffAbsenceCategory extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const CATEGORY_NAME = 'categoryName';

    public const IS_PAID_SICK_LEAVE = 'isPaidSickLeave';

    public const IS_UNPAID_SICK_LEAVE = 'isUnpaidSickLeave';

    public const IS_PAID_HOLIDAY = 'isPaidHoliday';

    public const IS_UNPAID_HOLIDAY = 'isUnpaidHoliday';

    public const IS_PAID_MATERNITY = 'isPaidMaternity';

    public const IS_UNPAID_MATERNITY = 'isUnpaidMaternity';

    public const IS_PAID_PATERNITY = 'isPaidPaternity';

    public const IS_UNPAID_PATERNITY = 'isUnpaidPaternity';

    public const IS_AUTHORIZED_ABSENCE = 'isAuthorizedAbsence';

    public const EXPORT_CODE = 'exportCode';

    protected $_resourceType = ResourceType::STAFF_ABSENCE_CATEGORY;

    /**
     * @param Query $query
     * @return StaffAbsenceCategory[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_ABSENCE_CATEGORY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffAbsenceCategory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_ABSENCE_CATEGORY, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->getProperty('categoryName');
    }

    /**
     * @param string $categoryName
     */
    public function setCategoryName(string $categoryName = null)
    {
        $this->setProperty('categoryName', $categoryName);
    }

    /**
     * @return bool
     */
    public function getIsPaidSickLeave()
    {
        return $this->getProperty('isPaidSickLeave');
    }

    /**
     * @param bool $isPaidSickLeave
     */
    public function setIsPaidSickLeave(bool $isPaidSickLeave = null)
    {
        $this->setProperty('isPaidSickLeave', $isPaidSickLeave);
    }

    /**
     * @return bool
     */
    public function getIsUnpaidSickLeave()
    {
        return $this->getProperty('isUnpaidSickLeave');
    }

    /**
     * @param bool $isUnpaidSickLeave
     */
    public function setIsUnpaidSickLeave(bool $isUnpaidSickLeave = null)
    {
        $this->setProperty('isUnpaidSickLeave', $isUnpaidSickLeave);
    }

    /**
     * @return bool
     */
    public function getIsPaidHoliday()
    {
        return $this->getProperty('isPaidHoliday');
    }

    /**
     * @param bool $isPaidHoliday
     */
    public function setIsPaidHoliday(bool $isPaidHoliday = null)
    {
        $this->setProperty('isPaidHoliday', $isPaidHoliday);
    }

    /**
     * @return bool
     */
    public function getIsUnpaidHoliday()
    {
        return $this->getProperty('isUnpaidHoliday');
    }

    /**
     * @param bool $isUnpaidHoliday
     */
    public function setIsUnpaidHoliday(bool $isUnpaidHoliday = null)
    {
        $this->setProperty('isUnpaidHoliday', $isUnpaidHoliday);
    }

    /**
     * @return bool
     */
    public function getIsPaidMaternity()
    {
        return $this->getProperty('isPaidMaternity');
    }

    /**
     * @param bool $isPaidMaternity
     */
    public function setIsPaidMaternity(bool $isPaidMaternity = null)
    {
        $this->setProperty('isPaidMaternity', $isPaidMaternity);
    }

    /**
     * @return bool
     */
    public function getIsUnpaidMaternity()
    {
        return $this->getProperty('isUnpaidMaternity');
    }

    /**
     * @param bool $isUnpaidMaternity
     */
    public function setIsUnpaidMaternity(bool $isUnpaidMaternity = null)
    {
        $this->setProperty('isUnpaidMaternity', $isUnpaidMaternity);
    }

    /**
     * @return bool
     */
    public function getIsPaidPaternity()
    {
        return $this->getProperty('isPaidPaternity');
    }

    /**
     * @param bool $isPaidPaternity
     */
    public function setIsPaidPaternity(bool $isPaidPaternity = null)
    {
        $this->setProperty('isPaidPaternity', $isPaidPaternity);
    }

    /**
     * @return bool
     */
    public function getIsUnpaidPaternity()
    {
        return $this->getProperty('isUnpaidPaternity');
    }

    /**
     * @param bool $isUnpaidPaternity
     */
    public function setIsUnpaidPaternity(bool $isUnpaidPaternity = null)
    {
        $this->setProperty('isUnpaidPaternity', $isUnpaidPaternity);
    }

    /**
     * @return bool
     */
    public function getIsAuthorizedAbsence()
    {
        return $this->getProperty('isAuthorizedAbsence');
    }

    /**
     * @param bool $isAuthorizedAbsence
     */
    public function setIsAuthorizedAbsence(bool $isAuthorizedAbsence = null)
    {
        $this->setProperty('isAuthorizedAbsence', $isAuthorizedAbsence);
    }

    /**
     * @return string
     */
    public function getExportCode()
    {
        return $this->getProperty('exportCode');
    }

    /**
     * @param string $exportCode
     */
    public function setExportCode(string $exportCode = null)
    {
        $this->setProperty('exportCode', $exportCode);
    }
}
