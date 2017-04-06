<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class LabelPageLayout extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const LAYOUT_NAME = 'layoutName';

    const PAGE_HEIGHT = 'pageHeight';

    const PAGE_WIDTH = 'pageWidth';

    const ROWS = 'rows';

    const COLUMNS = 'columns';

    const PAGE_MARGIN_TOP = 'pageMarginTop';

    const PAGE_MARGIN_RIGHT = 'pageMarginRight';

    const PAGE_MARGIN_BOTTOM = 'pageMarginBottom';

    const PAGE_MARGIN_LEFT = 'pageMarginLeft';

    const LABEL_PADDING_TOP = 'labelPaddingTop';

    const LABEL_PADDING_LEFT = 'labelPaddingLeft';

    const LABEL_PADDING_BOTTOM = 'labelPaddingBottom';

    const LABEL_PADDING_RIGHT = 'labelPaddingRight';

    const HORIZONTAL_SPACING = 'horizontalSpacing';

    const VERTICAL_SPACING = 'verticalSpacing';

    protected $_resourceType = ResourceType::LABEL_PAGE_LAYOUT;

    /**
     * @param \Arbor\Query\Query $query
     * @return LabelPageLayout[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("LabelPageLayout");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return LabelPageLayout
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::LABEL_PAGE_LAYOUT, $id);
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
    public function getLayoutName()
    {
        return $this->getProperty("layoutName");
    }

    /**
     * @param string $layoutName
     */
    public function setLayoutName($layoutName = null)
    {
        $this->setProperty("layoutName", $layoutName);
    }

    /**
     * @return float
     */
    public function getPageHeight()
    {
        return $this->getProperty("pageHeight");
    }

    /**
     * @param float $pageHeight
     */
    public function setPageHeight($pageHeight = null)
    {
        $this->setProperty("pageHeight", $pageHeight);
    }

    /**
     * @return float
     */
    public function getPageWidth()
    {
        return $this->getProperty("pageWidth");
    }

    /**
     * @param float $pageWidth
     */
    public function setPageWidth($pageWidth = null)
    {
        $this->setProperty("pageWidth", $pageWidth);
    }

    /**
     * @return int
     */
    public function getRows()
    {
        return $this->getProperty("rows");
    }

    /**
     * @param int $rows
     */
    public function setRows($rows = null)
    {
        $this->setProperty("rows", $rows);
    }

    /**
     * @return int
     */
    public function getColumns()
    {
        return $this->getProperty("columns");
    }

    /**
     * @param int $columns
     */
    public function setColumns($columns = null)
    {
        $this->setProperty("columns", $columns);
    }

    /**
     * @return float
     */
    public function getPageMarginTop()
    {
        return $this->getProperty("pageMarginTop");
    }

    /**
     * @param float $pageMarginTop
     */
    public function setPageMarginTop($pageMarginTop = null)
    {
        $this->setProperty("pageMarginTop", $pageMarginTop);
    }

    /**
     * @return float
     */
    public function getPageMarginRight()
    {
        return $this->getProperty("pageMarginRight");
    }

    /**
     * @param float $pageMarginRight
     */
    public function setPageMarginRight($pageMarginRight = null)
    {
        $this->setProperty("pageMarginRight", $pageMarginRight);
    }

    /**
     * @return float
     */
    public function getPageMarginBottom()
    {
        return $this->getProperty("pageMarginBottom");
    }

    /**
     * @param float $pageMarginBottom
     */
    public function setPageMarginBottom($pageMarginBottom = null)
    {
        $this->setProperty("pageMarginBottom", $pageMarginBottom);
    }

    /**
     * @return float
     */
    public function getPageMarginLeft()
    {
        return $this->getProperty("pageMarginLeft");
    }

    /**
     * @param float $pageMarginLeft
     */
    public function setPageMarginLeft($pageMarginLeft = null)
    {
        $this->setProperty("pageMarginLeft", $pageMarginLeft);
    }

    /**
     * @return float
     */
    public function getLabelPaddingTop()
    {
        return $this->getProperty("labelPaddingTop");
    }

    /**
     * @param float $labelPaddingTop
     */
    public function setLabelPaddingTop($labelPaddingTop = null)
    {
        $this->setProperty("labelPaddingTop", $labelPaddingTop);
    }

    /**
     * @return float
     */
    public function getLabelPaddingLeft()
    {
        return $this->getProperty("labelPaddingLeft");
    }

    /**
     * @param float $labelPaddingLeft
     */
    public function setLabelPaddingLeft($labelPaddingLeft = null)
    {
        $this->setProperty("labelPaddingLeft", $labelPaddingLeft);
    }

    /**
     * @return float
     */
    public function getLabelPaddingBottom()
    {
        return $this->getProperty("labelPaddingBottom");
    }

    /**
     * @param float $labelPaddingBottom
     */
    public function setLabelPaddingBottom($labelPaddingBottom = null)
    {
        $this->setProperty("labelPaddingBottom", $labelPaddingBottom);
    }

    /**
     * @return float
     */
    public function getLabelPaddingRight()
    {
        return $this->getProperty("labelPaddingRight");
    }

    /**
     * @param float $labelPaddingRight
     */
    public function setLabelPaddingRight($labelPaddingRight = null)
    {
        $this->setProperty("labelPaddingRight", $labelPaddingRight);
    }

    /**
     * @return float
     */
    public function getHorizontalSpacing()
    {
        return $this->getProperty("horizontalSpacing");
    }

    /**
     * @param float $horizontalSpacing
     */
    public function setHorizontalSpacing($horizontalSpacing = null)
    {
        $this->setProperty("horizontalSpacing", $horizontalSpacing);
    }

    /**
     * @return float
     */
    public function getVerticalSpacing()
    {
        return $this->getProperty("verticalSpacing");
    }

    /**
     * @param float $verticalSpacing
     */
    public function setVerticalSpacing($verticalSpacing = null)
    {
        $this->setProperty("verticalSpacing", $verticalSpacing);
    }


}
