<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class UserDefinedField extends ModelBase
{

    const FIELD_NAME = 'fieldName';

    const IDENTIFIER = 'identifier';

    const RELATED_ENTITY_TYPE = 'relatedEntityType';

    const FIELD_TYPE = 'fieldType';

    const SOURCE = 'source';

    const CODE = 'code';

    const ACTIVE = 'active';

    protected $_resourceType = ResourceType::USER_DEFINED_FIELD;

    /**
     * @param Query $query
     * @return UserDefinedField[] | Collection
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

        $query->setResourceType(ResourceType::USER_DEFINED_FIELD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserDefinedField
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_DEFINED_FIELD, $id);
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->getProperty('fieldName');
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName($fieldName = null)
    {
        $this->setProperty('fieldName', $fieldName);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty('identifier');
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier($identifier = null)
    {
        $this->setProperty('identifier', $identifier);
    }

    /**
     * @return string
     */
    public function getRelatedEntityType()
    {
        return $this->getProperty('relatedEntityType');
    }

    /**
     * @param string $relatedEntityType
     */
    public function setRelatedEntityType($relatedEntityType = null)
    {
        $this->setProperty('relatedEntityType', $relatedEntityType);
    }

    /**
     * @return string
     */
    public function getFieldType()
    {
        return $this->getProperty('fieldType');
    }

    /**
     * @param string $fieldType
     */
    public function setFieldType($fieldType = null)
    {
        $this->setProperty('fieldType', $fieldType);
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->getProperty('source');
    }

    /**
     * @param string $source
     */
    public function setSource($source = null)
    {
        $this->setProperty('source', $source);
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


}
