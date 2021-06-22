<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportColumn extends ModelBase
{

    const CUSTOM_REPORT = 'customReport';

    const FIELD_CLASS = 'fieldClass';

    const FIELD_PARAMS = 'fieldParams';

    const TARGET_GROUPING = 'targetGrouping';

    const TRANSFORMATION_CLASS = 'transformationClass';

    const DISPLAY_ORDER = 'displayOrder';

    const FORMATTER_CLASS = 'formatterClass';

    const LOCKED = 'locked';

    const CUSTOM_LABEL = 'customLabel';

    const SUMMARY_ROW_FORMULA_CLASS = 'summaryRowFormulaClass';

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
     * @return CustomReportGrouping
     */
    public function getTargetGrouping()
    {
        return $this->getProperty('targetGrouping');
    }

    /**
     * @param CustomReportGrouping $targetGrouping
     */
    public function setTargetGrouping(CustomReportGrouping $targetGrouping = null)
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
    public function setSummaryRowFormulaClass($summaryRowFormulaClass = null)
    {
        $this->setProperty('summaryRowFormulaClass', $summaryRowFormulaClass);
    }


}
