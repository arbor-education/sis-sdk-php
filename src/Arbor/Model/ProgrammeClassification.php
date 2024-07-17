<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProgrammeClassification extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const LABEL = 'label';

    public const IS_MAIN_PROGRAMME = 'isMainProgramme';

    public const EXPORT_VALUE = 'exportValue';

    protected $_resourceType = ResourceType::PROGRAMME_CLASSIFICATION;

    /**
     * @param Query $query
     * @return ProgrammeClassification[] | Collection
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
    public function getLabel()
    {
        return $this->getProperty('label');
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label = null)
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
    public function setIsMainProgramme(bool $isMainProgramme = null)
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
    public function setExportValue(string $exportValue = null)
    {
        $this->setProperty('exportValue', $exportValue);
    }
}
