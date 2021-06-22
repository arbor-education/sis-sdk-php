<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Ethnicity extends ModelBase
{

    const DFES_MAIN_CODE = 'dfesMainCode';

    const D00005 = 'd00005';

    const ONS_CODE = 'onsCode';

    const D00250 = 'd00250';

    protected $_resourceType = ResourceType::UK_DFE_ETHNICITY;

    /**
     * @param Query $query
     * @return Ethnicity[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_ETHNICITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Ethnicity
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_ETHNICITY, $id);
    }

    /**
     * @return string
     */
    public function getDfesMainCode()
    {
        return $this->getProperty('dfesMainCode');
    }

    /**
     * @param string $dfesMainCode
     */
    public function setDfesMainCode($dfesMainCode = null)
    {
        $this->setProperty('dfesMainCode', $dfesMainCode);
    }

    /**
     * @return string
     */
    public function getD00005()
    {
        return $this->getProperty('d00005');
    }

    /**
     * @param string $d00005
     */
    public function setD00005($d00005 = null)
    {
        $this->setProperty('d00005', $d00005);
    }

    /**
     * @return string
     */
    public function getOnsCode()
    {
        return $this->getProperty('onsCode');
    }

    /**
     * @param string $onsCode
     */
    public function setOnsCode($onsCode = null)
    {
        $this->setProperty('onsCode', $onsCode);
    }

    /**
     * @return string
     */
    public function getD00250()
    {
        return $this->getProperty('d00250');
    }

    /**
     * @param string $d00250
     */
    public function setD00250($d00250 = null)
    {
        $this->setProperty('d00250', $d00250);
    }


}
