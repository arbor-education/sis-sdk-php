<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ArborLabsFeature extends ModelBase
{
    public const CODE = 'code';

    public const IS_ENABLED = 'isEnabled';

    public const METADATA = 'metadata';

    protected $_resourceType = ResourceType::ARBOR_LABS_FEATURE;

    /**
     * @param Query $query
     * @return ArborLabsFeature[] | Collection
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

        $query->setResourceType(ResourceType::ARBOR_LABS_FEATURE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ArborLabsFeature
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ARBOR_LABS_FEATURE, $id);
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
    public function getIsEnabled()
    {
        return $this->getProperty('isEnabled');
    }

    /**
     * @param bool $isEnabled
     */
    public function setIsEnabled(bool $isEnabled = null)
    {
        $this->setProperty('isEnabled', $isEnabled);
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->getProperty('metadata');
    }

    /**
     * @param string $metadata
     */
    public function setMetadata(string $metadata = null)
    {
        $this->setProperty('metadata', $metadata);
    }
}
