<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationTimetableSessionType extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const NAME = 'name';

    public const SHORT_NAME = 'shortName';

    public const START_TIME_FROM = 'startTimeFrom';

    public const USER_DEFINED_START_TIME_FROM = 'userDefinedStartTimeFrom';

    public const START_TIME_UNTIL = 'startTimeUntil';

    protected $_resourceType = ResourceType::QUALIFICATION_TIMETABLE_SESSION_TYPE;

    /**
     * @param Query $query
     * @return QualificationTimetableSessionType[] | Collection
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
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName = null)
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
    public function setStartTimeFrom(string $startTimeFrom = null)
    {
        $this->setProperty('startTimeFrom', $startTimeFrom);
    }

    /**
     * @return string
     */
    public function getUserDefinedStartTimeFrom()
    {
        return $this->getProperty('userDefinedStartTimeFrom');
    }

    /**
     * @param string $userDefinedStartTimeFrom
     */
    public function setUserDefinedStartTimeFrom(string $userDefinedStartTimeFrom = null)
    {
        $this->setProperty('userDefinedStartTimeFrom', $userDefinedStartTimeFrom);
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
    public function setStartTimeUntil(string $startTimeUntil = null)
    {
        $this->setProperty('startTimeUntil', $startTimeUntil);
    }
}
