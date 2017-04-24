<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class EducationalInstitution extends ModelBase
{
    const TYPE = 'type';

    protected $_resourceType = ResourceType::GROUP_EDUCATIONAL_INSTITUTION;

    /**
     * @param \Arbor\Query\Query $query
     * @return EducationalInstitution[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Group_EducationalInstitution");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EducationalInstitution
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GROUP_EDUCATIONAL_INSTITUTION, $id);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty("type");
    }

    /**
     * @param string $type
     */
    public function setType($type = null)
    {
        $this->setProperty("type", $type);
    }
}
