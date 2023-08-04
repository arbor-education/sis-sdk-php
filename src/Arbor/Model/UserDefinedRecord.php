<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class UserDefinedRecord extends \ModelBase
{
    public const ENTITY = 'entity';

    public const USER_DEFINED_FIELD = 'userDefinedField';

    public const VALUE = 'value';

    protected $_resourceType = ResourceType::USER_DEFINED_RECORD;

    /**
     * @param Query $query
     * @return UserDefinedRecord[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::USER_DEFINED_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserDefinedRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_DEFINED_RECORD, $id);
    }

    /**
     * @return ModelBase
     */
    public function getEntity()
    {
        return $this->getProperty('entity');
    }

    /**
     * @param ModelBase $entity
     */
    public function setEntity(\ModelBase $entity = null)
    {
        $this->setProperty('entity', $entity);
    }

    /**
     * @return UserDefinedField
     */
    public function getUserDefinedField()
    {
        return $this->getProperty('userDefinedField');
    }

    /**
     * @param UserDefinedField $userDefinedField
     */
    public function setUserDefinedField(\UserDefinedField $userDefinedField = null)
    {
        $this->setProperty('userDefinedField', $userDefinedField);
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->getProperty('value');
    }

    /**
     * @param string $value
     */
    public function setValue(string $value = null)
    {
        $this->setProperty('value', $value);
    }
}
