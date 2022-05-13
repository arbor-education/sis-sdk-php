<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class GcseMathsAchievementType extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const LABEL = 'label';

    const SHORT_LABEL = 'shortLabel';

    const EXPORT_VALUE = 'exportValue';

    protected $_resourceType = ResourceType::UK_DFE_GCSE_MATHS_ACHIEVEMENT_TYPE;

    /**
     * @param Query $query
     * @return GcseMathsAchievementType[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_GCSE_MATHS_ACHIEVEMENT_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return GcseMathsAchievementType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_GCSE_MATHS_ACHIEVEMENT_TYPE, $id);
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
     * @return string
     */
    public function getShortLabel()
    {
        return $this->getProperty('shortLabel');
    }

    /**
     * @param string $shortLabel
     */
    public function setShortLabel($shortLabel = null)
    {
        $this->setProperty('shortLabel', $shortLabel);
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
