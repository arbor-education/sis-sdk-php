<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class UserDefinedField extends ModelBase
{

    const FIELD_NAME = 'fieldName';

    const IDENTIFIER = 'identifier';

    const RELATED_ENTITY_TYPE = 'relatedEntityType';

    const FIELD_TYPE = 'fieldType';

    protected $_resourceType = ResourceType::USER_DEFINED_FIELD;

    /**
     * @param \Arbor\Query\Query $query
     * @return UserDefinedField[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UserDefinedField");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return UserDefinedField
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::USER_DEFINED_FIELD, $id);
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->getProperty("fieldName");
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName($fieldName = null)
    {
        $this->setProperty("fieldName", $fieldName);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty("identifier");
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier($identifier = null)
    {
        $this->setProperty("identifier", $identifier);
    }

    /**
     * @return string
     */
    public function getRelatedEntityType()
    {
        return $this->getProperty("relatedEntityType");
    }

    /**
     * @param string $relatedEntityType
     */
    public function setRelatedEntityType($relatedEntityType = null)
    {
        $this->setProperty("relatedEntityType", $relatedEntityType);
    }

    /**
     * @return string
     */
    public function getFieldType()
    {
        return $this->getProperty("fieldType");
    }

    /**
     * @param string $fieldType
     */
    public function setFieldType($fieldType = null)
    {
        $this->setProperty("fieldType", $fieldType);
    }


}
