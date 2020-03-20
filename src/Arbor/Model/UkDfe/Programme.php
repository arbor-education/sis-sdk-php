<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Programme extends ModelBase
{

    const IS_TRAINEESHIP = 'isTraineeship';

    protected $_resourceType = ResourceType::UK_DFE_PROGRAMME;

    /**
     * @param Query $query
     * @return Programme[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_PROGRAMME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Programme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_PROGRAMME, $id);
    }

    /**
     * @return bool
     */
    public function getIsTraineeship()
    {
        return $this->getProperty('isTraineeship');
    }

    /**
     * @param bool $isTraineeship
     */
    public function setIsTraineeship($isTraineeship = null)
    {
        $this->setProperty('isTraineeship', $isTraineeship);
    }


}
