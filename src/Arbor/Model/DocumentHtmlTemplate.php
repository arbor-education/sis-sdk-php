<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\DocumentLayout;

class DocumentHtmlTemplate extends ModelBase
{

    const TEMPLATE_NAME = 'templateName';

    const TEMPLATE_TYPE = 'templateType';

    const DOCUMENT_LAYOUT = 'documentLayout';

    const TEMPLATE_HTML = 'templateHtml';

    protected $_resourceType = ResourceType::DOCUMENT_HTML_TEMPLATE;

    /**
     * @param \Arbor\Query\Query $query
     * @return DocumentHtmlTemplate[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("DocumentHtmlTemplate");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DocumentHtmlTemplate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::DOCUMENT_HTML_TEMPLATE, $id);
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
    public function getTemplateType()
    {
        return $this->getProperty("templateType");
    }

    /**
     * @param string $templateType
     */
    public function setTemplateType($templateType = null)
    {
        $this->setProperty("templateType", $templateType);
    }

    /**
     * @return DocumentLayout
     */
    public function getDocumentLayout()
    {
        return $this->getProperty("documentLayout");
    }

    /**
     * @param DocumentLayout $documentLayout
     */
    public function setDocumentLayout(DocumentLayout $documentLayout = null)
    {
        $this->setProperty("documentLayout", $documentLayout);
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


}
