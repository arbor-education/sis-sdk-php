<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class DocumentLayout extends ModelBase
{
    const LAYOUT_NAME = 'layoutName';

    const PAGE_FORMAT = 'pageFormat';

    const PAGE_NUMBER_STYLE = 'pageNumberStyle';

    const HEADER_HTML = 'headerHtml';

    const HEADER_PAGE1HTML = 'headerPage1html';

    const FOOTER_HTML = 'footerHtml';

    const FOOTER_PAGE1HTML = 'footerPage1html';

    const MARGIN_TOP = 'marginTop';

    const MARGIN_BOTTOM = 'marginBottom';

    const MARGIN_HEADER = 'marginHeader';

    const MARGIN_FOOTER = 'marginFooter';

    const MARGIN_LEFT = 'marginLeft';

    const MARGIN_RIGHT = 'marginRight';

    const MARGIN_PAGE1TOP = 'marginPage1top';

    const MARGIN_PAGE1BOTTOM = 'marginPage1bottom';

    const MARGIN_PAGE1HEADER = 'marginPage1header';

    const MARGIN_PAGE1FOOTER = 'marginPage1footer';

    protected $_resourceType = ResourceType::DOCUMENT_LAYOUT;

    /**
     * @param \Arbor\Query\Query $query
     * @return DocumentLayout[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("DocumentLayout");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DocumentLayout
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::DOCUMENT_LAYOUT, $id);
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
     * @return string
     */
    public function getPageFormat()
    {
        return $this->getProperty("pageFormat");
    }

    /**
     * @param string $pageFormat
     */
    public function setPageFormat($pageFormat = null)
    {
        $this->setProperty("pageFormat", $pageFormat);
    }

    /**
     * @return string
     */
    public function getPageNumberStyle()
    {
        return $this->getProperty("pageNumberStyle");
    }

    /**
     * @param string $pageNumberStyle
     */
    public function setPageNumberStyle($pageNumberStyle = null)
    {
        $this->setProperty("pageNumberStyle", $pageNumberStyle);
    }

    /**
     * @return string
     */
    public function getHeaderHtml()
    {
        return $this->getProperty("headerHtml");
    }

    /**
     * @param string $headerHtml
     */
    public function setHeaderHtml($headerHtml = null)
    {
        $this->setProperty("headerHtml", $headerHtml);
    }

    /**
     * @return string
     */
    public function getHeaderPage1html()
    {
        return $this->getProperty("headerPage1html");
    }

    /**
     * @param string $headerPage1html
     */
    public function setHeaderPage1html($headerPage1html = null)
    {
        $this->setProperty("headerPage1html", $headerPage1html);
    }

    /**
     * @return string
     */
    public function getFooterHtml()
    {
        return $this->getProperty("footerHtml");
    }

    /**
     * @param string $footerHtml
     */
    public function setFooterHtml($footerHtml = null)
    {
        $this->setProperty("footerHtml", $footerHtml);
    }

    /**
     * @return string
     */
    public function getFooterPage1html()
    {
        return $this->getProperty("footerPage1html");
    }

    /**
     * @param string $footerPage1html
     */
    public function setFooterPage1html($footerPage1html = null)
    {
        $this->setProperty("footerPage1html", $footerPage1html);
    }

    /**
     * @return int
     */
    public function getMarginTop()
    {
        return $this->getProperty("marginTop");
    }

    /**
     * @param int $marginTop
     */
    public function setMarginTop($marginTop = null)
    {
        $this->setProperty("marginTop", $marginTop);
    }

    /**
     * @return int
     */
    public function getMarginBottom()
    {
        return $this->getProperty("marginBottom");
    }

    /**
     * @param int $marginBottom
     */
    public function setMarginBottom($marginBottom = null)
    {
        $this->setProperty("marginBottom", $marginBottom);
    }

    /**
     * @return int
     */
    public function getMarginHeader()
    {
        return $this->getProperty("marginHeader");
    }

    /**
     * @param int $marginHeader
     */
    public function setMarginHeader($marginHeader = null)
    {
        $this->setProperty("marginHeader", $marginHeader);
    }

    /**
     * @return int
     */
    public function getMarginFooter()
    {
        return $this->getProperty("marginFooter");
    }

    /**
     * @param int $marginFooter
     */
    public function setMarginFooter($marginFooter = null)
    {
        $this->setProperty("marginFooter", $marginFooter);
    }

    /**
     * @return int
     */
    public function getMarginLeft()
    {
        return $this->getProperty("marginLeft");
    }

    /**
     * @param int $marginLeft
     */
    public function setMarginLeft($marginLeft = null)
    {
        $this->setProperty("marginLeft", $marginLeft);
    }

    /**
     * @return int
     */
    public function getMarginRight()
    {
        return $this->getProperty("marginRight");
    }

    /**
     * @param int $marginRight
     */
    public function setMarginRight($marginRight = null)
    {
        $this->setProperty("marginRight", $marginRight);
    }

    /**
     * @return int
     */
    public function getMarginPage1top()
    {
        return $this->getProperty("marginPage1top");
    }

    /**
     * @param int $marginPage1top
     */
    public function setMarginPage1top($marginPage1top = null)
    {
        $this->setProperty("marginPage1top", $marginPage1top);
    }

    /**
     * @return int
     */
    public function getMarginPage1bottom()
    {
        return $this->getProperty("marginPage1bottom");
    }

    /**
     * @param int $marginPage1bottom
     */
    public function setMarginPage1bottom($marginPage1bottom = null)
    {
        $this->setProperty("marginPage1bottom", $marginPage1bottom);
    }

    /**
     * @return int
     */
    public function getMarginPage1header()
    {
        return $this->getProperty("marginPage1header");
    }

    /**
     * @param int $marginPage1header
     */
    public function setMarginPage1header($marginPage1header = null)
    {
        $this->setProperty("marginPage1header", $marginPage1header);
    }

    /**
     * @return int
     */
    public function getMarginPage1footer()
    {
        return $this->getProperty("marginPage1footer");
    }

    /**
     * @param int $marginPage1footer
     */
    public function setMarginPage1footer($marginPage1footer = null)
    {
        $this->setProperty("marginPage1footer", $marginPage1footer);
    }
}
