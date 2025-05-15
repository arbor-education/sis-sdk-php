<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UserDefinedField extends ModelBase
{
    public const FIELD_NAME = 'fieldName';

    public const IDENTIFIER = 'identifier';

    public const RELATED_ENTITY_TYPE = 'relatedEntityType';

    public const FIELD_TYPE = 'fieldType';

    public const SOURCE = 'source';

    public const CODE = 'code';

    public const ACTIVE = 'active';

    protected $_resourceType = ResourceType::USER_DEFINED_FIELD;

    /**
     * @param Query $query
     * @return UserDefinedField[] | Collection
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
    public function setFieldName(string $fieldName = null)
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
    public function setIdentifier(string $identifier = null)
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
    public function setRelatedEntityType(string $relatedEntityType = null)
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
    public function setFieldType(string $fieldType = null)
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
    public function setSource(string $source = null)
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
}
