<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffAbsenceSicknessSubcategory extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const STAFF_ABSENCE_SICKNESS_CATEGORY = 'staffAbsenceSicknessCategory';

    public const NAME = 'name';

    protected $_resourceType = ResourceType::STAFF_ABSENCE_SICKNESS_SUBCATEGORY;

    /**
     * @param Query $query
     * @return StaffAbsenceSicknessSubcategory[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_ABSENCE_SICKNESS_SUBCATEGORY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffAbsenceSicknessSubcategory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_ABSENCE_SICKNESS_SUBCATEGORY, $id);
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
     * @return \Arbor\Model\StaffAbsenceSicknessCategory
     */
    public function getStaffAbsenceSicknessCategory()
    {
        return $this->getProperty('staffAbsenceSicknessCategory');
    }

    /**
     * @param \Arbor\Model\StaffAbsenceSicknessCategory $staffAbsenceSicknessCategory
     */
    public function setStaffAbsenceSicknessCategory(\Arbor\Model\StaffAbsenceSicknessCategory $staffAbsenceSicknessCategory = null)
    {
        $this->setProperty('staffAbsenceSicknessCategory', $staffAbsenceSicknessCategory);
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
}
