<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IdentityCardReader extends ModelBase
{
    public const READER_NUMBER = 'readerNumber';

    public const ROOM = 'room';

    protected $_resourceType = ResourceType::IDENTITY_CARD_READER;

    /**
     * @param Query $query
     * @return IdentityCardReader[] | Collection
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
    public function setReaderNumber(string $readerNumber = null)
    {
        $this->setProperty('readerNumber', $readerNumber);
    }

    /**
     * @return \Arbor\Model\Room
     */
    public function getRoom()
    {
        return $this->getProperty('room');
    }

    /**
     * @param \Arbor\Model\Room $room
     */
    public function setRoom(\Arbor\Model\Room $room = null)
    {
        $this->setProperty('room', $room);
    }
}
