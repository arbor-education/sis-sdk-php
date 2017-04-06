<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\EthnicityCategory;

class Ethnicity extends ModelBase
{

    const DFES_MAIN_CODE = 'dfesMainCode';

    const D00005 = 'd00005';

    const ONS_CODE = 'onsCode';

    const D00250 = 'd00250';

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ETHNICITY_NAME = 'ethnicityName';

    const ETHNICITY_CATEGORY = 'ethnicityCategory';

    const APPLIES_TO_STUDENTS = 'appliesToStudents';

    const APPLIES_TO_STAFF = 'appliesToStaff';

    const NOTES = 'notes';

    protected $_resourceType = ResourceType::ETHNICITY;

    /**
     * @param \Arbor\Query\Query $query
     * @return Ethnicity[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Ethnicity");
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
        return $gateway->retrieve(ResourceType::ETHNICITY, $id);
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

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getEthnicityName()
    {
        return $this->getProperty("ethnicityName");
    }

    /**
     * @param string $ethnicityName
     */
    public function setEthnicityName($ethnicityName = null)
    {
        $this->setProperty("ethnicityName", $ethnicityName);
    }

    /**
     * @return EthnicityCategory
     */
    public function getEthnicityCategory()
    {
        return $this->getProperty("ethnicityCategory");
    }

    /**
     * @param EthnicityCategory $ethnicityCategory
     */
    public function setEthnicityCategory(EthnicityCategory $ethnicityCategory = null)
    {
        $this->setProperty("ethnicityCategory", $ethnicityCategory);
    }

    /**
     * @return bool
     */
    public function getAppliesToStudents()
    {
        return $this->getProperty("appliesToStudents");
    }

    /**
     * @param bool $appliesToStudents
     */
    public function setAppliesToStudents($appliesToStudents = null)
    {
        $this->setProperty("appliesToStudents", $appliesToStudents);
    }

    /**
     * @return bool
     */
    public function getAppliesToStaff()
    {
        return $this->getProperty("appliesToStaff");
    }

    /**
     * @param bool $appliesToStaff
     */
    public function setAppliesToStaff($appliesToStaff = null)
    {
        $this->setProperty("appliesToStaff", $appliesToStaff);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty("notes");
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes = null)
    {
        $this->setProperty("notes", $notes);
    }


}
