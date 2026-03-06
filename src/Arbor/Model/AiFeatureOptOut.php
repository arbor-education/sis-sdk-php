<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AiFeatureOptOut extends ModelBase
{
    public const FEATURE_CODE = 'featureCode';

    public const TARGET = 'target';

    public const IS_EXCEPTION = 'isException';

    protected $_resourceType = ResourceType::AI_FEATURE_OPT_OUT;

    /**
     * @param Query $query
     * @return AiFeatureOptOut[] | Collection
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

        $query->setResourceType(ResourceType::AI_FEATURE_OPT_OUT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AiFeatureOptOut
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AI_FEATURE_OPT_OUT, $id);
    }

    /**
     * @return string
     */
    public function getFeatureCode()
    {
        return $this->getProperty('featureCode');
    }

    /**
     * @param string $featureCode
     */
    public function setFeatureCode(string $featureCode = null)
    {
        $this->setProperty('featureCode', $featureCode);
    }

    /**
     * @return ModelBase
     */
    public function getTarget()
    {
        return $this->getProperty('target');
    }

    /**
     * @param ModelBase $target
     */
    public function setTarget(\ModelBase $target = null)
    {
        $this->setProperty('target', $target);
    }

    /**
     * @return bool
     */
    public function getIsException()
    {
        return $this->getProperty('isException');
    }

    /**
     * @param bool $isException
     */
    public function setIsException(bool $isException = null)
    {
        $this->setProperty('isException', $isException);
    }
}
