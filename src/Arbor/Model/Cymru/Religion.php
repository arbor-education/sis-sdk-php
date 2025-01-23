<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Religion extends ModelBase
{
    public const FAITH_CODE = 'faithCode';

    protected $_resourceType = ResourceType::CYMRU_RELIGION;

    /**
     * @param Query $query
     * @return Religion[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_RELIGION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Religion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_RELIGION, $id);
    }

    /**
     * @return string
     */
    public function getFaithCode()
    {
        return $this->getProperty('faithCode');
    }

    /**
     * @param string $faithCode
     */
    public function setFaithCode(string $faithCode = null)
    {
        $this->setProperty('faithCode', $faithCode);
    }
}
