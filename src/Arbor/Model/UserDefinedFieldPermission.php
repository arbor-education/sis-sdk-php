<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UserDefinedFieldPermission extends ModelBase
{
    public const USER_DEFINED_FIELD = 'userDefinedField';

    public const IDENTIFIER = 'identifier';

    public const CODE = 'code';

    public const ACTIVE = 'active';

    protected $_resourceType = ResourceType::USER_DEFINED_FIELD_PERMISSION;

    /**
     * @param Query $query
     * @return UserDefinedFieldPermission[] | Collection
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

        $query->setResourceType(ResourceType::USER_DEFINED_FIELD_PERMISSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserDefinedFieldPermission
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_DEFINED_FIELD_PERMISSION, $id);
    }

    /**
     * @return \Arbor\Model\UserDefinedField
     */
    public function getUserDefinedField()
    {
        return $this->getProperty('userDefinedField');
    }

    /**
     * @param \Arbor\Model\UserDefinedField $userDefinedField
     */
    public function setUserDefinedField(\Arbor\Model\UserDefinedField $userDefinedField = null)
    {
        $this->setProperty('userDefinedField', $userDefinedField);
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
