<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class NewReportCardTemplate extends ModelBase
{
    public const TEMPLATE_NAME = 'templateName';

    public const TEMPLATE_FILENAME = 'templateFilename';

    public const TEMPLATE_HTML = 'templateHtml';

    public const CSS = 'css';

    public const HELPER_CLASS_NAME = 'helperClassName';

    public const VARIABLES = 'variables';

    public const CODE = 'code';

    public const ORIENTATION = 'orientation';

    public const IS_CUSTOM = 'isCustom';

    protected $_resourceType = ResourceType::NEW_REPORT_CARD_TEMPLATE;

    /**
     * @param Query $query
     * @return NewReportCardTemplate[] | Collection
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

        $query->setResourceType(ResourceType::NEW_REPORT_CARD_TEMPLATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return NewReportCardTemplate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::NEW_REPORT_CARD_TEMPLATE, $id);
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
        return $this->getProperty('templateName');
    }

    /**
     * @param string $templateName
     */
    public function setTemplateName(string $templateName = null)
    {
        $this->setProperty('templateName', $templateName);
    }

    /**
     * @return string
     */
    public function getTemplateFilename()
    {
        return $this->getProperty('templateFilename');
    }

    /**
     * @param string $templateFilename
     */
    public function setTemplateFilename(string $templateFilename = null)
    {
        $this->setProperty('templateFilename', $templateFilename);
    }

    /**
     * @return string
     */
    public function getTemplateHtml()
    {
        return $this->getProperty('templateHtml');
    }

    /**
     * @param string $templateHtml
     */
    public function setTemplateHtml(string $templateHtml = null)
    {
        $this->setProperty('templateHtml', $templateHtml);
    }

    /**
     * @return string
     */
    public function getCss()
    {
        return $this->getProperty('css');
    }

    /**
     * @param string $css
     */
    public function setCss(string $css = null)
    {
        $this->setProperty('css', $css);
    }

    /**
     * @return string
     */
    public function getHelperClassName()
    {
        return $this->getProperty('helperClassName');
    }

    /**
     * @param string $helperClassName
     */
    public function setHelperClassName(string $helperClassName = null)
    {
        $this->setProperty('helperClassName', $helperClassName);
    }

    /**
     * @return string
     */
    public function getVariables()
    {
        return $this->getProperty('variables');
    }

    /**
     * @param string $variables
     */
    public function setVariables(string $variables = null)
    {
        $this->setProperty('variables', $variables);
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
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
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
     * @return bool
     */
    public function getIsCustom()
    {
        return $this->getProperty('isCustom');
    }

    /**
     * @param bool $isCustom
     */
    public function setIsCustom(bool $isCustom = null)
    {
        $this->setProperty('isCustom', $isCustom);
    }
}
