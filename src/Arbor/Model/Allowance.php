<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Allowance extends ModelBase
{
    const ALLOWANCE_NAME = 'allowanceName';

    const ALLOWANCE_CODE = 'allowanceCode';

    protected $_resourceType = ResourceType::ALLOWANCE;

    /**
     * @param \Arbor\Query\Query $query
     * @return Allowance[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Allowance");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Allowance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ALLOWANCE, $id);
    }

    /**
     * @return string
     */
    public function getAllowanceName()
    {
        return $this->getProperty("allowanceName");
    }

    /**
     * @param string $allowanceName
     */
    public function setAllowanceName($allowanceName = null)
    {
        $this->setProperty("allowanceName", $allowanceName);
    }

    /**
     * @return string
     */
    public function getAllowanceCode()
    {
        return $this->getProperty("allowanceCode");
    }

    /**
     * @param string $allowanceCode
     */
    public function setAllowanceCode($allowanceCode = null)
    {
        $this->setProperty("allowanceCode", $allowanceCode);
    }
}
