<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProgrammeClassification extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const LABEL = 'label';

    const IS_MAIN_PROGRAMME = 'isMainProgramme';

    const EXPORT_VALUE = 'exportValue';

    protected $_resourceType = ResourceType::PROGRAMME_CLASSIFICATION;

    /**
     * @param Query $query
     * @return ProgrammeClassification[] | Collection
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

        $query->setResourceType(ResourceType::PROGRAMME_CLASSIFICATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeClassification
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRAMME_CLASSIFICATION, $id);
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->getProperty('label');
    }

    /**
     * @param string $label
     */
    public function setLabel($label = null)
    {
        $this->setProperty('label', $label);
    }

    /**
     * @return bool
     */
    public function getIsMainProgramme()
    {
        return $this->getProperty('isMainProgramme');
    }

    /**
     * @param bool $isMainProgramme
     */
    public function setIsMainProgramme($isMainProgramme = null)
    {
        $this->setProperty('isMainProgramme', $isMainProgramme);
    }

    /**
     * @return string
     */
    public function getExportValue()
    {
        return $this->getProperty('exportValue');
    }

    /**
     * @param string $exportValue
     */
    public function setExportValue($exportValue = null)
    {
        $this->setProperty('exportValue', $exportValue);
    }


}
