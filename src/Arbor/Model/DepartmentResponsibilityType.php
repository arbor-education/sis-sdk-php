<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DepartmentResponsibilityType extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const RESPONSIBILITY_TYPE_NAME = 'responsibilityTypeName';

    protected $_resourceType = ResourceType::DEPARTMENT_RESPONSIBILITY_TYPE;

    /**
     * @param Query $query
     * @return DepartmentResponsibilityType[] | Collection
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

        $query->setResourceType(ResourceType::DEPARTMENT_RESPONSIBILITY_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DepartmentResponsibilityType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DEPARTMENT_RESPONSIBILITY_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getResponsibilityTypeName()
    {
        return $this->getProperty('responsibilityTypeName');
    }

    /**
     * @param string $responsibilityTypeName
     */
    public function setResponsibilityTypeName(string $responsibilityTypeName = null)
    {
        $this->setProperty('responsibilityTypeName', $responsibilityTypeName);
    }
}
