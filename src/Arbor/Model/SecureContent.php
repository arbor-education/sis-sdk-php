<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SecureContent extends ModelBase
{
    public const NAME = 'name';

    public const SECURE_VALUE = 'secureValue';

    protected $_resourceType = ResourceType::SECURE_CONTENT;

    /**
     * @param Query $query
     * @return SecureContent[] | Collection
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

        $query->setResourceType(ResourceType::SECURE_CONTENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SecureContent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SECURE_CONTENT, $id);
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
     * @return string
     */
    public function getSecureValue()
    {
        return $this->getProperty('secureValue');
    }

    /**
     * @param string $secureValue
     */
    public function setSecureValue(string $secureValue = null)
    {
        $this->setProperty('secureValue', $secureValue);
    }
}
