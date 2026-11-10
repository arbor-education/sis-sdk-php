<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SmartReport extends ModelBase
{
    public const UID = 'uid';

    public const TITLE = 'title';

    public const DESCRIPTION = 'description';

    public const REPORT_TEMPLATE_CODE = 'reportTemplateCode';

    public const AGENT_CREATED = 'agentCreated';

    public const ARCHIVED = 'archived';

    public const REPORT_DEFINITION_CONTENT = 'reportDefinitionContent';

    public const REPORT_CONTENT = 'reportContent';

    public const LAYOUT_CONTENT = 'layoutContent';

    public const AI_INTERACTION = 'aiInteraction';

    protected $_resourceType = ResourceType::SMART_REPORT;

    /**
     * @param Query $query
     * @return SmartReport[] | Collection
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

        $query->setResourceType(ResourceType::SMART_REPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SmartReport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SMART_REPORT, $id);
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return $this->getProperty('uid');
    }

    /**
     * @param string $uid
     */
    public function setUid(string $uid = null)
    {
        $this->setProperty('uid', $uid);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title = null)
    {
        $this->setProperty('title', $title);
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
     * @return string
     */
    public function getReportTemplateCode()
    {
        return $this->getProperty('reportTemplateCode');
    }

    /**
     * @param string $reportTemplateCode
     */
    public function setReportTemplateCode(string $reportTemplateCode = null)
    {
        $this->setProperty('reportTemplateCode', $reportTemplateCode);
    }

    /**
     * @return bool
     */
    public function getAgentCreated()
    {
        return $this->getProperty('agentCreated');
    }

    /**
     * @param bool $agentCreated
     */
    public function setAgentCreated(bool $agentCreated = null)
    {
        $this->setProperty('agentCreated', $agentCreated);
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
    public function getReportDefinitionContent()
    {
        return $this->getProperty('reportDefinitionContent');
    }

    /**
     * @param \Arbor\Model\Content $reportDefinitionContent
     */
    public function setReportDefinitionContent(\Arbor\Model\Content $reportDefinitionContent = null)
    {
        $this->setProperty('reportDefinitionContent', $reportDefinitionContent);
    }

    /**
     * @return \Arbor\Model\Content
     */
    public function getReportContent()
    {
        return $this->getProperty('reportContent');
    }

    /**
     * @param \Arbor\Model\Content $reportContent
     */
    public function setReportContent(\Arbor\Model\Content $reportContent = null)
    {
        $this->setProperty('reportContent', $reportContent);
    }

    /**
     * @return \Arbor\Model\Content
     */
    public function getLayoutContent()
    {
        return $this->getProperty('layoutContent');
    }

    /**
     * @param \Arbor\Model\Content $layoutContent
     */
    public function setLayoutContent(\Arbor\Model\Content $layoutContent = null)
    {
        $this->setProperty('layoutContent', $layoutContent);
    }

    /**
     * @return \Arbor\Model\AiInteraction
     */
    public function getAiInteraction()
    {
        return $this->getProperty('aiInteraction');
    }

    /**
     * @param \Arbor\Model\AiInteraction $aiInteraction
     */
    public function setAiInteraction(\Arbor\Model\AiInteraction $aiInteraction = null)
    {
        $this->setProperty('aiInteraction', $aiInteraction);
    }
}
