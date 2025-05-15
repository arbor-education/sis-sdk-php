<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SenNeedType extends ModelBase
{
    public const LLDD_CODE = 'llddCode';

    public const ILR_RETURN_VALUE = 'ilrReturnValue';

    protected $_resourceType = ResourceType::UK_ILR_SEN_NEED_TYPE;

    /**
     * @param Query $query
     * @return SenNeedType[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_SEN_NEED_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenNeedType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_SEN_NEED_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getLlddCode()
    {
        return $this->getProperty('llddCode');
    }

    /**
     * @param string $llddCode
     */
    public function setLlddCode(string $llddCode = null)
    {
        $this->setProperty('llddCode', $llddCode);
    }

    /**
     * @return string
     */
    public function getIlrReturnValue()
    {
        return $this->getProperty('ilrReturnValue');
    }

    /**
     * @param string $ilrReturnValue
     */
    public function setIlrReturnValue(string $ilrReturnValue = null)
    {
        $this->setProperty('ilrReturnValue', $ilrReturnValue);
    }
}
