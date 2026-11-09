<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SmartReportTemplate extends ModelBase
{
    public const UUID = 'uuid';

    public const NAME = 'name';

    public const DESCRIPTION = 'description';

    public const ARCHIVED = 'archived';

    public const TEMPLATE_CONTENT = 'templateContent';

    protected $_resourceType = ResourceType::SMART_REPORT_TEMPLATE;

    /**
     * @param Query $query
     * @return SmartReportTemplate[] | Collection
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

        $query->setResourceType(ResourceType::SMART_REPORT_TEMPLATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SmartReportTemplate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SMART_REPORT_TEMPLATE, $id);
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
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
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

    /**
     * @return \Arbor\Model\Content
     */
    public function getTemplateContent()
    {
        return $this->getProperty('templateContent');
    }

    /**
     * @param \Arbor\Model\Content $templateContent
     */
    public function setTemplateContent(\Arbor\Model\Content $templateContent = null)
    {
        $this->setProperty('templateContent', $templateContent);
    }
}
