<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SenStatus extends ModelBase
{

    const D00229 = 'd00229';

    protected $_resourceType = ResourceType::UK_DFE_SEN_STATUS;

    /**
     * @param Query $query
     * @return SenStatus[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SEN_STATUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SEN_STATUS, $id);
    }

    /**
     * @return string
     */
    public function getD00229()
    {
        return $this->getProperty('d00229');
    }

    /**
     * @param string $d00229
     */
    public function setD00229($d00229 = null)
    {
        $this->setProperty('d00229', $d00229);
    }


}
