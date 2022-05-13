<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IdentityCardReader extends ModelBase
{
    const READER_NUMBER = 'readerNumber';

    const ROOM = 'room';

    protected $_resourceType = ResourceType::IDENTITY_CARD_READER;

    /**
     * @param Query $query
     * @return IdentityCardReader[] | Collection
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

        $query->setResourceType(ResourceType::IDENTITY_CARD_READER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IdentityCardReader
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IDENTITY_CARD_READER, $id);
    }

    /**
     * @return string
     */
    public function getReaderNumber()
    {
        return $this->getProperty('readerNumber');
    }

    /**
     * @param string $readerNumber
     */
    public function setReaderNumber($readerNumber = null)
    {
        $this->setProperty('readerNumber', $readerNumber);
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
        return $this->getProperty('room');
    }

    /**
     * @param Room $room
     */
    public function setRoom(Room $room = null)
    {
        $this->setProperty('room', $room);
    }

}
