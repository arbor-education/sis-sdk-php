<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DocumentLayout extends ModelBase
{
    public const NAME = 'name';

    public const FIRST_PAGE_HEADER_HTML = 'firstPageHeaderHtml';

    public const FIRST_PAGE_HEADER_HEIGHT = 'firstPageHeaderHeight';

    public const FIRST_PAGE_FOOTER_HTML = 'firstPageFooterHtml';

    public const FIRST_PAGE_FOOTER_HEIGHT = 'firstPageFooterHeight';

    public const OTHER_PAGES_HEADER_HTML = 'otherPagesHeaderHtml';

    public const OTHER_PAGES_HEADER_HEIGHT = 'otherPagesHeaderHeight';

    public const OTHER_PAGES_FOOTER_HTML = 'otherPagesFooterHtml';

    public const OTHER_PAGES_FOOTER_HEIGHT = 'otherPagesFooterHeight';

    public const LEFT_MARGIN = 'leftMargin';

    public const RIGHT_MARGIN = 'rightMargin';

    public const PAPER_SIZE = 'paperSize';

    public const ORIENTATION = 'orientation';

    public const DEFAULT_FONT_FAMILY = 'defaultFontFamily';

    public const DEFAULT_FONT_SIZE = 'defaultFontSize';

    public const SHOW_ADDRESS_ENVELOPE_SIZE = 'showAddressEnvelopeSize';

    public const ARCHIVED = 'archived';

    protected $_resourceType = ResourceType::DOCUMENT_LAYOUT;

    /**
     * @param Query $query
     * @return DocumentLayout[] | Collection
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
    public function setName(string $name = null)
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
    public function setFirstPageHeaderHtml(string $firstPageHeaderHtml = null)
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
    public function setFirstPageHeaderHeight(float $firstPageHeaderHeight = null)
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
    public function setFirstPageFooterHtml(string $firstPageFooterHtml = null)
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
    public function setFirstPageFooterHeight(float $firstPageFooterHeight = null)
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
    public function setOtherPagesHeaderHtml(string $otherPagesHeaderHtml = null)
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
    public function setOtherPagesHeaderHeight(float $otherPagesHeaderHeight = null)
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
    public function setOtherPagesFooterHtml(string $otherPagesFooterHtml = null)
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
    public function setOtherPagesFooterHeight(float $otherPagesFooterHeight = null)
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
    public function setLeftMargin(float $leftMargin = null)
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
    public function setRightMargin(float $rightMargin = null)
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
    public function setPaperSize(string $paperSize = null)
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
    public function setOrientation(string $orientation = null)
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
    public function setDefaultFontFamily(string $defaultFontFamily = null)
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
    public function setDefaultFontSize(float $defaultFontSize = null)
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
    public function setShowAddressEnvelopeSize(string $showAddressEnvelopeSize = null)
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
    public function setArchived(bool $archived = null)
    {
        $this->setProperty('archived', $archived);
    }
}
