<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

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
     * @param \Arbor\Query\Query $query
     * @return TelephoneNumber[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("TelephoneNumber");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TelephoneNumber
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::TELEPHONE_NUMBER, $id);
    }

    /**
     * @return ModelBase
     */
    public function getNumberOwner()
    {
        return $this->getProperty("numberOwner");
    }

    /**
     * @param ModelBase $numberOwner
     */
    public function setNumberOwner(ModelBase $numberOwner = null)
    {
        $this->setProperty("numberOwner", $numberOwner);
    }

    /**
     * @return string
     */
    public function getTelephoneNumberType()
    {
        return $this->getProperty("telephoneNumberType");
    }

    /**
     * @param string $telephoneNumberType
     */
    public function setTelephoneNumberType($telephoneNumberType = null)
    {
        $this->setProperty("telephoneNumberType", $telephoneNumberType);
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->getProperty("number");
    }

    /**
     * @param string $number
     */
    public function setNumber($number = null)
    {
        $this->setProperty("number", $number);
    }

    /**
     * @return string
     */
    public function getExtensionNumber()
    {
        return $this->getProperty("extensionNumber");
    }

    /**
     * @param string $extensionNumber
     */
    public function setExtensionNumber($extensionNumber = null)
    {
        $this->setProperty("extensionNumber", $extensionNumber);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty("notes");
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes = null)
    {
        $this->setProperty("notes", $notes);
    }

    /**
     * @return int
     */
    public function getTelephoneNumberRanking()
    {
        return $this->getProperty("telephoneNumberRanking");
    }

    /**
     * @param int $telephoneNumberRanking
     */
    public function setTelephoneNumberRanking($telephoneNumberRanking = null)
    {
        $this->setProperty("telephoneNumberRanking", $telephoneNumberRanking);
    }


}
