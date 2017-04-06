<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\ChequeBook;

class Cheque extends ModelBase
{

    const CHEQUE_BOOK = 'chequeBook';

    const CHEQUE_NUMBER = 'chequeNumber';

    protected $_resourceType = ResourceType::CHEQUE;

    /**
     * @param \Arbor\Query\Query $query
     * @return Cheque[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Cheque");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Cheque
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CHEQUE, $id);
    }

    /**
     * @return ChequeBook
     */
    public function getChequeBook()
    {
        return $this->getProperty("chequeBook");
    }

    /**
     * @param ChequeBook $chequeBook
     */
    public function setChequeBook(ChequeBook $chequeBook = null)
    {
        $this->setProperty("chequeBook", $chequeBook);
    }

    /**
     * @return string
     */
    public function getChequeNumber()
    {
        return $this->getProperty("chequeNumber");
    }

    /**
     * @param string $chequeNumber
     */
    public function setChequeNumber($chequeNumber = null)
    {
        $this->setProperty("chequeNumber", $chequeNumber);
    }


}
