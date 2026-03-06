<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Ethnicity extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ETHNICITY_NAME = 'ethnicityName';

    public const ETHNICITY_CATEGORY = 'ethnicityCategory';

    public const APPLIES_TO_STUDENTS = 'appliesToStudents';

    public const APPLIES_TO_STAFF = 'appliesToStaff';

    public const NOTES = 'notes';

    public const EXPORT_CODE = 'exportCode';

    public const DFES_MAIN_CODE = 'dfesMainCode';

    public const D00005 = 'd00005';

    public const ONS_CODE = 'onsCode';

    public const D00250 = 'd00250';

    protected $_resourceType = ResourceType::ETHNICITY;

    /**
     * @param Query $query
     * @return Ethnicity[] | Collection
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

        $query->setResourceType(ResourceType::ETHNICITY);

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

        return $gateway->retrieve(ResourceType::ETHNICITY, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getEthnicityName()
    {
        return $this->getProperty('ethnicityName');
    }

    /**
     * @param string $ethnicityName
     */
    public function setEthnicityName(string $ethnicityName = null)
    {
        $this->setProperty('ethnicityName', $ethnicityName);
    }

    /**
     * @return \Arbor\Model\EthnicityCategory
     */
    public function getEthnicityCategory()
    {
        return $this->getProperty('ethnicityCategory');
    }

    /**
     * @param \Arbor\Model\EthnicityCategory $ethnicityCategory
     */
    public function setEthnicityCategory(\Arbor\Model\EthnicityCategory $ethnicityCategory = null)
    {
        $this->setProperty('ethnicityCategory', $ethnicityCategory);
    }

    /**
     * @return bool
     */
    public function getAppliesToStudents()
    {
        return $this->getProperty('appliesToStudents');
    }

    /**
     * @param bool $appliesToStudents
     */
    public function setAppliesToStudents(bool $appliesToStudents = null)
    {
        $this->setProperty('appliesToStudents', $appliesToStudents);
    }

    /**
     * @return bool
     */
    public function getAppliesToStaff()
    {
        return $this->getProperty('appliesToStaff');
    }

    /**
     * @param bool $appliesToStaff
     */
    public function setAppliesToStaff(bool $appliesToStaff = null)
    {
        $this->setProperty('appliesToStaff', $appliesToStaff);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty('notes');
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes = null)
    {
        $this->setProperty('notes', $notes);
    }

    /**
     * @return string
     */
    public function getExportCode()
    {
        return $this->getProperty('exportCode');
    }

    /**
     * @param string $exportCode
     */
    public function setExportCode(string $exportCode = null)
    {
        $this->setProperty('exportCode', $exportCode);
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
    public function setDfesMainCode(string $dfesMainCode = null)
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
    public function setD00005(string $d00005 = null)
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
    public function setOnsCode(string $onsCode = null)
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
    public function setD00250(string $d00250 = null)
    {
        $this->setProperty('d00250', $d00250);
    }
}
