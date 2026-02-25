<?php

namespace Arbor\Model\Cymru;

use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\Cymru\ResourceType;

class SupplyStaffRecord extends ModelBase
{
    public const RECORD_DATE = 'recordDate';

    public const CATEGORY = 'category';

    public const PLANNED = 'planned';

    public const TYPE = 'type';

    public const DAYS_DURATION = 'daysDuration';

    public const COST = 'cost';

    protected $_resourceType = ResourceType::CYMRU_SUPPLY_STAFF_RECORD;

    /**
     * @param Query $query
     * @return SupplyStaffRecord[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SUPPLY_STAFF_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SupplyStaffRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SUPPLY_STAFF_RECORD, $id);
    }

    /**
     * @return \DateTime
     */
    public function getRecordDate()
    {
        return $this->getProperty('recordDate');
    }

    /**
     * @param \DateTime $recordDate
     */
    public function setRecordDate(\DateTime $recordDate = null)
    {
        $this->setProperty('recordDate', $recordDate);
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->getProperty('category');
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category = null)
    {
        $this->setProperty('category', $category);
    }

    /**
     * @return string
     */
    public function getPlanned()
    {
        return $this->getProperty('planned');
    }

    /**
     * @param string $planned
     */
    public function setPlanned(string $planned = null)
    {
        $this->setProperty('planned', $planned);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return float
     */
    public function getDaysDuration()
    {
        return $this->getProperty('daysDuration');
    }

    /**
     * @param float $daysDuration
     */
    public function setDaysDuration(float $daysDuration = null)
    {
        $this->setProperty('daysDuration', $daysDuration);
    }

    /**
     * @return string
     */
    public function getCost()
    {
        return $this->getProperty('cost');
    }

    /**
     * @param string $cost
     */
    public function setCost(string $cost = null)
    {
        $this->setProperty('cost', $cost);
    }
}
