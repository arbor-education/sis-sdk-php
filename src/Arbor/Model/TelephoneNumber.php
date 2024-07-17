<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TelephoneNumber extends ModelBase
{
    public const NUMBER_OWNER = 'numberOwner';

    public const TELEPHONE_NUMBER_TYPE = 'telephoneNumberType';

    public const NUMBER = 'number';

    public const EXTENSION_NUMBER = 'extensionNumber';

    public const NOTES = 'notes';

    public const TELEPHONE_NUMBER_RANKING = 'telephoneNumberRanking';

    protected $_resourceType = ResourceType::TELEPHONE_NUMBER;

    /**
     * @param Query $query
     * @return TelephoneNumber[] | Collection
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

        $query->setResourceType(ResourceType::TELEPHONE_NUMBER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TelephoneNumber
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TELEPHONE_NUMBER, $id);
    }

    /**
     * @return ModelBase
     */
    public function getNumberOwner()
    {
        return $this->getProperty('numberOwner');
    }

    /**
     * @param ModelBase $numberOwner
     */
    public function setNumberOwner(\ModelBase $numberOwner = null)
    {
        $this->setProperty('numberOwner', $numberOwner);
    }

    /**
     * @return string
     */
    public function getTelephoneNumberType()
    {
        return $this->getProperty('telephoneNumberType');
    }

    /**
     * @param string $telephoneNumberType
     */
    public function setTelephoneNumberType(string $telephoneNumberType = null)
    {
        $this->setProperty('telephoneNumberType', $telephoneNumberType);
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->getProperty('number');
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number = null)
    {
        $this->setProperty('number', $number);
    }

    /**
     * @return string
     */
    public function getExtensionNumber()
    {
        return $this->getProperty('extensionNumber');
    }

    /**
     * @param string $extensionNumber
     */
    public function setExtensionNumber(string $extensionNumber = null)
    {
        $this->setProperty('extensionNumber', $extensionNumber);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty('notes');
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes = null)
    {
        $this->setProperty('notes', $notes);
    }

    /**
     * @return int
     */
    public function getTelephoneNumberRanking()
    {
        return $this->getProperty('telephoneNumberRanking');
    }

    /**
     * @param int $telephoneNumberRanking
     */
    public function setTelephoneNumberRanking(int $telephoneNumberRanking = null)
    {
        $this->setProperty('telephoneNumberRanking', $telephoneNumberRanking);
    }
}
