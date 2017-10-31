<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DepartmentResponsibilityType extends ModelBase
{

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
