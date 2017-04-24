<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Religion extends ModelBase
{
    const D00009 = 'd00009';

    const D00195 = 'd00195';

    protected $_resourceType = ResourceType::UK_DFE_RELIGION;

    /**
     * @param \Arbor\Query\Query $query
     * @return Religion[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_Religion");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Religion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_RELIGION, $id);
    }

    /**
     * @return string
     */
    public function getD00009()
    {
        return $this->getProperty("d00009");
    }

    /**
     * @param string $d00009
     */
    public function setD00009($d00009 = null)
    {
        $this->setProperty("d00009", $d00009);
    }

    /**
     * @return string
     */
    public function getD00195()
    {
        return $this->getProperty("d00195");
    }

    /**
     * @param string $d00195
     */
    public function setD00195($d00195 = null)
    {
        $this->setProperty("d00195", $d00195);
    }
}
