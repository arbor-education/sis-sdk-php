<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SmartReportTemplateChapter extends ModelBase
{
    public const SMART_REPORT_TEMPLATE = 'smartReportTemplate';

    public const UUID = 'uuid';

    public const NAME = 'name';

    public const DESCRIPTION = 'description';

    protected $_resourceType = ResourceType::SMART_REPORT_TEMPLATE_CHAPTER;

    /**
     * @param Query $query
     * @return SmartReportTemplateChapter[] | Collection
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

        $query->setResourceType(ResourceType::SMART_REPORT_TEMPLATE_CHAPTER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SmartReportTemplateChapter
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SMART_REPORT_TEMPLATE_CHAPTER, $id);
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
}
