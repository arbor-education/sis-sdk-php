<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DocumentLayout extends ModelBase
{
    const NAME = 'name';

    const FIRST_PAGE_HEADER_HTML = 'firstPageHeaderHtml';

    const FIRST_PAGE_HEADER_HEIGHT = 'firstPageHeaderHeight';

    const FIRST_PAGE_FOOTER_HTML = 'firstPageFooterHtml';

    const FIRST_PAGE_FOOTER_HEIGHT = 'firstPageFooterHeight';

    const OTHER_PAGES_HEADER_HTML = 'otherPagesHeaderHtml';

    const OTHER_PAGES_HEADER_HEIGHT = 'otherPagesHeaderHeight';

    const OTHER_PAGES_FOOTER_HTML = 'otherPagesFooterHtml';

    const OTHER_PAGES_FOOTER_HEIGHT = 'otherPagesFooterHeight';

    const LEFT_MARGIN = 'leftMargin';

    const RIGHT_MARGIN = 'rightMargin';

    const PAPER_SIZE = 'paperSize';

    const ORIENTATION = 'orientation';

    const DEFAULT_FONT_FAMILY = 'defaultFontFamily';

    const DEFAULT_FONT_SIZE = 'defaultFontSize';

    const SHOW_ADDRESS_ENVELOPE_SIZE = 'showAddressEnvelopeSize';

    const ARCHIVED = 'archived';

    protected $_resourceType = ResourceType::DOCUMENT_LAYOUT;

    /**
     * @param Query $query
     * @return DocumentLayout[] | Collection
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

        $query->setResourceType(ResourceType::DOCUMENT_LAYOUT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DocumentLayout
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DOCUMENT_LAYOUT, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getFirstPageHeaderHtml()
    {
        return $this->getProperty('firstPageHeaderHtml');
    }

    /**
     * @param string $firstPageHeaderHtml
     */
    public function setFirstPageHeaderHtml($firstPageHeaderHtml = null)
    {
        $this->setProperty('firstPageHeaderHtml', $firstPageHeaderHtml);
    }

    /**
     * @return float
     */
    public function getFirstPageHeaderHeight()
    {
        return $this->getProperty('firstPageHeaderHeight');
    }

    /**
     * @param float $firstPageHeaderHeight
     */
    public function setFirstPageHeaderHeight($firstPageHeaderHeight = null)
    {
        $this->setProperty('firstPageHeaderHeight', $firstPageHeaderHeight);
    }

    /**
     * @return string
     */
    public function getFirstPageFooterHtml()
    {
        return $this->getProperty('firstPageFooterHtml');
    }

    /**
     * @param string $firstPageFooterHtml
     */
    public function setFirstPageFooterHtml($firstPageFooterHtml = null)
    {
        $this->setProperty('firstPageFooterHtml', $firstPageFooterHtml);
    }

    /**
     * @return float
     */
    public function getFirstPageFooterHeight()
    {
        return $this->getProperty('firstPageFooterHeight');
    }

    /**
     * @param float $firstPageFooterHeight
     */
    public function setFirstPageFooterHeight($firstPageFooterHeight = null)
    {
        $this->setProperty('firstPageFooterHeight', $firstPageFooterHeight);
    }

    /**
     * @return string
     */
    public function getOtherPagesHeaderHtml()
    {
        return $this->getProperty('otherPagesHeaderHtml');
    }

    /**
     * @param string $otherPagesHeaderHtml
     */
    public function setOtherPagesHeaderHtml($otherPagesHeaderHtml = null)
    {
        $this->setProperty('otherPagesHeaderHtml', $otherPagesHeaderHtml);
    }

    /**
     * @return float
     */
    public function getOtherPagesHeaderHeight()
    {
        return $this->getProperty('otherPagesHeaderHeight');
    }

    /**
     * @param float $otherPagesHeaderHeight
     */
    public function setOtherPagesHeaderHeight($otherPagesHeaderHeight = null)
    {
        $this->setProperty('otherPagesHeaderHeight', $otherPagesHeaderHeight);
    }

    /**
     * @return string
     */
    public function getOtherPagesFooterHtml()
    {
        return $this->getProperty('otherPagesFooterHtml');
    }

    /**
     * @param string $otherPagesFooterHtml
     */
    public function setOtherPagesFooterHtml($otherPagesFooterHtml = null)
    {
        $this->setProperty('otherPagesFooterHtml', $otherPagesFooterHtml);
    }

    /**
     * @return float
     */
    public function getOtherPagesFooterHeight()
    {
        return $this->getProperty('otherPagesFooterHeight');
    }

    /**
     * @param float $otherPagesFooterHeight
     */
    public function setOtherPagesFooterHeight($otherPagesFooterHeight = null)
    {
        $this->setProperty('otherPagesFooterHeight', $otherPagesFooterHeight);
    }

    /**
     * @return float
     */
    public function getLeftMargin()
    {
        return $this->getProperty('leftMargin');
    }

    /**
     * @param float $leftMargin
     */
    public function setLeftMargin($leftMargin = null)
    {
        $this->setProperty('leftMargin', $leftMargin);
    }

    /**
     * @return float
     */
    public function getRightMargin()
    {
        return $this->getProperty('rightMargin');
    }

    /**
     * @param float $rightMargin
     */
    public function setRightMargin($rightMargin = null)
    {
        $this->setProperty('rightMargin', $rightMargin);
    }

    /**
     * @return string
     */
    public function getPaperSize()
    {
        return $this->getProperty('paperSize');
    }

    /**
     * @param string $paperSize
     */
    public function setPaperSize($paperSize = null)
    {
        $this->setProperty('paperSize', $paperSize);
    }

    /**
     * @return string
     */
    public function getOrientation()
    {
        return $this->getProperty('orientation');
    }

    /**
     * @param string $orientation
     */
    public function setOrientation($orientation = null)
    {
        $this->setProperty('orientation', $orientation);
    }

    /**
     * @return string
     */
    public function getDefaultFontFamily()
    {
        return $this->getProperty('defaultFontFamily');
    }

    /**
     * @param string $defaultFontFamily
     */
    public function setDefaultFontFamily($defaultFontFamily = null)
    {
        $this->setProperty('defaultFontFamily', $defaultFontFamily);
    }

    /**
     * @return float
     */
    public function getDefaultFontSize()
    {
        return $this->getProperty('defaultFontSize');
    }

    /**
     * @param float $defaultFontSize
     */
    public function setDefaultFontSize($defaultFontSize = null)
    {
        $this->setProperty('defaultFontSize', $defaultFontSize);
    }

    /**
     * @return string
     */
    public function getShowAddressEnvelopeSize()
    {
        return $this->getProperty('showAddressEnvelopeSize');
    }

    /**
     * @param string $showAddressEnvelopeSize
     */
    public function setShowAddressEnvelopeSize($showAddressEnvelopeSize = null)
    {
        $this->setProperty('showAddressEnvelopeSize', $showAddressEnvelopeSize);
    }

    /**
     * @return bool
     */
    public function getArchived()
    {
        return $this->getProperty('archived');
    }

    /**
     * @param bool $archived
     */
    public function setArchived($archived = null)
    {
        $this->setProperty('archived', $archived);
    }

}
