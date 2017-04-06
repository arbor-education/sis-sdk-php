<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Subject extends ModelBase
{

    const USED_IN_SWF_ONLY = 'usedInSwfOnly';

    const USED_IN_CBDS_ONLY = 'usedInCbdsOnly';

    const D00115 = 'd00115';

    const D00220 = 'd00220';

    protected $_resourceType = ResourceType::UK_DFE_SUBJECT;

    /**
     * @param \Arbor\Query\Query $query
     * @return Subject[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_Subject");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Subject
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_SUBJECT, $id);
    }

    /**
     * @return bool
     */
    public function getUsedInSwfOnly()
    {
        return $this->getProperty("usedInSwfOnly");
    }

    /**
     * @param bool $usedInSwfOnly
     */
    public function setUsedInSwfOnly($usedInSwfOnly = null)
    {
        $this->setProperty("usedInSwfOnly", $usedInSwfOnly);
    }

    /**
     * @return bool
     */
    public function getUsedInCbdsOnly()
    {
        return $this->getProperty("usedInCbdsOnly");
    }

    /**
     * @param bool $usedInCbdsOnly
     */
    public function setUsedInCbdsOnly($usedInCbdsOnly = null)
    {
        $this->setProperty("usedInCbdsOnly", $usedInCbdsOnly);
    }

    /**
     * @return string
     */
    public function getD00115()
    {
        return $this->getProperty("d00115");
    }

    /**
     * @param string $d00115
     */
    public function setD00115($d00115 = null)
    {
        $this->setProperty("d00115", $d00115);
    }

    /**
     * @return string
     */
    public function getD00220()
    {
        return $this->getProperty("d00220");
    }

    /**
     * @param string $d00220
     */
    public function setD00220($d00220 = null)
    {
        $this->setProperty("d00220", $d00220);
    }


}
