<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Cheque extends ModelBase
{
    public const CHEQUE_BOOK = 'chequeBook';

    public const CHEQUE_NUMBER = 'chequeNumber';

    protected $_resourceType = ResourceType::CHEQUE;

    /**
     * @param Query $query
     * @return Cheque[] | Collection
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

        $query->setResourceType(ResourceType::CHEQUE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Cheque
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CHEQUE, $id);
    }

    /**
     * @return \Arbor\Model\ChequeBook
     */
    public function getChequeBook()
    {
        return $this->getProperty('chequeBook');
    }

    /**
     * @param \Arbor\Model\ChequeBook $chequeBook
     */
    public function setChequeBook(\Arbor\Model\ChequeBook $chequeBook = null)
    {
        $this->setProperty('chequeBook', $chequeBook);
    }

    /**
     * @return string
     */
    public function getChequeNumber()
    {
        return $this->getProperty('chequeNumber');
    }

    /**
     * @param string $chequeNumber
     */
    public function setChequeNumber(string $chequeNumber = null)
    {
        $this->setProperty('chequeNumber', $chequeNumber);
    }
}
