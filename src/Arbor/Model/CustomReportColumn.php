<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportColumn extends ModelBase
{

    const CUSTOM_REPORT = 'customReport';

    const FIELD_CLASS = 'fieldClass';

    const FIELD_PARAMS = 'fieldParams';

    const TARGET_TYPE = 'targetType';

    const TARGET_INDEX = 'targetIndex';

    const TRANSFORMATION_CLASS = 'transformationClass';

    const DISPLAY_ORDER = 'displayOrder';

    const FORMATTER_CLASS = 'formatterClass';

    const LOCKED = 'locked';

    const CUSTOM_LABEL = 'customLabel';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_COLUMN;

    /**
     * @param Query $query
     * @return CustomReportColumn[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_COLUMN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportColumn
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_COLUMN, $id);
    }

    /**
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }

    /**
     * @return string
     */
    public function getFieldClass()
    {
        return $this->getProperty('fieldClass');
    }

    /**
     * @param string $fieldClass
     */
    public function setFieldClass($fieldClass = null)
    {
        $this->setProperty('fieldClass', $fieldClass);
    }

    /**
     * @return string
     */
    public function getFieldParams()
    {
        return $this->getProperty('fieldParams');
    }

    /**
     * @param string $fieldParams
     */
    public function setFieldParams($fieldParams = null)
    {
        $this->setProperty('fieldParams', $fieldParams);
    }

    /**
     * @return string
     */
    public function getTargetType()
    {
        return $this->getProperty('targetType');
    }

    /**
     * @param string $targetType
     */
    public function setTargetType($targetType = null)
    {
        $this->setProperty('targetType', $targetType);
    }

    /**
     * @return int
     */
    public function getTargetIndex()
    {
        return $this->getProperty('targetIndex');
    }

    /**
     * @param int $targetIndex
     */
    public function setTargetIndex($targetIndex = null)
    {
        $this->setProperty('targetIndex', $targetIndex);
    }

    /**
     * @return string
     */
    public function getTransformationClass()
    {
        return $this->getProperty('transformationClass');
    }

    /**
     * @param string $transformationClass
     */
    public function setTransformationClass($transformationClass = null)
    {
        $this->setProperty('transformationClass', $transformationClass);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty('displayOrder');
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder($displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
    }

    /**
     * @return string
     */
    public function getFormatterClass()
    {
        return $this->getProperty('formatterClass');
    }

    /**
     * @param string $formatterClass
     */
    public function setFormatterClass($formatterClass = null)
    {
        $this->setProperty('formatterClass', $formatterClass);
    }

    /**
     * @return bool
     */
    public function getLocked()
    {
        return $this->getProperty('locked');
    }

    /**
     * @param bool $locked
     */
    public function setLocked($locked = null)
    {
        $this->setProperty('locked', $locked);
    }

    /**
     * @return string
     */
    public function getCustomLabel()
    {
        return $this->getProperty('customLabel');
    }

    /**
     * @param string $customLabel
     */
    public function setCustomLabel($customLabel = null)
    {
        $this->setProperty('customLabel', $customLabel);
    }


}
