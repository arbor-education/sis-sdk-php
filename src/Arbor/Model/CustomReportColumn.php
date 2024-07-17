<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomReportColumn extends ModelBase
{
    public const CUSTOM_REPORT = 'customReport';

    public const FIELD_CLASS = 'fieldClass';

    public const FIELD_PARAMS = 'fieldParams';

    public const TARGET_GROUPING = 'targetGrouping';

    public const TRANSFORMATION_CLASS = 'transformationClass';

    public const DISPLAY_ORDER = 'displayOrder';

    public const FORMATTER_CLASS = 'formatterClass';

    public const LOCKED = 'locked';

    public const CUSTOM_LABEL = 'customLabel';

    public const SUMMARY_ROW_FORMULA_CLASS = 'summaryRowFormulaClass';

    public const IS_HIDDEN = 'isHidden';

    public const IS_SOURCE_UPDATE_PERMITTED = 'isSourceUpdatePermitted';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_COLUMN;

    /**
     * @param Query $query
     * @return CustomReportColumn[] | Collection
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
     * @return \Arbor\Model\CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param \Arbor\Model\CustomReport $customReport
     */
    public function setCustomReport(\Arbor\Model\CustomReport $customReport = null)
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
    public function setFieldClass(string $fieldClass = null)
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
    public function setFieldParams(string $fieldParams = null)
    {
        $this->setProperty('fieldParams', $fieldParams);
    }

    /**
     * @return \Arbor\Model\CustomReportGrouping
     */
    public function getTargetGrouping()
    {
        return $this->getProperty('targetGrouping');
    }

    /**
     * @param \Arbor\Model\CustomReportGrouping $targetGrouping
     */
    public function setTargetGrouping(\Arbor\Model\CustomReportGrouping $targetGrouping = null)
    {
        $this->setProperty('targetGrouping', $targetGrouping);
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
    public function setTransformationClass(string $transformationClass = null)
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
    public function setDisplayOrder(int $displayOrder = null)
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
    public function setFormatterClass(string $formatterClass = null)
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
    public function setLocked(bool $locked = null)
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
    public function setCustomLabel(string $customLabel = null)
    {
        $this->setProperty('customLabel', $customLabel);
    }

    /**
     * @return string
     */
    public function getSummaryRowFormulaClass()
    {
        return $this->getProperty('summaryRowFormulaClass');
    }

    /**
     * @param string $summaryRowFormulaClass
     */
    public function setSummaryRowFormulaClass(string $summaryRowFormulaClass = null)
    {
        $this->setProperty('summaryRowFormulaClass', $summaryRowFormulaClass);
    }

    /**
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->getProperty('isHidden');
    }

    /**
     * @param bool $isHidden
     */
    public function setIsHidden(bool $isHidden = null)
    {
        $this->setProperty('isHidden', $isHidden);
    }

    /**
     * @return bool
     */
    public function getIsSourceUpdatePermitted()
    {
        return $this->getProperty('isSourceUpdatePermitted');
    }

    /**
     * @param bool $isSourceUpdatePermitted
     */
    public function setIsSourceUpdatePermitted(bool $isSourceUpdatePermitted = null)
    {
        $this->setProperty('isSourceUpdatePermitted', $isSourceUpdatePermitted);
    }
}
