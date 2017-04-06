<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Ethnicity extends ModelBase
{

    const DFES_MAIN_CODE = 'dfesMainCode';

    const D00005 = 'd00005';

    const ONS_CODE = 'onsCode';

    const D00250 = 'd00250';

    protected $_resourceType = ResourceType::UK_DFE_ETHNICITY;

    /**
     * @param \Arbor\Query\Query $query
     * @return Ethnicity[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_Ethnicity");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Ethnicity
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_ETHNICITY, $id);
    }

    /**
     * @return string
     */
    public function getDfesMainCode()
    {
        return $this->getProperty("dfesMainCode");
    }

    /**
     * @param string $dfesMainCode
     */
    public function setDfesMainCode($dfesMainCode = null)
    {
        $this->setProperty("dfesMainCode", $dfesMainCode);
    }

    /**
     * @return string
     */
    public function getD00005()
    {
        return $this->getProperty("d00005");
    }

    /**
     * @param string $d00005
     */
    public function setD00005($d00005 = null)
    {
        $this->setProperty("d00005", $d00005);
    }

    /**
     * @return string
     */
    public function getOnsCode()
    {
        return $this->getProperty("onsCode");
    }

    /**
     * @param string $onsCode
     */
    public function setOnsCode($onsCode = null)
    {
        $this->setProperty("onsCode", $onsCode);
    }

    /**
     * @return string
     */
    public function getD00250()
    {
        return $this->getProperty("d00250");
    }

    /**
     * @param string $d00250
     */
    public function setD00250($d00250 = null)
    {
        $this->setProperty("d00250", $d00250);
    }


}
