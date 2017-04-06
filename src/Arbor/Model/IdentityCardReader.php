<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Room;

class IdentityCardReader extends ModelBase
{

    const READER_NUMBER = 'readerNumber';

    const ROOM = 'room';

    protected $_resourceType = ResourceType::IDENTITY_CARD_READER;

    /**
     * @param \Arbor\Query\Query $query
     * @return IdentityCardReader[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("IdentityCardReader");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return IdentityCardReader
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::IDENTITY_CARD_READER, $id);
    }

    /**
     * @return string
     */
    public function getReaderNumber()
    {
        return $this->getProperty("readerNumber");
    }

    /**
     * @param string $readerNumber
     */
    public function setReaderNumber($readerNumber = null)
    {
        $this->setProperty("readerNumber", $readerNumber);
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
        return $this->getProperty("room");
    }

    /**
     * @param Room $room
     */
    public function setRoom(Room $room = null)
    {
        $this->setProperty("room", $room);
    }


}
