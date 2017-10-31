<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StaffAbsenceSicknessSubcategory extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const STAFF_ABSENCE_SICKNESS_CATEGORY = 'staffAbsenceSicknessCategory';

    const NAME = 'name';

    protected $_resourceType = ResourceType::STAFF_ABSENCE_SICKNESS_SUBCATEGORY;

    /**
     * @param Query $query
     * @return StaffAbsenceSicknessSubcategory[] | Collection
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return StaffAbsenceSicknessCategory
     */
    public function getStaffAbsenceSicknessCategory()
    {
        return $this->getProperty('staffAbsenceSicknessCategory');
    }

    /**
     * @param StaffAbsenceSicknessCategory $staffAbsenceSicknessCategory
     */
    public function setStaffAbsenceSicknessCategory(StaffAbsenceSicknessCategory $staffAbsenceSicknessCategory = null)
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
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }
}
