<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationTimetableSessionType extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const START_TIME_FROM = 'startTimeFrom';

    const START_TIME_UNTIL = 'startTimeUntil';

    protected $_resourceType = ResourceType::QUALIFICATION_TIMETABLE_SESSION_TYPE;

    /**
     * @param Query $query
     * @return QualificationTimetableSessionType[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_TIMETABLE_SESSION_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationTimetableSessionType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_TIMETABLE_SESSION_TYPE, $id);
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

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return string
     */
    public function getStartTimeFrom()
    {
        return $this->getProperty('startTimeFrom');
    }

    /**
     * @param string $startTimeFrom
     */
    public function setStartTimeFrom($startTimeFrom = null)
    {
        $this->setProperty('startTimeFrom', $startTimeFrom);
    }

    /**
     * @return string
     */
    public function getStartTimeUntil()
    {
        return $this->getProperty('startTimeUntil');
    }

    /**
     * @param string $startTimeUntil
     */
    public function setStartTimeUntil($startTimeUntil = null)
    {
        $this->setProperty('startTimeUntil', $startTimeUntil);
    }


}
