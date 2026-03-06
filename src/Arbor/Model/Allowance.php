<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Allowance extends ModelBase
{
    public const ALLOWANCE_NAME = 'allowanceName';

    public const ALLOWANCE_CODE = 'allowanceCode';

    protected $_resourceType = ResourceType::ALLOWANCE;

    /**
     * @param Query $query
     * @return Allowance[] | Collection
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

        $query->setResourceType(ResourceType::ALLOWANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Allowance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ALLOWANCE, $id);
    }

    /**
     * @return string
     */
    public function getAllowanceName()
    {
        return $this->getProperty('allowanceName');
    }

    /**
     * @param string $allowanceName
     */
    public function setAllowanceName(string $allowanceName = null)
    {
        $this->setProperty('allowanceName', $allowanceName);
    }

    /**
     * @return string
     */
    public function getAllowanceCode()
    {
        return $this->getProperty('allowanceCode');
    }

    /**
     * @param string $allowanceCode
     */
    public function setAllowanceCode(string $allowanceCode = null)
    {
        $this->setProperty('allowanceCode', $allowanceCode);
    }
}
