<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdmissionCycleCategory extends ModelBase
{
    public const NAME = 'name';

    public const ADMISSION_CATEGORY = 'admissionCategory';

    public const ADMISSION_CYCLE = 'admissionCycle';

    public const DISPLAY_ORDER = 'displayOrder';

    protected $_resourceType = ResourceType::ADMISSION_CYCLE_CATEGORY;

    /**
     * @param Query $query
     * @return AdmissionCycleCategory[] | Collection
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

        $query->setResourceType(ResourceType::ADMISSION_CYCLE_CATEGORY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdmissionCycleCategory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ADMISSION_CYCLE_CATEGORY, $id);
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
     * @return \Arbor\Model\AdmissionCategory
     */
    public function getAdmissionCategory()
    {
        return $this->getProperty('admissionCategory');
    }

    /**
     * @param \Arbor\Model\AdmissionCategory $admissionCategory
     */
    public function setAdmissionCategory(\Arbor\Model\AdmissionCategory $admissionCategory = null)
    {
        $this->setProperty('admissionCategory', $admissionCategory);
    }

    /**
     * @return \Arbor\Model\AdmissionCycle
     */
    public function getAdmissionCycle()
    {
        return $this->getProperty('admissionCycle');
    }

    /**
     * @param \Arbor\Model\AdmissionCycle $admissionCycle
     */
    public function setAdmissionCycle(\Arbor\Model\AdmissionCycle $admissionCycle = null)
    {
        $this->setProperty('admissionCycle', $admissionCycle);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty('displayOrder');
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
    }
}
