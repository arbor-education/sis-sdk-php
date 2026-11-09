<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdmissionGroup extends ModelBase
{
    public const NAME = 'name';

    public const IS_ACTIVE = 'isActive';

    protected $_resourceType = ResourceType::ADMISSION_GROUP;

    /**
     * @param Query $query
     * @return AdmissionGroup[] | Collection
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

        $query->setResourceType(ResourceType::ADMISSION_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdmissionGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ADMISSION_GROUP, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->getProperty('isActive');
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive = null)
    {
        $this->setProperty('isActive', $isActive);
    }
}
