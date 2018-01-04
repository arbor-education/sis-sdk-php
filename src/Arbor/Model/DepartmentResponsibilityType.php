<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DepartmentResponsibilityType extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const RESPONSIBILITY_TYPE_NAME = 'responsibilityTypeName';

    protected $_resourceType = ResourceType::DEPARTMENT_RESPONSIBILITY_TYPE;

    /**
     * @param Query $query
     * @return DepartmentResponsibilityType[] | Collection
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
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
    public function setResponsibilityTypeName($responsibilityTypeName = null)
    {
        $this->setProperty('responsibilityTypeName', $responsibilityTypeName);
    }
}
