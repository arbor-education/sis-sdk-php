<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class CalendarType extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const CALENDAR_TYPE_NAME = 'calendarTypeName';

    const CALENDAR_TYPE_COLOR = 'calendarTypeColor';

    protected $_resourceType = ResourceType::CALENDAR_TYPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return CalendarType[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CalendarType");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CalendarType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CALENDAR_TYPE, $id);
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
    public function getCalendarTypeName()
    {
        return $this->getProperty("calendarTypeName");
    }

    /**
     * @param string $calendarTypeName
     */
    public function setCalendarTypeName($calendarTypeName = null)
    {
        $this->setProperty("calendarTypeName", $calendarTypeName);
    }

    /**
     * @return string
     */
    public function getCalendarTypeColor()
    {
        return $this->getProperty("calendarTypeColor");
    }

    /**
     * @param string $calendarTypeColor
     */
    public function setCalendarTypeColor($calendarTypeColor = null)
    {
        $this->setProperty("calendarTypeColor", $calendarTypeColor);
    }


}
