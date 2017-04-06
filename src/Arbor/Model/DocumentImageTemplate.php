<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Content;

class DocumentImageTemplate extends ModelBase
{

    const TEMPLATE_NAME = 'templateName';

    const CONTENT = 'content';

    const PLACEHOLDERS = 'placeholders';

    protected $_resourceType = ResourceType::DOCUMENT_IMAGE_TEMPLATE;

    /**
     * @param \Arbor\Query\Query $query
     * @return DocumentImageTemplate[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("DocumentImageTemplate");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DocumentImageTemplate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::DOCUMENT_IMAGE_TEMPLATE, $id);
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
     * @return Content
     */
    public function getContent()
    {
        return $this->getProperty("content");
    }

    /**
     * @param Content $content
     */
    public function setContent(Content $content = null)
    {
        $this->setProperty("content", $content);
    }

    /**
     * @return string
     */
    public function getPlaceholders()
    {
        return $this->getProperty("placeholders");
    }

    /**
     * @param string $placeholders
     */
    public function setPlaceholders($placeholders = null)
    {
        $this->setProperty("placeholders", $placeholders);
    }


}
