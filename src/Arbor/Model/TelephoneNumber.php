<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TelephoneNumber extends ModelBase
{

    const NUMBER_OWNER = 'numberOwner';

    const TELEPHONE_NUMBER_TYPE = 'telephoneNumberType';

    const NUMBER = 'number';

    const EXTENSION_NUMBER = 'extensionNumber';

    const NOTES = 'notes';

    const TELEPHONE_NUMBER_RANKING = 'telephoneNumberRanking';

    protected $_resourceType = ResourceType::TELEPHONE_NUMBER;

    /**
     * @param Query $query
     * @return TelephoneNumber[] | Collection
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
    public function setNumberOwner(ModelBase $numberOwner = null)
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
    public function setTelephoneNumberType($telephoneNumberType = null)
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
    public function setNumber($number = null)
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
    public function setExtensionNumber($extensionNumber = null)
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
    public function setNotes($notes = null)
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
    public function setTelephoneNumberRanking($telephoneNumberRanking = null)
    {
        $this->setProperty('telephoneNumberRanking', $telephoneNumberRanking);
    }


}
