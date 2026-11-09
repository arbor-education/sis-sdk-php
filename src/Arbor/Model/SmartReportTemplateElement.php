<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SmartReportTemplateElement extends ModelBase
{
    public const SMART_REPORT_TEMPLATE = 'smartReportTemplate';

    public const SMART_REPORT_TEMPLATE_CHAPTER = 'smartReportTemplateChapter';

    public const UUID = 'uuid';

    public const ELEMENT_TYPE = 'elementType';

    public const DISPLAY_TITLE = 'displayTitle';

    protected $_resourceType = ResourceType::SMART_REPORT_TEMPLATE_ELEMENT;

    /**
     * @param Query $query
     * @return SmartReportTemplateElement[] | Collection
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

        $query->setResourceType(ResourceType::SMART_REPORT_TEMPLATE_ELEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SmartReportTemplateElement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SMART_REPORT_TEMPLATE_ELEMENT, $id);
    }

    /**
     * @return \Arbor\Model\SmartReportTemplate
     */
    public function getSmartReportTemplate()
    {
        return $this->getProperty('smartReportTemplate');
    }

    /**
     * @param \Arbor\Model\SmartReportTemplate $smartReportTemplate
     */
    public function setSmartReportTemplate(\Arbor\Model\SmartReportTemplate $smartReportTemplate = null)
    {
        $this->setProperty('smartReportTemplate', $smartReportTemplate);
    }

    /**
     * @return \Arbor\Model\SmartReportTemplateChapter
     */
    public function getSmartReportTemplateChapter()
    {
        return $this->getProperty('smartReportTemplateChapter');
    }

    /**
     * @param \Arbor\Model\SmartReportTemplateChapter $smartReportTemplateChapter
     */
    public function setSmartReportTemplateChapter(\Arbor\Model\SmartReportTemplateChapter $smartReportTemplateChapter = null)
    {
        $this->setProperty('smartReportTemplateChapter', $smartReportTemplateChapter);
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->getProperty('uuid');
    }

    /**
     * @param string $uuid
     */
    public function setUuid(string $uuid = null)
    {
        $this->setProperty('uuid', $uuid);
    }

    /**
     * @return string
     */
    public function getElementType()
    {
        return $this->getProperty('elementType');
    }

    /**
     * @param string $elementType
     */
    public function setElementType(string $elementType = null)
    {
        $this->setProperty('elementType', $elementType);
    }

    /**
     * @return string
     */
    public function getDisplayTitle()
    {
        return $this->getProperty('displayTitle');
    }

    /**
     * @param string $displayTitle
     */
    public function setDisplayTitle(string $displayTitle = null)
    {
        $this->setProperty('displayTitle', $displayTitle);
    }
}
