<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SmartReportAiInteraction extends ModelBase
{
    public const SMART_REPORT = 'smartReport';

    public const AI_INTERACTION = 'aiInteraction';

    public const INTERACTION_TYPE = 'interactionType';

    protected $_resourceType = ResourceType::SMART_REPORT_AI_INTERACTION;

    /**
     * @param Query $query
     * @return SmartReportAiInteraction[] | Collection
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

        $query->setResourceType(ResourceType::SMART_REPORT_AI_INTERACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SmartReportAiInteraction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SMART_REPORT_AI_INTERACTION, $id);
    }

    /**
     * @return \Arbor\Model\SmartReport
     */
    public function getSmartReport()
    {
        return $this->getProperty('smartReport');
    }

    /**
     * @param \Arbor\Model\SmartReport $smartReport
     */
    public function setSmartReport(\Arbor\Model\SmartReport $smartReport = null)
    {
        $this->setProperty('smartReport', $smartReport);
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

    /**
     * @return string
     */
    public function getInteractionType()
    {
        return $this->getProperty('interactionType');
    }

    /**
     * @param string $interactionType
     */
    public function setInteractionType(string $interactionType = null)
    {
        $this->setProperty('interactionType', $interactionType);
    }
}
