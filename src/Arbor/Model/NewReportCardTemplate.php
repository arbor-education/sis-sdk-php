<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class NewReportCardTemplate extends ModelBase
{

    const TEMPLATE_NAME = 'templateName';

    const TEMPLATE_FILENAME = 'templateFilename';

    const TEMPLATE_HTML = 'templateHtml';

    const CSS = 'css';

    const HELPER_CLASS_NAME = 'helperClassName';

    const VARIABLES = 'variables';

    const CODE = 'code';

    const ORIENTATION = 'orientation';

    const IS_CUSTOM = 'isCustom';

    protected $_resourceType = ResourceType::NEW_REPORT_CARD_TEMPLATE;

    /**
     * @param \Arbor\Query\Query $query
     * @return NewReportCardTemplate[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("NewReportCardTemplate");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return NewReportCardTemplate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::NEW_REPORT_CARD_TEMPLATE, $id);
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
        return $this->getProperty("templateName");
    }

    /**
     * @param string $templateName
     */
    public function setTemplateName($templateName = null)
    {
        $this->setProperty("templateName", $templateName);
    }

    /**
     * @return string
     */
    public function getTemplateFilename()
    {
        return $this->getProperty("templateFilename");
    }

    /**
     * @param string $templateFilename
     */
    public function setTemplateFilename($templateFilename = null)
    {
        $this->setProperty("templateFilename", $templateFilename);
    }

    /**
     * @return string
     */
    public function getTemplateHtml()
    {
        return $this->getProperty("templateHtml");
    }

    /**
     * @param string $templateHtml
     */
    public function setTemplateHtml($templateHtml = null)
    {
        $this->setProperty("templateHtml", $templateHtml);
    }

    /**
     * @return string
     */
    public function getCss()
    {
        return $this->getProperty("css");
    }

    /**
     * @param string $css
     */
    public function setCss($css = null)
    {
        $this->setProperty("css", $css);
    }

    /**
     * @return string
     */
    public function getHelperClassName()
    {
        return $this->getProperty("helperClassName");
    }

    /**
     * @param string $helperClassName
     */
    public function setHelperClassName($helperClassName = null)
    {
        $this->setProperty("helperClassName", $helperClassName);
    }

    /**
     * @return string
     */
    public function getVariables()
    {
        return $this->getProperty("variables");
    }

    /**
     * @param string $variables
     */
    public function setVariables($variables = null)
    {
        $this->setProperty("variables", $variables);
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
     * @return string
     */
    public function getOrientation()
    {
        return $this->getProperty("orientation");
    }

    /**
     * @param string $orientation
     */
    public function setOrientation($orientation = null)
    {
        $this->setProperty("orientation", $orientation);
    }

    /**
     * @return bool
     */
    public function getIsCustom()
    {
        return $this->getProperty("isCustom");
    }

    /**
     * @param bool $isCustom
     */
    public function setIsCustom($isCustom = null)
    {
        $this->setProperty("isCustom", $isCustom);
    }


}
