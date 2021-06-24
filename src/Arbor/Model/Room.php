<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Room extends ModelBase
{
    const SITE = 'site';

    const ROOM_NAME = 'roomName';

    const SHORT_NAME = 'shortName';

    const STUDENT_CAPACITY = 'studentCapacity';

    const IS_INVIGILATION_ROOM = 'isInvigilationRoom';

    const INVIGILATION_CAPACITY = 'invigilationCapacity';

    protected $_resourceType = ResourceType::ROOM;

    /**
     * @param Query $query
     * @return Room[] | Collection
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

        $query->setResourceType(ResourceType::ROOM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Room
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ROOM, $id);
    }

    /**
     * @return Site
     */
    public function getSite()
    {
        return $this->getProperty('site');
    }

    /**
     * @param Site $site
     */
    public function setSite(Site $site = null)
    {
        $this->setProperty('site', $site);
    }

    /**
     * @return string
     */
    public function getRoomName()
    {
        return $this->getProperty('roomName');
    }

    /**
     * @param string $roomName
     */
    public function setRoomName($roomName = null)
    {
        $this->setProperty('roomName', $roomName);
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
     * @return int
     */
    public function getStudentCapacity()
    {
        return $this->getProperty('studentCapacity');
    }

    /**
     * @param int $studentCapacity
     */
    public function setStudentCapacity($studentCapacity = null)
    {
        $this->setProperty('studentCapacity', $studentCapacity);
    }

    /**
     * @return bool
     */
    public function getIsInvigilationRoom()
    {
        return $this->getProperty('isInvigilationRoom');
    }

    /**
     * @param bool $isInvigilationRoom
     */
    public function setIsInvigilationRoom($isInvigilationRoom = null)
    {
        $this->setProperty('isInvigilationRoom', $isInvigilationRoom);
    }

    /**
     * @return int
     */
    public function getInvigilationCapacity()
    {
        return $this->getProperty('invigilationCapacity');
    }

    /**
     * @param int $invigilationCapacity
     */
    public function setInvigilationCapacity($invigilationCapacity = null)
    {
        $this->setProperty('invigilationCapacity', $invigilationCapacity);
    }
}
